# Plan — Reports, Diseases, Nationalities

## Context

Three features to add to the MasaaFoundation admin panel:

1. **Official PDF reports** for `Family` and `FamilyMember` — comprehensive, Arabic-supporting, elegantly designed documents suitable for submission to government/official bodies. Users need control over what sections to include (members, charity cases, visits, assistance schedules, documents, donations).
2. **Diseases model** — chronic-flag aware lookup. `HealthStatus` simplifies to `healthy`/`unhealthy`; when unhealthy, one or more diseases can be attached. Filterable in the FamilyMember resource.
3. **Nationalities model** — simple name/status lookup, attached to FamilyMember and filterable.

Decisions confirmed with user:
- PDF library: **spatie/laravel-pdf** (Browsershot, best Arabic/RTL + modern CSS).
- Report UI: **single action → modal with section checkboxes**.
- Diseases link: **many-to-many pivot**.
- HealthStatus: **simplified to `healthy` / `unhealthy`** (migrate existing rows).

Final report task appends progress into the first task's report file.

---

## Task order

### Task 1 — Official PDF Reports for Family & FamilyMember

**Goal:** Generate elegant Arabic/RTL PDFs for a single Family (with optional sections) or a single FamilyMember, invoked from Filament actions.

**Steps**

1. Install dependency
   - `composer require spatie/laravel-pdf`
   - Ensure Browsershot prerequisites (Node + Chromium) documented in task report.

2. Service layer — `app/Services/Reports/`
   - `FamilyReportService.php`
     - `generate(Family $family, FamilyReportOptions $options): \Spatie\LaravelPdf\PdfBuilder`
     - Eager-loads selected relations only (avoid N+1): `familyMembers`, `familyMembers.diseases`, `familyMembers.nationality`, `charityCases.caseType`, `charityCases.visits`, `charityCases.assistanceSchedules.assistanceType`, `documents`, `donationTargets`.
   - `FamilyMemberReportService.php`
     - `generate(FamilyMember $member): PdfBuilder`
     - Loads `family`, `diseases`, `nationality`, `family.charityCases` (member-related only if scoped later).
   - `FamilyReportOptions.php` — readonly DTO with bools: `includeMembers`, `includeCharityCases`, `includeVisits`, `includeAssistanceSchedules`, `includeDocuments`, `includeDonations`. Use constructor property promotion.

3. Blade templates — `resources/views/pdf/reports/`
   - `family.blade.php` — cover header (org logo placeholder, title, reference code, date), family details section, conditional sections per options.
   - `family-member.blade.php` — identity card style header, member details, diseases list, related cases summary.
   - `partials/` — `header.blade.php`, `footer.blade.php`, `members.blade.php`, `charity-cases.blade.php`, `visits.blade.php`, `assistance-schedules.blade.php`, `documents.blade.php`, `donations.blade.php`.
   - Use `dir="rtl"` with `lang="ar"`; Tailwind-compatible utility CSS inline (Browsershot handles it), Amiri/Cairo Google Font for Arabic typography.
   - All visible labels via `__('...')`.

4. Lang strings
   - Add Arabic + English keys to `lang/ar.json` and `lang/en.json` for every report label (section headings, field labels, footer "issued by ...").

5. Filament actions (namespace `Filament\Actions\Action`)
   - `app/Filament/Actions/PrintFamilyReportAction.php`
     - Modal schema with `Toggle` or `Checkbox` per section (all default `true`).
     - `action()` → call `FamilyReportService::generate(...)->download("family-{$record->code}.pdf")` (return the streamed response).
   - `app/Filament/Actions/PrintFamilyMemberReportAction.php`
     - No modal (single document), direct download.
   - Wire into:
     - `FamiliesTable.php` record actions + `ViewFamily.php` header actions.
     - `FamilyMembersTable.php` record actions + `EditFamilyMember.php` header actions.
     - Also add to `FamilyMembersRelationManager` table actions.

6. Write progress report
   - Create `reports/task-1-reports.md` capturing: packages added, files created, any manual steps (Chromium/Node on server, fonts), follow-ups.

**Critical files**
- `app/Services/Reports/FamilyReportService.php` (new)
- `app/Services/Reports/FamilyMemberReportService.php` (new)
- `app/Services/Reports/FamilyReportOptions.php` (new)
- `resources/views/pdf/reports/**` (new)
- `app/Filament/Actions/PrintFamilyReportAction.php` (new)
- `app/Filament/Actions/PrintFamilyMemberReportAction.php` (new)
- `app/Filament/Resources/Families/Tables/FamiliesTable.php`
- `app/Filament/Resources/Families/Pages/ViewFamily.php`
- `app/Filament/Resources/FamilyMembers/Tables/FamilyMembersTable.php`
- `app/Filament/Resources/FamilyMembers/Pages/EditFamilyMember.php`
- `app/Filament/Resources/Families/RelationManagers/FamilyMembersRelationManager.php`
- `lang/ar.json`, `lang/en.json`

