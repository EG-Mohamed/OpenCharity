<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\FamilyMember;
use Illuminate\Auth\Access\HandlesAuthorization;

class FamilyMemberPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:FamilyMember');
    }

    public function view(AuthUser $authUser, FamilyMember $familyMember): bool
    {
        return $authUser->can('View:FamilyMember');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:FamilyMember');
    }

    public function update(AuthUser $authUser, FamilyMember $familyMember): bool
    {
        return $authUser->can('Update:FamilyMember');
    }

    public function delete(AuthUser $authUser, FamilyMember $familyMember): bool
    {
        return $authUser->can('Delete:FamilyMember');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:FamilyMember');
    }

}