<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\City;
use Illuminate\Auth\Access\HandlesAuthorization;

class CityPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:City');
    }

    public function view(AuthUser $authUser, City $city): bool
    {
        return $authUser->can('View:City');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:City');
    }

    public function update(AuthUser $authUser, City $city): bool
    {
        return $authUser->can('Update:City');
    }

    public function delete(AuthUser $authUser, City $city): bool
    {
        return $authUser->can('Delete:City');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:City');
    }

}