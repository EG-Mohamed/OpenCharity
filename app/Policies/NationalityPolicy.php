<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Nationality;
use Illuminate\Auth\Access\HandlesAuthorization;

class NationalityPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Nationality');
    }

    public function view(AuthUser $authUser, Nationality $nationality): bool
    {
        return $authUser->can('View:Nationality');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Nationality');
    }

    public function update(AuthUser $authUser, Nationality $nationality): bool
    {
        return $authUser->can('Update:Nationality');
    }

    public function delete(AuthUser $authUser, Nationality $nationality): bool
    {
        return $authUser->can('Delete:Nationality');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Nationality');
    }

}