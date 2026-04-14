# Plan: Basic Models & Filament Resources (Masaa Foundation)

## Context

The application currently only has the default `User` model. Per `.ai/guidelines/Basics.md`, we need a complete domain schema for a charity foundation management system covering:

- Families & family members
- Charity cases, case types, visits
- Documents
- Assistance (types, schedules, deliveries)
- Donations (targets, donations, allocations)

Goal: Scaffold **11 models + migrations + factories + seeders** using Artisan, create **11 Filament v5 resources** for full CRUD admin control, and implement **native PHP enums with Filament's `HasLabel`, `HasColor`, `HasIcon`** contracts using `__()` for all labels.

### Global Conventions (must apply to every task)

- `Model::unguarded()` in `AppServiceProvider::boot()` — **do not add `$fillable`** on any model.
- No code comments, no `Log::*`, no `dd`/`dump`.
- Explicit return types on every method.
- All user-facing strings via `__('...')`.
- Soft deletes on every table that has `deleted_at` in the spec.
- Filament v5 namespaces:
  - Form fields → `Filament\Forms\Components\*`
  - Layout → `Filament\Schemas\Components\*` (Grid/Section/Tabs/Fieldset)
  - Infolist entries → `Filament\Infolists\Components\*`
  - Actions → `Filament\Actions\*` (never sub-namespaces)
  - Icons → `Filament\Support\Icons\Heroicon` enum
- Run `vendor/bin/pint --dirty --format agent` after each phase.
- Use `--no-interaction` on all Artisan commands.

---

## Phase 0 — Preparation

### Task 0.1 — Enable unguarded mode globally
- [ ] Edit `app/Providers/AppServiceProvider.php` → add `Model::unguard();` in `boot()`.
- **Validation:** `php artisan tinker --execute 'echo Illuminate\Database\Eloquent\Model::isUnguarded() ? "ok" : "fail";'` prints `ok`.

### Task 0.2 — Create folder scaffolding for enums
- [ ] Ensure `app/Enums/` exists (create via first `make:enum` command in Phase 2).
- **Validation:** `ls app/Enums` works after Phase 2.

---

## Phase 1 — Models, Migrations, Factories, Seeders

> Use one Artisan command per model with `-mfs` to generate model + migration + factory + seeder in a single call.
> Command template: `php artisan make:model {Name} -mfs --no-interaction`

### Task 1.1 — Generate all 11 models
- [ ] `php artisan make:model Family -mfs --no-interaction`
- [ ] `php artisan make:model FamilyMember -mfs --no-interaction`
- [ ] `php artisan make:model CaseType -mfs --no-interaction`
- [ ] `php artisan make:model CharityCase -mfs --no-interaction`
- [ ] `php artisan make:model Visit -mfs --no-interaction`
- [ ] `php artisan make:model Document -mfs --no-interaction`
- [ ] `php artisan make:model AssistanceType -mfs --no-interaction`
- [ ] `php artisan make:model AssistanceSchedule -mfs --no-interaction`
- [ ] `php artisan make:model AssistanceDelivery -mfs --no-interaction`
- [ ] `php artisan make:model DonationTarget -mfs --no-interaction`
- [ ] `php artisan make:model Donation -mfs --no-interaction`
- [ ] `php artisan make:model DonationAllocation -mfs --no-interaction`
- **Validation:** `ls app/Models` shows all 12 model files (including `User.php`).

### Task 1.2 — Fill migrations per `.ai/guidelines/Basics.md`
For each migration, add every column listed in the spec with correct types:

| Table | Key columns & notes |
|---|---|
| `families` | `code` unique, `status` string, `housing_status` string, `monthly_income` decimal(12,2), `members_count` unsigned int, soft deletes |
| `family_members` | FK `family_id`, `relation_to_head`/`gender`/`marital_status`/`education_status`/`employment_status`/`health_status` strings, `birth_date` date, `monthly_income` decimal, soft deletes |
| `case_types` | `code` unique, `is_active` bool |
| `charity_cases` | FKs `family_id`, `case_type_id`; `code` unique; priority/status/visit_status strings; timestamps for lifecycle; `requested_amount`/`approved_amount` decimal(12,2), soft deletes |
| `visits` | FK `charity_case_id`, `visit_type`/`status` strings, datetimes, text fields, soft deletes |
| `documents` | Nullable FKs `family_id`, `charity_case_id`; `type`/`category`/`visibility` strings; `file_size` unsignedBigInt; bools; soft deletes |
| `assistance_types` | `code` unique, `unit_type` string, bools |
| `assistance_schedules` | FKs `charity_case_id`, `assistance_type_id`; `scheduled_date` date, `scheduled_time` time; amount/quantity decimal; frequency/status/funding_status strings; soft deletes |
| `assistance_deliveries` | FK `assistance_schedule_id`; `delivery_status` string; `delivered_at` datetime; soft deletes |
| `donation_targets` | `type` string, nullable FKs `family_id`/`charity_case_id`; `slug` unique; `goal_amount`/`collected_amount` decimal(12,2); `status` string; `starts_at`/`ends_at` datetimes; soft deletes |
| `donations` | FK `donation_target_id`; donor fields; `amount` decimal; `currency`/`status`/`payment_gateway`/`payment_method` strings; `transaction_id` nullable unique; `anonymous` bool; soft deletes |
| `donation_allocations` | FKs `donation_id`, `donation_target_id`, `family_id`, `charity_case_id`, `assistance_schedule_id` (all nullable where spec says so); `amount` decimal; `allocation_status` string; `allocated_at` datetime; soft deletes |

