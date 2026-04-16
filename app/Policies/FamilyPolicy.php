<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Family;
use Illuminate\Auth\Access\HandlesAuthorization;

class FamilyPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Family');
    }

    public function view(AuthUser $authUser, Family $family): bool
    {
        return $authUser->can('View:Family');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Family');
    }

    public function update(AuthUser $authUser, Family $family): bool
    {
        return $authUser->can('Update:Family');
    }

    public function delete(AuthUser $authUser, Family $family): bool
    {
        return $authUser->can('Delete:Family');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Family');
    }

}