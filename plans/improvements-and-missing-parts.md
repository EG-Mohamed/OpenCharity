# Improvements & Missing Parts

## Verification Summary

Everything from the original plan was completed:
- 11 models + migrations + factories + seeders ✅
- `Model::unguard()` in AppServiceProvider ✅
- 28 enums with `HasLabel` / `HasColor` / `HasIcon` ✅
- 12 Filament resources scaffolded ✅
- Relation managers created ✅
- `php artisan migrate:fresh --seed` passes ✅
- Pint passes ✅

---

## Issues Found

### Issue 1 — `getIcon()` return type violates `HasIcon` contract (CRITICAL)

**Problem:** Every enum's `getIcon()` is declared as `?Heroicon`, but the `HasIcon` contract requires `string | BackedEnum | Htmlable | null`. Since `Heroicon` is a `BackedEnum`, the *return value* works at runtime — but the PHP method signature is a **narrower type** than the interface demands, which causes a type declaration error.

**Files affected:** All 28 enums in `app/Enums/`.

**Fix:** Change every `getIcon()` signature from:
```php
public function getIcon(): ?Heroicon
```
to:
```php
public function getIcon(): string|BackedEnum|null
```

---

### Issue 2 — Relation managers not registered in `getRelations()` (CRITICAL)

**Problem:** All relation manager files exist but no resource has them wired into `getRelations()`. The `getRelations()` array is empty (`return []`) in every resource. The tabs will never appear in the edit pages.

**Files affected:**
- `app/Filament/Resources/Families/FamilyResource.php`
- `app/Filament/Resources/CharityCases/CharityCaseResource.php`
- `app/Filament/Resources/AssistanceSchedules/AssistanceScheduleResource.php`
- `app/Filament/Resources/DonationTargets/DonationTargetResource.php`
- `app/Filament/Resources/Donations/DonationResource.php`

**Fix:** Populate `getRelations()` in each resource:

```php
// FamilyResource
public static function getRelations(): array
{
    return [
        RelationManagers\FamilyMembersRelationManager::class,
        RelationManagers\CharityCasesRelationManager::class,
        RelationManagers\DocumentsRelationManager::class,
        RelationManagers\DonationTargetsRelationManager::class,
    ];
}

// CharityCaseResource
public static function getRelations(): array
{
    return [
        RelationManagers\VisitsRelationManager::class,
        RelationManagers\DocumentsRelationManager::class,
        RelationManagers\AssistanceSchedulesRelationManager::class,
        RelationManagers\DonationTargetsRelationManager::class,
    ];
}

// AssistanceScheduleResource
public static function getRelations(): array
{
    return [
        RelationManagers\AssistanceDeliveriesRelationManager::class,
        RelationManagers\DonationAllocationsRelationManager::class,
    ];
}

// DonationTargetResource
public static function getRelations(): array
{
    return [
        RelationManagers\DonationsRelationManager::class,
        RelationManagers\DonationAllocationsRelationManager::class,
    ];
}

// DonationResource
public static function getRelations(): array
{
    return [
        RelationManagers\DonationAllocationsRelationManager::class,
    ];
}
```

---

### Issue 3 — Navigation groups not set on any resource

**Problem:** No resource has `$navigationGroup` defined. All 12 resources dump into a flat sidebar with no grouping, making navigation chaotic.

**Files affected:** All 12 resource files.

**Fix:** Add to each resource (use `UnitEnum` union type):

```php
use UnitEnum;

protected static string|UnitEnum|null $navigationGroup = 'Families';   // Family, FamilyMember
protected static string|UnitEnum|null $navigationGroup = 'Cases';      // CaseType, CharityCase, Visit
protected static string|UnitEnum|null $navigationGroup = 'Assistance'; // AssistanceType, AssistanceSchedule, AssistanceDelivery
protected static string|UnitEnum|null $navigationGroup = 'Documents';  // Document
protected static string|UnitEnum|null $navigationGroup = 'Donations';  // DonationTarget, Donation, DonationAllocation
```

Also wrap the string value in `__()` for translation:
```php
public static function getNavigationGroup(): ?string
{
    return __('Families');
}
```

---

### Issue 4 — Unique navigation icons (all resources share `OutlinedRectangleStack`)

**Problem:** Every resource uses the same `Heroicon::OutlinedRectangleStack` icon making the sidebar visually uniform and hard to distinguish at a glance.

**Files affected:** All 12 resource files.

**Fix:** Assign a semantically meaningful icon per resource:

| Resource | Icon |
|---|---|
| Family | `Heroicon::OutlinedHome` |
| FamilyMember | `Heroicon::OutlinedUsers` |
| CaseType | `Heroicon::OutlinedTag` |
| CharityCase | `Heroicon::OutlinedBriefcase` |
| Visit | `Heroicon::OutlinedMapPin` |
| Document | `Heroicon::OutlinedDocumentText` |
| AssistanceType | `Heroicon::OutlinedWrench` |
| AssistanceSchedule | `Heroicon::OutlinedCalendarDays` |
| AssistanceDelivery | `Heroicon::OutlinedTruck` |
| DonationTarget | `Heroicon::OutlinedBullseye` |
| Donation | `Heroicon::OutlinedCurrencyDollar` |
| DonationAllocation | `Heroicon::OutlinedArrowsRightLeft` |

---

### Issue 5 — Form fields missing `->label(__('...'))`

**Problem:** Form fields rely on Filament's auto-label (snake_case → Title Case) instead of translatable labels via `__()`. The CLAUDE.md rule requires all user-facing strings to use `__()`.

**Files affected:** All `*/Schemas/*Form.php` and relation manager `form()` methods.