Add sensible indexes on FK/status/type columns.
- **Validation:** `php artisan migrate:fresh` succeeds with no errors.

### Task 1.3 — Define models
For each model:
- [ ] `use SoftDeletes` where applicable.
- [ ] Add `$casts` with enum class casts (decimal casts for money, datetime casts).
- [ ] Define relationships exactly as in spec (hasMany / belongsTo).
- [ ] Explicit return types on every relationship method.
- **Validation:**
  - `php artisan tinker --execute 'App\Models\Family::query()->getModel()->charityCases();'` returns a HasMany instance.
  - Relationships round-trip: create via factory and traverse.

### Task 1.4 — Factories (minimal, realistic)
- [ ] Implement each factory using `fake()` with valid enum values.
- [ ] Configure related FKs via `Model::factory()`.
- **Validation:** `php artisan tinker --execute 'App\Models\Family::factory()->count(3)->create();'` succeeds.

### Task 1.5 — DatabaseSeeder wiring
- [ ] Register all seeders in `database/seeders/DatabaseSeeder.php` in dependency order: CaseType → AssistanceType → Family → FamilyMember → CharityCase → Visit → Document → AssistanceSchedule → AssistanceDelivery → DonationTarget → Donation → DonationAllocation.
- **Validation:** `php artisan migrate:fresh --seed` runs clean; row counts > 0 for each table via `database-query` MCP tool.

---

## Phase 2 — Enums (Filament-compatible)

All enums: `string`-backed, implement `HasLabel`, `HasColor`, `HasIcon`. TitleCase keys. Use `__()` for labels. Use `Filament\Support\Icons\Heroicon` enum for icons.

### Task 2.1 — Generate enum classes
- [ ] `php artisan make:enum Enums/HousingStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/FamilyStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/RelationToHead --string --no-interaction`
- [ ] `php artisan make:enum Enums/Gender --string --no-interaction`
- [ ] `php artisan make:enum Enums/MaritalStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/EducationStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/EmploymentStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/HealthStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/CasePriority --string --no-interaction`
- [ ] `php artisan make:enum Enums/CaseStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/VisitStatusCase --string --no-interaction` (the `charity_cases.visit_status`)
- [ ] `php artisan make:enum Enums/VisitType --string --no-interaction`
- [ ] `php artisan make:enum Enums/VisitStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/DocumentType --string --no-interaction`
- [ ] `php artisan make:enum Enums/DocumentCategory --string --no-interaction`
- [ ] `php artisan make:enum Enums/DocumentVisibility --string --no-interaction`
- [ ] `php artisan make:enum Enums/AssistanceUnitType --string --no-interaction`
- [ ] `php artisan make:enum Enums/ScheduleFrequency --string --no-interaction`
- [ ] `php artisan make:enum Enums/ScheduleStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/FundingStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/DeliveryStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/DonationTargetType --string --no-interaction`
- [ ] `php artisan make:enum Enums/DonationTargetStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/Currency --string --no-interaction`
- [ ] `php artisan make:enum Enums/DonationStatus --string --no-interaction`
- [ ] `php artisan make:enum Enums/PaymentGateway --string --no-interaction`
- [ ] `php artisan make:enum Enums/PaymentMethod --string --no-interaction`
- [ ] `php artisan make:enum Enums/AllocationStatus --string --no-interaction`

### Task 2.2 — Implement each enum
Each file must:
```php
implements HasLabel, HasColor, HasIcon
```
and define:
- `public function getLabel(): string` → `__('...')`
- `public function getColor(): string|array|null`
- `public function getIcon(): string|null` → `Heroicon::*->value`

- **Validation:**
  - `php artisan tinker --execute 'echo App\Enums\CaseStatus::Approved->getLabel();'` prints a translated string.
  - PHPStan/static analysis: none required, but run Pint.

### Task 2.3 — Cast enums on models
- [ ] Add `$casts` entries for every enum column on its owning model.
- **Validation:** `App\Models\CharityCase::factory()->create()->status` returns an enum instance.

---

## Phase 3 — Filament Resources

Use Filament v5 generator with `--generate` to scaffold schemas from migrations; we then refine.

Command template:
```
php artisan make:filament-resource {Model} --generate --no-interaction
```

