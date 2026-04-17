<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Disease;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiseasePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Disease');
    }

    public function view(AuthUser $authUser, Disease $disease): bool
    {
        return $authUser->can('View:Disease');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Disease');
    }

    public function update(AuthUser $authUser, Disease $disease): bool
    {
        return $authUser->can('Update:Disease');
    }

    public function delete(AuthUser $authUser, Disease $disease): bool
    {
        return $authUser->can('Delete:Disease');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Disease');
    }

}