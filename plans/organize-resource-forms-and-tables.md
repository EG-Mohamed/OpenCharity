# Organize Resource Forms & Tables

## Verification: Relation Managers ✅

All 13 relation managers have been correctly refactored:
- `protected static ?string $relatedResource = XxxResource::class;` present on every manager
- No `form()` or `table()` methods remain
- All unused imports are removed

---

## Context

All 12 resource Form schema files and Table schema files currently have:
- **Forms**: flat list of fields, no `Section`/`Grid` grouping, missing `->label(__('...'))`, phone fields using raw `TextInput::make()->tel()` instead of `PhoneInput`, money amounts using `TextInput::make()->numeric()` instead of `->money()`, no `FileUpload` for file paths
- **Tables**: missing `->label(__('...'))` on columns, no `SelectFilter` for enum columns, money columns not using `->money('EGP')`, no `->sortable()` on status badges, `assistanceSchedule.id` and `donation.id` references are meaningless — need a readable label

The installed package is `ysfkaya/filament-phone-input` (`^4.1`). Its component is:
```php
use Ysfkaya\FilamentPhoneInput\Forms\Components\PhoneInput;
PhoneInput::make('field_name')
```

---

## Changes per file

### 1. `Families/Schemas/FamilyForm.php`

**Sections:**
- **Basic Information** (2 cols): `code`, `name`, `national_id`, `members_count`
- **Contact Information** (2 cols): `primary_contact_name`, `PhoneInput primary_contact_phone`, `PhoneInput secondary_contact_phone`
- **Location** (2 cols): `governorate`, `city`, `district`, `housing_status`, `Textarea address` (full width)
- **Financial** (2 cols): `monthly_income` (`->numeric()->prefix('EGP')`), `status`
- **Notes** (full width): `Textarea notes`

