<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\CharityCase;
use Illuminate\Auth\Access\HandlesAuthorization;

class CharityCasePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:CharityCase');
    }

    public function view(AuthUser $authUser, CharityCase $charityCase): bool
    {
        return $authUser->can('View:CharityCase');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:CharityCase');
    }

    public function update(AuthUser $authUser, CharityCase $charityCase): bool
    {
        return $authUser->can('Update:CharityCase');
    }

    public function delete(AuthUser $authUser, CharityCase $charityCase): bool
    {
        return $authUser->can('Delete:CharityCase');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:CharityCase');
    }

}