**Reuse**
- Existing `Filament\Actions\Action` pattern from `app/Filament/Actions/CreateDeliveryAction.php`.
- Existing enum labels (`HealthStatus`, `FamilyStatus`, `HousingStatus`, etc.) — call `->getLabel()` inside Blade to get translated display values.

**Verification**
- From a seeded Family detail page, click "Print Family Report", check all sections, download — verify: Arabic renders correctly (ligatures, no tofu), RTL direction, page breaks sensible, each section shows correct joined data.
- Toggle individual sections off — verify omitted in PDF.
- From a FamilyMember row, click "Print Member Report" — verify single-member PDF.

---

### Task 2 — Diseases model + refactor HealthStatus

**Goal:** Introduce `Disease` lookup (chronic flag), reduce `HealthStatus` to `healthy`/`unhealthy`, attach multiple diseases to unhealthy members, expose filters.

**Steps**

1. Migrations (`php artisan make:migration ...`)
   - `create_diseases_table`: `id`, `name` (unique), `is_chronic` boolean default false, `is_active` boolean default true, timestamps.
   - `create_disease_family_member_table`: pivot `disease_id`, `family_member_id` (FK cascade), unique composite, timestamps optional.
   - `update_family_members_health_status_values` (data migration): `update family_members set health_status = 'unhealthy' where health_status in ('chronic_illness','disabled','critical','other')`.

2. Enum — `app/Enums/HealthStatus.php`
   - Replace cases with `Healthy = 'healthy'`, `Unhealthy = 'unhealthy'`.
   - Update `getLabel()` / `getColor()` / `getIcon()` (keep `Heroicon::Heart`).
   - Remove stale references in `FamilyMemberFactory`, `FamilyMemberStatsOverview`.

3. Model — `app/Models/Disease.php`
   - `Model::unguard()` compatible (per user global rule, no fillable).
   - Casts: `is_chronic` bool, `is_active` bool.
   - `familyMembers(): BelongsToMany`.

4. Update `app/Models/FamilyMember.php`
   - Add `diseases(): BelongsToMany` relation.

5. Factory — `DiseaseFactory` mirroring `CaseTypeFactory` pattern (name, is_chronic 40%, is_active 85%).

6. Filament resource — `app/Filament/Resources/Diseases/`
   - `DiseaseResource` under `Settings` navigation group (like `CaseTypeResource`).
   - Form: `TextInput` name, `Toggle` is_chronic, `Toggle` is_active.
   - Table: name, is_chronic badge, is_active toggle, filters by is_chronic/is_active.
   - Pages: List/Create/Edit.

7. Update `FamilyMemberForm.php` (lines 84–89 area)
   - Keep `Select::make('health_status')` (now 2 options) with `->live()`.
   - Add `Select::make('diseases')->relationship('diseases', 'name')->multiple()->preload()->searchable()->visible(fn (Get $get) => $get('health_status') === HealthStatus::Unhealthy->value)`.

8. Update `FamilyMembersTable.php`
   - Column: diseases as `TextColumn::make('diseases.name')->badge()->separator(',')->toggleable()`.
   - Filters:
     - Existing `health_status` filter stays (now 2 options).
     - `SelectFilter::make('diseases')->relationship('diseases', 'name')->multiple()->preload()->searchable()`.
     - `TernaryFilter::make('is_chronic')` via custom query `whereHas('diseases', fn ($q) => $q->where('is_chronic', true))`.

9. Update `FamilyExporter` / `FamilyMemberExporter` — add diseases column (comma-joined names) if present.

10. Seeder (optional, light) — seed a few common diseases (Diabetes, Hypertension, Asthma, …) in `DatabaseSeeder` or a new `DiseaseSeeder`. Ask before wiring into prod seeders.

**Critical files**
- `database/migrations/YYYY_MM_DD_create_diseases_table.php` (new)
- `database/migrations/YYYY_MM_DD_create_disease_family_member_table.php` (new)
- `database/migrations/YYYY_MM_DD_migrate_health_status_values.php` (new)
- `app/Enums/HealthStatus.php` (edit)
- `app/Models/Disease.php` (new)
- `app/Models/FamilyMember.php` (edit — add relation)
- `database/factories/DiseaseFactory.php` (new)
- `database/factories/FamilyMemberFactory.php` (edit)
- `app/Filament/Resources/Diseases/**` (new)
- `app/Filament/Resources/FamilyMembers/Schemas/FamilyMemberForm.php` (edit)
- `app/Filament/Resources/FamilyMembers/Tables/FamilyMembersTable.php` (edit)
- `app/Filament/Resources/FamilyMembers/Widgets/FamilyMemberStatsOverview.php` (edit)
- `app/Filament/Exports/FamilyMemberExporter.php` (edit)