### Task 3.1 — Generate resources
- [ ] `php artisan make:filament-resource Family --generate --no-interaction`
- [ ] `php artisan make:filament-resource FamilyMember --generate --no-interaction`
- [ ] `php artisan make:filament-resource CaseType --generate --no-interaction`
- [ ] `php artisan make:filament-resource CharityCase --generate --no-interaction`
- [ ] `php artisan make:filament-resource Visit --generate --no-interaction`
- [ ] `php artisan make:filament-resource Document --generate --no-interaction`
- [ ] `php artisan make:filament-resource AssistanceType --generate --no-interaction`
- [ ] `php artisan make:filament-resource AssistanceSchedule --generate --no-interaction`
- [ ] `php artisan make:filament-resource AssistanceDelivery --generate --no-interaction`
- [ ] `php artisan make:filament-resource DonationTarget --generate --no-interaction`
- [ ] `php artisan make:filament-resource Donation --generate --no-interaction`
- [ ] `php artisan make:filament-resource DonationAllocation --generate --no-interaction`
- **Validation:** `ls app/Filament/Resources` shows all 12 resource directories.

### Task 3.2 — Refine each Resource schema (form)
For every enum field: use `Select::make(...)->options(EnumClass::class)`.
For every relationship: use `Select::make('x_id')->relationship('x', 'name')->searchable()->preload()`.
For money: `TextInput::make()->numeric()->prefix(...)`.
For dates: `DatePicker` / `DateTimePicker`.
Wrap fields in `Section::make(__('Section Label'))->columns(2)`.
All labels/placeholders via `__()`.

- **Validation:** Open `/admin/families/create` in browser — form renders with translated labels and enum selects.

### Task 3.3 — Refine each Resource table
For every enum column: `TextColumn::make('status')->badge()` (uses HasColor/HasIcon automatically).
Add searchable on name/code/title.
Add filters: `SelectFilter` for enums + `TrashedFilter` where soft deletes exist.
Toggle-able columns for secondary fields.

- **Validation:** `/admin/charity-cases` lists records with colored badges and working filters.

### Task 3.4 — Navigation grouping
Set `protected static string|UnitEnum|null $navigationGroup` on each resource:
- **Families** group → Family, FamilyMember
- **Cases** group → CaseType, CharityCase, Visit
- **Assistance** group → AssistanceType, AssistanceSchedule, AssistanceDelivery
- **Documents** group → Document
- **Donations** group → DonationTarget, Donation, DonationAllocation

Set `$navigationIcon` per resource using `Heroicon` enum (note: type must be `string | BackedEnum | null`).
- **Validation:** Admin sidebar shows all groups with icons in correct order.

### Task 3.5 — Relation managers
Add where they make sense for UX:
- [ ] `FamilyResource` → `FamilyMembersRelationManager`, `CharityCasesRelationManager`, `DocumentsRelationManager`, `DonationTargetsRelationManager`.
- [ ] `CharityCaseResource` → `VisitsRelationManager`, `DocumentsRelationManager`, `AssistanceSchedulesRelationManager`, `DonationTargetsRelationManager`.
- [ ] `AssistanceScheduleResource` → `AssistanceDeliveriesRelationManager`, `DonationAllocationsRelationManager`.
- [ ] `DonationTargetResource` → `DonationsRelationManager`, `DonationAllocationsRelationManager`.
- [ ] `DonationResource` → `DonationAllocationsRelationManager`.

Command: `php artisan make:filament-relation-manager {ResourceClass} {relationshipName} {recordTitleAttribute} --no-interaction`

- **Validation:** Navigate to a Family edit page — member tab renders and allows create/edit.

---

## Phase 4 — Finalization

### Task 4.1 — Pint formatting
- [ ] `vendor/bin/pint --dirty --format agent`
- **Validation:** Exit code 0.

### Task 4.2 — End-to-end smoke
- [ ] `php artisan migrate:fresh --seed`
- [ ] Log into `/admin`, click every resource in the sidebar, confirm list + create + edit pages load without errors.
- [ ] Check `storage/logs/laravel.log` for new exceptions (via `read-log-entries` MCP tool).

### Task 4.3 — Clear caches
- [ ] `php artisan optimize:clear`

---

## Critical Files To Create / Modify

- `app/Providers/AppServiceProvider.php` — unguard
- `app/Models/*.php` — 11 new models
- `database/migrations/*_create_*_table.php` — 11 new migrations
- `database/factories/*Factory.php` — 11 new factories
- `database/seeders/*Seeder.php` + `DatabaseSeeder.php`
- `app/Enums/*.php` — ~28 enum files
- `app/Filament/Resources/**` — 12 resources + pages + schemas + relation managers

## Files To Reference (reuse patterns from)

- `app/Providers/Filament/AdminPanelProvider.php` — already discovers `app/Filament/Resources`.
- `app/Models/User.php` — baseline model style.

## Verification Checklist (final)

- [ ] `php artisan migrate:fresh --seed` green
- [ ] `vendor/bin/pint --dirty --format agent` green
- [ ] `/admin` login works; all 12 resources reachable
- [ ] All enum badges render with color + icon + translated label
- [ ] Relation managers work on Family, CharityCase, AssistanceSchedule, DonationTarget
- [ ] No `Log::`, no comments, no `$fillable` anywhere in new code
