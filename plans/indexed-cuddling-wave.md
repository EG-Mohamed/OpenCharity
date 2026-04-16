# Assistance Schedules: Recurring Automation + Calendar

## Context

The current AssistanceSchedule system is purely manual — the `frequency` field is just metadata with no automation. Schedules are only manageable from CharityCase → RelationManager, making it hard to get a family-level overview. The user wants:
1. **Automatic recurring schedule generation** based on frequency
2. **Intelligent status cascading** (cancel parent → cancel future children)
3. **Family-level schedule management** via RelationManager
4. **FullCalendar page** to visualize all schedules

---

## Phase 1: Migration — Add Recurring Fields

**Create:** `database/migrations/2026_04_16_XXXXXX_add_recurring_fields_to_assistance_schedules_table.php`

Add to `assistance_schedules`:
- `parent_schedule_id` — nullable self-referencing FK (nullOnDelete)
- `end_date` — nullable date (when series ends)
- `occurrence_number` — nullable unsigned integer

Index on `parent_schedule_id`.

---

## Phase 2: Model Changes

**Modify:** `app/Models/AssistanceSchedule.php`
- Cast `end_date` → `date`
- Add `parent()` BelongsTo (self-reference)
- Add `children()` HasMany (self-reference)
- Add helpers: `isParent(): bool`, `isChild(): bool`, `isRecurring(): bool`

**Modify:** `app/Models/Family.php`
- Add `assistanceSchedules()` HasManyThrough (through CharityCase)

**Modify:** `app/Enums/ScheduleFrequency.php`
- Add `nextDate(Carbon $from): ?Carbon` method to compute next occurrence date per frequency

---

## Phase 3: Recurring Schedule Service

**Create:** `app/Services/RecurringScheduleService.php`

Methods:
- `generateOccurrences(AssistanceSchedule $parent): void` — generates child records from `scheduled_date` to `end_date` (or 12 occurrences if no end_date). Children copy charity_case_id, assistance_type_id, amount, quantity, scheduled_time. Children get status=Scheduled, funding_status=Unfunded, frequency=Once.
- `cancelFutureOccurrences(AssistanceSchedule $parent): void` — cancel all future children where status is not Completed/Canceled
- `regenerateOccurrences(AssistanceSchedule $parent): void` — soft-delete future non-completed children, regenerate from next needed date

---

## Phase 4: Observer — Intelligent Status Management

**Create:** `app/Observers/AssistanceScheduleObserver.php`

Register via `#[ObservedBy]` attribute on model.

| Event | Condition | Action |
|-------|-----------|--------|
| `creating` | frequency ≠ Once, no end_date | Auto-set end_date to 12 periods ahead |
| `created` | isParent (recurring, no parent_id) | Call `generateOccurrences()` |
| `updating` | status → Canceled, isParent | Call `cancelFutureOccurrences()` |
| `updating` | status → Postponed, isParent | Postpone future Scheduled/Approved children |
| `updating` | date/amount/quantity/end_date changed, isParent | Call `regenerateOccurrences()` |
| `deleting` | isParent | Soft-delete all children |

---

## Phase 5: Form Changes

**Modify:** `app/Filament/Resources/AssistanceSchedules/Schemas/AssistanceScheduleForm.php`

- Make `assistance_type_id` live → when `is_recurring_allowed` is false, force frequency to Once
- Make `frequency` live → show `end_date` DatePicker when frequency ≠ Once
- When editing a child record (has parent_schedule_id), disable frequency/end_date fields
- Add info badge showing "Part of series" for child records

---

## Phase 6: Table Enhancements

**Modify:** `app/Filament/Resources/AssistanceSchedules/Tables/AssistanceSchedulesTable.php`

- Add badge column showing "Series" for parents, "Occurrence #N" for children
- Add filter to show only parents vs all occurrences

---

## Phase 7: Family-Level RelationManager

**Create:** `app/Filament/Resources/Families/RelationManagers/AssistanceSchedulesRelationManager.php`

Follow existing pattern (like VisitsRelationManager):
- Relationship: `assistanceSchedules`
- Reuse `AssistanceSchedulesTable::configure()`
- Header Create action with slideOver modal
- Show charityCase.code column

**Modify:** `app/Filament/Resources/Families/FamilyResource.php`
- Add `AssistanceSchedulesRelationManager` to `getRelations()` after CharityCases

---

## Phase 8: FullCalendar Integration

**Install:** `composer require saade/filament-fullcalendar`

**Modify:** `app/Providers/Filament/AdminPanelProvider.php`
- Register `FilamentFullCalendarPlugin::make()` in plugins array

**Create:** `app/Filament/Widgets/AssistanceCalendarWidget.php`
- Extend `FullCalendarWidget`
- Implement `fetchEvents()` → query AssistanceSchedule with assistanceType and charityCase
- Map to calendar events with status-based colors
- Handle event click → open edit modal or redirect to schedule

**Create:** `app/Filament/Pages/AssistanceCalendar.php`
- Custom page under "Assistance" navigation group
- Renders the calendar widget
- Icon: `Heroicon::OutlinedCalendarDays`

---

## Phase 9: Scheduled Command

**Create:** `app/Console/Commands/GenerateUpcomingSchedules.php`

Artisan command `schedule:generate-upcoming`:
- Find parent schedules where latest child's date is within 30 days of today
- Generate next batch of occurrences
- Register to run daily

---

## Critical Files

| File | Action |
|------|--------|
| `app/Models/AssistanceSchedule.php` | Modify |
| `app/Models/Family.php` | Modify |
| `app/Enums/ScheduleFrequency.php` | Modify |
| `app/Services/RecurringScheduleService.php` | Create |
| `app/Observers/AssistanceScheduleObserver.php` | Create |
| `app/Filament/Resources/AssistanceSchedules/Schemas/AssistanceScheduleForm.php` | Modify |
| `app/Filament/Resources/AssistanceSchedules/Tables/AssistanceSchedulesTable.php` | Modify |
| `app/Filament/Resources/Families/RelationManagers/AssistanceSchedulesRelationManager.php` | Create |
| `app/Filament/Resources/Families/FamilyResource.php` | Modify |
| `app/Filament/Widgets/AssistanceCalendarWidget.php` | Create |
| `app/Filament/Pages/AssistanceCalendar.php` | Create |
| `app/Providers/Filament/AdminPanelProvider.php` | Modify |
| `app/Console/Commands/GenerateUpcomingSchedules.php` | Create |
| Migration file | Create |

## Verification

1. Create an AssistanceSchedule with frequency=Monthly → verify 12 child records generated
2. Cancel the parent → verify future children are canceled, past completed ones untouched
3. Visit Family → see AssistanceSchedules tab with all schedules across cases
4. Visit Assistance Calendar page → see schedules on calendar, click to view details
5. Run `php artisan schedule:generate-upcoming` → verify new occurrences created for expiring series