All fields get `->label(__('...'))`; phone fields switch to `PhoneInput`; `monthly_income` stays numeric (it's a form input, not display).

---

### 2. `Families/Tables/FamiliesTable.php`

- Add `->label(__('...'))` to every column
- `monthly_income` → `->money('EGP')`
- `status`, `housing_status` → `->sortable()`
- Add `SelectFilter` for `status` (FamilyStatus) and `housing_status` (HousingStatus)
- Hide rarely-needed columns with `->toggleable(isToggledHiddenByDefault: true)`: `secondary_contact_phone`, `national_id`, `district`

---

### 3. `FamilyMembers/Schemas/FamilyMemberForm.php`

**Sections:**
- **Identity** (2 cols): `family_id` (Select searchable), `name`, `national_id`, `gender`, `relation_to_head`, `birth_date`, `marital_status`
- **Status** (2 cols): `education_status`, `employment_status`, `health_status`, `monthly_income` (numeric + prefix EGP)
- **Contact** (2 cols): `PhoneInput phone`
- **Notes** (full width): `Textarea notes`

All fields get `->label(__('...'))`.

---

### 4. `FamilyMembers/Tables/FamilyMembersTable.php`

- `->label(__('...'))` on all columns
- `monthly_income` → `->money('EGP')`
- `relation_to_head`, `gender`, `marital_status`, `education_status`, `employment_status`, `health_status` → `->sortable()`
- Add `SelectFilter` for `gender`, `relation_to_head`, `employment_status`, `health_status`
- `birth_date` → `->date()` (already has it, keep)
- Hide `national_id`, `phone` with `toggleable(isToggledHiddenByDefault: true)`

---

### 5. `CharityCases/Schemas/CharityCaseForm.php`

**Sections:**
- **Case Information** (2 cols): `family_id` (searchable), `case_type_id` (searchable), `code`, `title`
- **Classification** (2 cols): `priority`, `status`, `visit_status`
- **Description** (full width): `Textarea description`
- **Amounts** (2 cols): `requested_amount` (numeric, prefix EGP), `approved_amount` (numeric, prefix EGP)
- **Timeline** (2 cols): `registered_at`, `reviewed_at`, `approved_at`, `closed_at`, `last_visit_at`, `next_visit_at`
- **Notes** (full width): `Textarea notes`

All fields get `->label(__('...'))`.

---

### 6. `CharityCases/Tables/CharityCasesTable.php`

- `->label(__('...'))` on all columns
- `requested_amount`, `approved_amount` → `->money('EGP')`
- `priority`, `status`, `visit_status` → `->sortable()`
- Add `SelectFilter` for `priority` (CasePriority), `status` (CaseStatus), `visit_status` (VisitStatusCase)
- Hide `reviewed_at`, `approved_at`, `closed_at`, `last_visit_at` with `toggleable(isToggledHiddenByDefault: true)` (keep `registered_at`, `next_visit_at` visible)

---

### 7. `Visits/Schemas/VisitForm.php`

**Sections:**
- **Visit Details** (2 cols): `charity_case_id` (searchable), `visit_type`, `status`, `scheduled_at`, `visited_at`, `next_visit_at`
- **Findings** (full width): `Textarea summary`, `Textarea findings`, `Textarea recommendations`
- **Notes** (full width): `Textarea notes`

All fields get `->label(__('...'))`.

---

### 8. `Visits/Tables/VisitsTable.php`

- `->label(__('...'))` on all columns
- `visit_type`, `status` → `->sortable()`
- Add `SelectFilter` for `visit_type` (VisitType), `status` (VisitStatus)

---

### 9. `Documents/Schemas/DocumentForm.php`

- Replace `TextInput::make('file_path')->required()` with `FileUpload::make('file_path')->required()->visibility('public')` (use `Filament\Forms\Components\FileUpload`)
- Remove `file_name`, `mime_type`, `file_size` as standalone editable fields — these should be set automatically on upload; keep them as read-only display or remove from create/edit form
- `PhoneInput` is not applicable here

**Sections:**
- **Ownership** (2 cols): `family_id` (searchable, nullable), `charity_case_id` (searchable, nullable)
- **Document Info** (2 cols): `type`, `category`, `title`, `visibility`
- **File** (full width): `FileUpload file_path` (public visibility)
- **Dates & Flags** (2 cols): `issued_at`, `expires_at`, `Toggle is_required`, `Toggle is_verified`
- **Notes** (full width): `Textarea notes`

All fields get `->label(__('...'))`.

---

### 10. `Documents/Tables/DocumentsTable.php`

- `->label(__('...'))` on all columns
- Remove `file_path`, `file_name`, `mime_type` columns (internal file info — not useful in a table)
- `type`, `category`, `visibility` → `->sortable()`
- Add `SelectFilter` for `type` (DocumentType), `category` (DocumentCategory), `visibility` (DocumentVisibility)
- `file_size` → `->formatStateUsing(fn ($state) => number_format($state / 1024, 1).' KB')->label(__('File Size'))`

---

### 11. `AssistanceTypes/Schemas/AssistanceTypeForm.php`

**Sections:**
- **Basic** (2 cols): `name`, `code`, `unit_type`
- **Description** (full width): `Textarea description`
- **Settings** (2 cols): `Toggle is_recurring_allowed`, `Toggle is_active`

All fields get `->label(__('...'))`.

---

### 12. `AssistanceTypes/Tables/AssistanceTypesTable.php`

- `->label(__('...'))` on all columns
- `unit_type` → `->sortable()`
- Add `SelectFilter` for `unit_type` (AssistanceUnitType)
- `Toggle is_active` → filter with `TernaryFilter`

---

### 13. `CaseTypes/Schemas/CaseTypeForm.php`

**Sections:**
- **Basic** (2 cols): `name`, `code`
- **Description** (full width): `Textarea description`
- **Settings** (1 col): `Toggle is_active`

All fields get `->label(__('...'))`.

---

### 14. `CaseTypes/Tables/CaseTypesTable.php`

- `->label(__('...'))` on all columns

---

### 15. `AssistanceSchedules/Schemas/AssistanceScheduleForm.php`

**Sections:**
- **Schedule** (2 cols): `charity_case_id` (searchable), `assistance_type_id` (searchable), `scheduled_date`, `scheduled_time`
- **Amount** (2 cols): `amount` (numeric, prefix EGP), `quantity` (numeric), `frequency`
- **Status** (2 cols): `status`, `funding_status`
- **Notes** (full width): `Textarea notes`

All fields get `->label(__('...'))`.

---

### 16. `AssistanceSchedules/Tables/AssistanceSchedulesTable.php`

- `->label(__('...'))` on all columns
- `amount` → `->money('EGP')`
- `frequency`, `status`, `funding_status` → `->sortable()`
- Add `SelectFilter` for `frequency` (ScheduleFrequency), `status` (ScheduleStatus), `funding_status` (FundingStatus)

---

### 17. `AssistanceDeliveries/Schemas/AssistanceDeliveryForm.php`

**Sections:**
- **Delivery Info** (2 cols): `assistance_schedule_id` (searchable, use `charityCase.title` or concatenated label), `delivered_at`, `delivery_status`
- **Receiver** (2 cols): `received_by_name`, `PhoneInput received_by_phone`
- **Proof** (full width): `FileUpload proof_file_path` (public visibility)
- **Notes** (full width): `Textarea notes`

All fields get `->label(__('...'))`.

---

### 18. `AssistanceDeliveries/Tables/AssistanceDeliveriesTable.php`

- `->label(__('...'))` on all columns
- Replace `assistanceSchedule.id` with a more readable reference (e.g. `assistanceSchedule.charityCase.title` or keep as-is with a label override)
- `delivery_status` → `->sortable()`
- Add `SelectFilter` for `delivery_status` (DeliveryStatus)
- Remove `proof_file_path` column (internal path)

---

### 19. `DonationTargets/Schemas/DonationTargetForm.php`

**Sections:**
- **Target Info** (2 cols): `type`, `title`, `slug` (auto-generated from title ideally — set `->disabled()->dehydrated()` with a state binding if slug is auto, or just `TextInput` for now), `status`
- **Ownership** (2 cols): `family_id` (searchable, nullable), `charity_case_id` (searchable, nullable)
- **Amounts** (2 cols): `goal_amount` (numeric, prefix EGP), `collected_amount` (numeric, prefix EGP, disabled)
- **Period** (2 cols): `starts_at`, `ends_at`
- **Description** (full width): `Textarea description`

All fields get `->label(__('...'))`.

---

### 20. `DonationTargets/Tables/DonationTargetsTable.php`

- `->label(__('...'))` on all columns
- `goal_amount`, `collected_amount` → `->money('EGP')`
- `type`, `status` → `->sortable()`
- Add `SelectFilter` for `type` (DonationTargetType), `status` (DonationTargetStatus)
- Hide `slug` with `toggleable(isToggledHiddenByDefault: true)`

---

### 21. `Donations/Schemas/DonationForm.php`

**Sections:**
- **Donor** (2 cols): `donor_name`, `donor_email` (email), `PhoneInput donor_phone`, `Toggle anonymous`
- **Donation** (2 cols): `donation_target_id` (searchable), `amount` (numeric, prefix EGP), `currency`
- **Payment** (2 cols): `status`, `payment_gateway`, `payment_method`, `transaction_id`, `paid_at`
- **Notes** (full width): `Textarea notes`

All fields get `->label(__('...'))`.

---

### 22. `Donations/Tables/DonationsTable.php`

- `->label(__('...'))` on all columns
- `amount` → `->money('EGP')`
- `status`, `currency`, `payment_gateway`, `payment_method` → `->sortable()`
- Add `SelectFilter` for `status` (DonationStatus), `currency` (Currency), `payment_gateway` (PaymentGateway)
- Hide `transaction_id`, `payment_method` with `toggleable(isToggledHiddenByDefault: true)`

---

### 23. `DonationAllocations/Schemas/DonationAllocationForm.php`

**Sections:**
- **Allocation** (2 cols): `donation_id` (searchable), `donation_target_id` (searchable, nullable), `family_id` (searchable, nullable), `charity_case_id` (searchable, nullable), `assistance_schedule_id` (searchable, nullable)
- **Amount & Status** (2 cols): `amount` (numeric, prefix EGP), `allocation_status`, `allocated_at`
- **Notes** (full width): `Textarea notes`

All fields get `->label(__('...'))`.

---

### 24. `DonationAllocations/Tables/DonationAllocationsTable.php`

- `->label(__('...'))` on all columns
- `amount` → `->money('EGP')`
- `allocation_status` → `->sortable()`
- Replace `donation.id` column with `donation.amount` (more meaningful)
- Replace `assistanceSchedule.id` column with readable label
- Add `SelectFilter` for `allocation_status` (AllocationStatus)

---

## Rules applied across all files

| Concern | Rule |
|---|---|
| Labels | Every field/column gets `->label(__('...'))`  |
| Phone fields | `PhoneInput::make()` from `Ysfkaya\FilamentPhoneInput\Forms\Components\PhoneInput` |
| Money display (table) | `->money('EGP')` on all amount/income columns |
| Money input (form) | `TextInput::make()->numeric()->prefix('EGP')` |
| Enum badge columns | Add `->sortable()` |
| Enum filters | `SelectFilter::make()->options(EnumClass::class)->label(__('...'))->searchable()` |
| File paths (form) | `FileUpload::make()->visibility('public')` instead of `TextInput` |
| Selects for FK | `->searchable()->preload()` |
| Form layout | `Section::make(__('...'))->columns(2)->schema([...])` |
| Flat forms (simple resources) | 2-column grid via `->columns(2)` on the schema itself (CaseType, AssistanceType) |

---

## Execution order

Edit each Form file, then its matching Table file, resource by resource:

1. `Families` (Form → Table)
2. `FamilyMembers` (Form → Table)
3. `CharityCases` (Form → Table)
4. `Visits` (Form → Table)
5. `Documents` (Form → Table)
6. `AssistanceTypes` (Form → Table)
7. `CaseTypes` (Form → Table)
8. `AssistanceSchedules` (Form → Table)
9. `AssistanceDeliveries` (Form → Table)
10. `DonationTargets` (Form → Table)
11. `Donations` (Form → Table)
12. `DonationAllocations` (Form → Table)

Run `vendor/bin/pint --dirty --format agent` after all edits.

---

## Verification

- `php artisan route:list --path=admin` loads without error
- Visit each resource's create/edit page — sections appear with correct grouping and labels
- Phone fields show the international phone picker UI (from `ysfkaya/filament-phone-input`)
- Money columns show `EGP X,XXX.XX` format in tables
- Enum filter dropdowns work on Family, CharityCase, Donation list pages
- `vendor/bin/pint --dirty --format agent` passes clean
