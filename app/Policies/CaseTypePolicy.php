<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\CaseType;
use Illuminate\Auth\Access\HandlesAuthorization;

class CaseTypePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:CaseType');
    }

    public function view(AuthUser $authUser, CaseType $caseType): bool
    {
        return $authUser->can('View:CaseType');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:CaseType');
    }

    public function update(AuthUser $authUser, CaseType $caseType): bool
    {
        return $authUser->can('Update:CaseType');
    }

    public function delete(AuthUser $authUser, CaseType $caseType): bool
    {
        return $authUser->can('Delete:CaseType');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:CaseType');
    }

}