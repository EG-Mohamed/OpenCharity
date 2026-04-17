# Task 1 — Official PDF Reports

## Packages Added
- `spatie/laravel-pdf` ^2.6 — Blade + Browsershot (headless Chrome) PDF generation.

## Files Created
- `app/Services/Reports/FamilyReportOptions.php` — readonly DTO for section toggles.
- `app/Services/Reports/FamilyReportService.php` — generates Family PDF with eager-loaded relations per options.
- `app/Services/Reports/FamilyMemberReportService.php` — generates FamilyMember PDF.
- `app/Filament/Actions/PrintFamilyReportAction.php` — Filament Action with modal toggles, redirects to download route in new tab.
- `app/Filament/Actions/PrintFamilyMemberReportAction.php` — Filament Action, opens download URL in new tab directly.
- `app/Http/Controllers/Reports/FamilyReportController.php` — handles download, returns PdfBuilder (Responsable).
- `app/Http/Controllers/Reports/FamilyMemberReportController.php` — same for member.
- `resources/views/pdf/reports/family.blade.php` — full Arabic/RTL family report template.
- `resources/views/pdf/reports/family-member.blade.php` — member identity report template.
- `resources/views/pdf/reports/partials/header.blade.php` — shared styles + org header.
- `resources/views/pdf/reports/partials/footer.blade.php` — shared footer.

## Routes Added (`routes/web.php`)
- `GET /reports/families/{family}` — `reports.families.download` (auth protected)
- `GET /reports/family-members/{familyMember}` — `reports.family-members.download` (auth protected)

## Files Modified
- `app/Filament/Resources/Families/Pages/ViewFamily.php` — added PrintFamilyReportAction to header.
- `app/Filament/Resources/Families/Tables/FamiliesTable.php` — added PrintFamilyReportAction to record actions.
- `app/Filament/Resources/FamilyMembers/Tables/FamilyMembersTable.php` — added PrintFamilyMemberReportAction to record actions.
- `app/Filament/Resources/Families/RelationManagers/FamilyMembersRelationManager.php` — added PrintFamilyMemberReportAction to relation manager record actions.

## Manual Steps Required
- **Chromium/Node.js**: spatie/laravel-pdf uses Browsershot which requires Node.js and Chromium/Chrome on the server. On production: `npm install -g puppeteer` or configure `CHROME_BINARY` path. On Herd local: should work automatically if Chrome is installed.
- **Google Fonts**: The template imports Cairo from Google Fonts. On production without internet, embed the font locally or use a system Arabic font.

## Livewire Download Fix
Since Livewire cannot return `StreamedResponse` directly, the actions redirect the browser to dedicated auth-protected routes that serve the PDF download. Family report collects options from the modal then builds the URL as query params. Member report uses `->url()` to open the route directly in a new tab.

---

## Task 2 — Diseases & HealthStatus Refactor

### Migrations Created
- `2026_04_17_232345_create_diseases_table.php` — `diseases(id, name unique, is_chronic bool, is_active bool, timestamps)`.
- `2026_04_17_232346_create_disease_family_member_table.php` — pivot `(disease_id FK, family_member_id FK, primary composite key)`.
- `2026_04_17_232347_update_family_members_health_status_values.php` — data migration: `chronic_illness`, `disabled`, `critical`, `other` → `unhealthy`.

### HealthStatus Enum
- Simplified to 2 cases: `Healthy = 'healthy'`, `Unhealthy = 'unhealthy'`.
- Colors: success / danger. Icon: `Heroicon::Heart`.

### Files Created
- `app/Models/Disease.php` — casts `is_chronic`, `is_active` bool. Relation `familyMembers()` BelongsToMany.
- `database/factories/DiseaseFactory.php` — random name, 40% chronic, 85% active.
- `app/Filament/Resources/Diseases/**` — full CRUD resource under Settings navigation group.

### Files Modified
- `app/Models/FamilyMember.php` — added `diseases(): BelongsToMany` and `nationality(): BelongsTo`.
- `app/Filament/Resources/FamilyMembers/Schemas/FamilyMemberForm.php` — health_status is now `->live()`, diseases multi-select shown only when Unhealthy.
- `app/Filament/Resources/FamilyMembers/Tables/FamilyMembersTable.php` — diseases column (badge, separator), SelectFilter for diseases, TernaryFilter for chronic disease.

---

## Task 3 — Nationalities

### Migrations Created
- `2026_04_17_232640_create_nationalities_table.php` — `nationalities(id, name unique, is_active bool, timestamps)`.
- `2026_04_17_232641_add_nationality_id_to_family_members_table.php` — nullable FK `nationality_id` on `family_members`.

### Files Created
- `app/Models/Nationality.php` — casts `is_active`. Relation `familyMembers(): HasMany`.
- `database/factories/NationalityFactory.php` — uses `fake()->country()`.
- `app/Filament/Resources/Nationalities/**` — CRUD resource under Settings navigation group.

### Files Modified
- `app/Models/FamilyMember.php` — added `nationality(): BelongsTo`.
- `app/Filament/Resources/FamilyMembers/Schemas/FamilyMemberForm.php` — nationality select in Identity section.
- `app/Filament/Resources/FamilyMembers/Tables/FamilyMembersTable.php` — nationality column (badge, toggleable), SelectFilter for nationality.

---

## Combined Verification

1. Run `php artisan migrate` — all migrations pass cleanly.
2. Go to Settings → Diseases → create a few (some chronic).
3. Go to Settings → Nationalities → create a few.
4. Edit a FamilyMember → set Health Status to Unhealthy → diseases selector appears → save.
5. FamilyMember list → filter by diseases / chronic disease / nationality → correct subset.
6. From Families table or Family view page → click "Print Report" → modal with section toggles → submit → PDF opens in new tab.
7. From FamilyMembers table → click "Print Report" → PDF opens in new tab.
8. Verify PDF: Arabic font (Cairo), RTL layout, all toggled sections present, diseases per member shown.

## Open Items
- Seed common diseases (Diabetes, Hypertension, Asthma, etc.) — awaiting approval.
- Seed common nationalities (Egyptian, Syrian, etc.) — awaiting approval.
- Production Chromium setup for Browsershot.