**Reuse**
- Template: `app/Models/CaseType.php`, `app/Filament/Resources/CaseTypes/**`, `database/factories/CaseTypeFactory.php`.

**Verification**
- Migrate, open Diseases resource, create chronic + non-chronic entries.
- Edit a FamilyMember → set Unhealthy → diseases multi-select appears → save → reload and confirm.
- On members table filter by disease + `is_chronic` → correct set returned.
- Regenerate a Family PDF — diseases appear per member.

---

### Task 3 — Nationalities model

**Goal:** Lookup model `Nationality` (name, status), attached 1-to-many on FamilyMember (`nationality_id`), with filter.

**Steps**

1. Migrations
   - `create_nationalities_table`: `id`, `name` unique, `is_active` boolean default true, timestamps.
   - `add_nationality_id_to_family_members_table`: nullable foreign, `constrained()->nullOnDelete()`, index.

2. Model — `app/Models/Nationality.php`
   - Casts: `is_active` bool.
   - `familyMembers(): HasMany`.

3. Update `app/Models/FamilyMember.php`
   - `nationality(): BelongsTo`.

4. Factory — `NationalityFactory` mirroring lookup pattern.

5. Filament resource — `app/Filament/Resources/Nationalities/` under `Settings` group.
   - Form: name, is_active toggle.
   - Table + filters by is_active.

6. Update `FamilyMemberForm.php`
   - Add `Select::make('nationality_id')->relationship('nationality', 'name')->searchable()->preload()` in the identity section.

7. Update `FamilyMembersTable.php`
   - Column: `TextColumn::make('nationality.name')->toggleable()`.
   - Filter: `SelectFilter::make('nationality_id')->relationship('nationality', 'name')->searchable()->preload()`.

8. Seed common nationalities (Egyptian, Syrian, Sudanese, Palestinian, …) — ask before seeding prod.

9. Update `FamilyMemberExporter` to include nationality name.

10. Update Family/FamilyMember PDF templates (Task 1) to render nationality line in the member identity block.

**Critical files**
- `database/migrations/YYYY_MM_DD_create_nationalities_table.php` (new)
- `database/migrations/YYYY_MM_DD_add_nationality_id_to_family_members_table.php` (new)
- `app/Models/Nationality.php` (new)
- `app/Models/FamilyMember.php` (edit)
- `database/factories/NationalityFactory.php` (new)
- `app/Filament/Resources/Nationalities/**` (new)
- `app/Filament/Resources/FamilyMembers/Schemas/FamilyMemberForm.php` (edit)
- `app/Filament/Resources/FamilyMembers/Tables/FamilyMembersTable.php` (edit)
- `app/Filament/Exports/FamilyMemberExporter.php` (edit)
- `resources/views/pdf/reports/**` (edit — add nationality to identity block)

**Verification**
- Create nationalities via admin; assign to a member.
- Filter members by nationality; confirm correct subset.
- PDF shows nationality.

---

### Task 4 — Final Consolidated Report

**Goal:** Append the updates from Tasks 2 & 3 into `reports/task-1-reports.md` so it becomes the single summary document.

**Steps**

1. Append to `reports/task-1-reports.md`:
   - `## Task 2 — Diseases & HealthStatus` section: migrations created, models, resource paths, filter wiring, data migration note, any follow-ups.
   - `## Task 3 — Nationalities` section: same structure.
   - `## Combined verification` section: end-to-end flow verified (create disease + nationality → assign to member → filter → regenerate Family PDF → confirm both visible).

2. Run `vendor/bin/pint --dirty --format agent` once at the end.

3. Summarize open items / manual steps (Chromium install, prod seeding decisions, Arabic font choice).

---

## Global verification

After all tasks:
- `php artisan migrate` clean on fresh DB.
- Visit Filament panel → Families → a Family → Print Family Report → all sections toggled → PDF downloads in Arabic, RTL, showing members (with diseases + nationality), cases, visits, schedules, documents, donations.
- FamilyMember resource filters: by health_status, diseases (multi), is_chronic (ternary), nationality — all return correct counts (cross-check via `database-query` MCP tool).
- `vendor/bin/pint --dirty --format agent` clean.

## Notes / constraints respected

- No tests created (per user global rule).
- No inline comments, no logging.
- `Model::unguard()` pattern; no `$fillable` arrays.
- All user-facing strings through `__()`.
- Explicit return types on every new method.
- No new base folders beyond `app/Services/Reports/` (sub-folder of existing `app/Services/`) and standard Filament resource folders.
