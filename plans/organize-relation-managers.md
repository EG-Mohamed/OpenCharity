# Organize Resources & Relation Managers — Reuse via `$relatedResource`

## Context

Every relation manager under `app/Filament/Resources/*/RelationManagers/` currently re-declares the full `form()` and `table()` of its related model — the exact same fields and columns that already live in the sibling Resource's `Schemas/*Form.php` and `Tables/*Table.php` classes. This duplicates code, drifts out of sync, and keeps dead imports around.

Filament v5 supports wiring a relation manager to its owning resource via `protected static ?string $relatedResource = XxxResource::class;`. When set, the relation manager inherits the resource's form/table automatically and table rows link to the related resource's pages instead of opening a modal. This is the exact pattern the user wants.

The goal is to:

1. Point each relation manager at its related `Resource::class` via `$relatedResource`.
2. Remove the duplicated `form()` / `table()` methods from every relation manager.
3. Remove now-unused imports (enums, form components, column classes, actions).
4. Keep only the relation-manager-specific metadata (`$relationship`, `$relatedResource`, and any `modifyQueryUsing`/soft-delete scope overrides if still needed — but only when the related Resource itself doesn't already handle them).

No Resource form/table content needs to change — they are the source of truth after this refactor.

## Relation manager → Related Resource map

| Relation manager | Related resource |
|---|---|
| `Families/RelationManagers/FamilyMembersRelationManager` | `FamilyMembers\FamilyMemberResource` |
| `Families/RelationManagers/CharityCasesRelationManager` | `CharityCases\CharityCaseResource` |
| `Families/RelationManagers/DocumentsRelationManager` | `Documents\DocumentResource` |
| `Families/RelationManagers/DonationTargetsRelationManager` | `DonationTargets\DonationTargetResource` |
| `CharityCases/RelationManagers/VisitsRelationManager` | `Visits\VisitResource` |
| `CharityCases/RelationManagers/DocumentsRelationManager` | `Documents\DocumentResource` |
| `CharityCases/RelationManagers/AssistanceSchedulesRelationManager` | `AssistanceSchedules\AssistanceScheduleResource` |
| `CharityCases/RelationManagers/DonationTargetsRelationManager` | `DonationTargets\DonationTargetResource` |
| `AssistanceSchedules/RelationManagers/AssistanceDeliveriesRelationManager` | `AssistanceDeliveries\AssistanceDeliveryResource` |
| `AssistanceSchedules/RelationManagers/DonationAllocationsRelationManager` | `DonationAllocations\DonationAllocationResource` |
| `DonationTargets/RelationManagers/DonationsRelationManager` | `Donations\DonationResource` |
| `DonationTargets/RelationManagers/DonationAllocationsRelationManager` | `DonationAllocations\DonationAllocationResource` |
| `Donations/RelationManagers/DonationAllocationsRelationManager` | `DonationAllocations\DonationAllocationResource` |

(Exact list will be confirmed by `ls` before editing — any manager whose related resource does not yet exist will be skipped and reported.)

## Target shape for every relation manager

After the refactor, every relation manager file collapses to roughly this:

```php
<?php

namespace App\Filament\Resources\Families\RelationManagers;

use App\Filament\Resources\FamilyMembers\FamilyMemberResource;
use Filament\Resources\RelationManagers\RelationManager;

class FamilyMembersRelationManager extends RelationManager
{
    protected static string $relationship = 'familyMembers';

    protected static ?string $relatedResource = FamilyMemberResource::class;
}
```

Notes:
- No `form()` method — inherited from the related resource's `form()`.
- No `table()` method — inherited from the related resource's `table()`.
- No imports for `Schema`, `Table`, form components, column classes, actions, enums, `Builder`, or `SoftDeletingScope`. All of these move out with the deleted methods.
- `$relationship` is still required (Filament needs it to know which Eloquent relation on the parent record to query).
- Soft-delete scope handling already lives inside each Resource (`getRecordRouteBindingEloquentQuery()` / `modifyQueryUsing` inside the resource table). We don't need to re-apply `withoutGlobalScopes([SoftDeletingScope::class])` inside the relation manager.

## Parent resource wiring

The separate plan `improvements-and-missing-parts.md` already tracks registering relation managers inside each parent Resource's `getRelations()` (Issue 2). This plan does **not** duplicate that work — it only refactors the relation manager files themselves. After both plans are executed, the edit pages will show the relation manager tabs and each tab will render the related resource's canonical form/table.

## Files to modify

Only relation manager files change. Exact list (to be confirmed against the filesystem before editing):

- `app/Filament/Resources/Families/RelationManagers/FamilyMembersRelationManager.php`
- `app/Filament/Resources/Families/RelationManagers/CharityCasesRelationManager.php`
- `app/Filament/Resources/Families/RelationManagers/DocumentsRelationManager.php`
- `app/Filament/Resources/Families/RelationManagers/DonationTargetsRelationManager.php`
- `app/Filament/Resources/CharityCases/RelationManagers/VisitsRelationManager.php`
- `app/Filament/Resources/CharityCases/RelationManagers/DocumentsRelationManager.php`
- `app/Filament/Resources/CharityCases/RelationManagers/AssistanceSchedulesRelationManager.php`
- `app/Filament/Resources/CharityCases/RelationManagers/DonationTargetsRelationManager.php`
- `app/Filament/Resources/AssistanceSchedules/RelationManagers/*`
- `app/Filament/Resources/DonationTargets/RelationManagers/*`
- `app/Filament/Resources/Donations/RelationManagers/*`

No Resource, Form schema, or Table schema files are touched.

## Execution order

1. `ls` each `RelationManagers/` directory to build the authoritative list of files.
2. For each relation manager: confirm the matching `Resource::class` exists, then rewrite the file to the minimal shape above (keep `$relationship`, add `$relatedResource`, drop `form()`/`table()` and all now-unused imports).
3. Run `vendor/bin/pint --dirty --format agent` to normalize formatting.

## Verification

- `php artisan route:list --path=admin` still boots without errors (no class-resolution failures in the refactored relation managers).
- Visit `/admin/families/{id}/edit` — the Family Members / Charity Cases / Documents / Donation Targets tabs render, and each tab's table/columns match what the corresponding standalone resource list shows.
- Click a row inside a relation manager tab — it should navigate to the related resource's edit page (this is the `$relatedResource` behavior, and confirms the wiring is correct).
- Create and edit a record from inside a relation manager tab — the form fields match the related resource's form (proves the form is inherited).
- `vendor/bin/pint --dirty --format agent` passes with no further changes.