**Fix:** Add explicit `->label(__('Field Label'))` to every field. Example:
```php
TextInput::make('code')->label(__('Code'))->required(),
TextInput::make('name')->label(__('Name'))->required(),
Select::make('status')->label(__('Status'))->options(FamilyStatus::class)->required(),
```

---

### Issue 6 — Table columns missing `->label(__('...'))`

Same issue as Issue 5 but in `*/Tables/*Table.php` files.

**Fix:** Add `->label(__('Column Label'))` to every `TextColumn`, `BadgeColumn`, etc.

---

### Issue 7 — Table filters missing enum `SelectFilter`

**Problem:** Tables only have `TrashedFilter`. Enum-backed status/priority/type columns have no filter, making bulk filtering by status impossible.

**Files affected:** All `*/Tables/*Table.php` files.

**Fix:** Add `SelectFilter` for key enum columns. Example for FamiliesTable:
```php
use Filament\Tables\Filters\SelectFilter;

->filters([
    SelectFilter::make('status')->options(FamilyStatus::class)->label(__('Status')),
    SelectFilter::make('housing_status')->options(HousingStatus::class)->label(__('Housing Status')),
    TrashedFilter::make(),
])
```

---

### Issue 8 — Form fields not grouped with `Section` / `Grid` for layout

**Problem:** All form fields are flat. The plan required wrapping fields in `Section::make(__('...'))->columns(2)` for better visual grouping. Currently all fields render in a single-column list.

**Files affected:** All `*/Schemas/*Form.php` files.

**Fix:** Wrap logically related fields in sections:
```php
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;

Section::make(__('Basic Information'))
    ->columns(2)
    ->schema([
        TextInput::make('code')...
        TextInput::make('name')...
    ]),
Section::make(__('Contact Information'))
    ->columns(2)
    ->schema([...]),
```

---

### Issue 9 — `AssociateAction` on FamilyMembersRelationManager is incorrect

**Problem:** `FamilyMembersRelationManager` uses `AssociateAction` + `DissociateAction` — this implies family members are shared across families. They are owned exclusively (`family_id` is a non-nullable FK, no pivot table). Should be `CreateAction` + `DeleteAction` only.

**Fix:** Remove `AssociateAction`, `DissociateAction`, `DissociateBulkAction` from `FamilyMembersRelationManager`. Same audit needed for `VisitsRelationManager`, `DocumentsRelationManager`, `AssistanceSchedulesRelationManager`, `AssistanceDeliveriesRelationManager`.

---

### Issue 10 — Missing `->searchable()` / `->sortable()` on Table `status` badge columns

**Problem:** Status badge columns can't be sorted in most tables. Adding `->sortable()` on enum-casted columns improves UX significantly.

---

## Enhancement Opportunities (non-critical)

### Enhancement A — `GlobalSearch` on resources

Add `protected static ?string $recordTitleAttribute` to each resource so Filament's global search picks up records by name/code/title.

```php
protected static ?string $recordTitleAttribute = 'name';  // or 'code', 'title'
```

### Enhancement B — Money columns formatted with currency symbol

Decimal columns like `monthly_income`, `amount`, `goal_amount` display as raw numbers. Use `->money('EGP')` on `TextColumn` for formatted display.

### Enhancement C — `ViewAction` on table rows

Currently only `EditAction` is in `recordActions`. Adding `ViewAction` provides a read-only infolist view — useful for auditors.

### Enhancement D — Infolists for View pages

Resources only have form schemas. Creating `*/Infolists/*Infolist.php` with `TextEntry` / `IconEntry` / `BadgeEntry` gives a clean read-only view when `ViewAction` is added (Enhancement C).

### Enhancement E — `DateRangeFilter` on tables with date columns

`charity_cases.registered_at`, `donations.paid_at`, `assistance_schedules.scheduled_date` benefit from date range filters for time-period reporting.

### Enhancement F — `ExportAction` on tables

Add `ExportAction` to key resource tables (Families, CharityCases, Donations) for CSV export.

---

## Task Checklist

### Critical (must fix before using in production)

- [ ] **Fix `getIcon()` return type** on all 28 enums (`?Heroicon` → `string|BackedEnum|null`)
- [ ] **Wire relation managers** into `getRelations()` on 5 resources
- [ ] **Add `$navigationGroup`** (via `getNavigationGroup()` with `__()`) on all 12 resources
- [ ] **Assign unique `$navigationIcon`** per resource (see table above)
- [ ] **Add `->label(__('...'))`** to all form fields across all 12 form schemas and relation managers
- [ ] **Add `->label(__('...'))`** to all table columns
- [ ] **Add `SelectFilter`** for enum columns on all 12 table schemas
- [ ] **Wrap form fields in `Section::make()->columns(2)`** in all form schemas
- [ ] **Remove `AssociateAction`/`DissociateAction`** from owned-relation relation managers

### Non-critical (enhancements)

- [ ] Add `$recordTitleAttribute` for global search on all resources
- [ ] Format money columns with `->money('EGP')`
- [ ] Add `ViewAction` to table row actions
- [ ] Create `*/Infolists/*Infolist.php` for read-only view pages
- [ ] Add date range filters on date-heavy tables
- [ ] Add `ExportAction` to key tables

---

## Verification After Fixes

- [ ] `php artisan tinker --execute 'echo App\Enums\CaseStatus::Approved->getIcon();'` returns a string value
- [ ] Navigate to `/admin/families/{id}/edit` — relation manager tabs (Members, Cases, Documents) render
- [ ] Sidebar shows 5 navigation groups with distinct icons
- [ ] Every form field shows a translated Arabic/English label (not auto-generated)
- [ ] Status filters work on CharityCase list table
- [ ] `vendor/bin/pint --dirty --format agent` passes
