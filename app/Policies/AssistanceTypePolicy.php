<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\AssistanceType;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssistanceTypePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:AssistanceType');
    }

    public function view(AuthUser $authUser, AssistanceType $assistanceType): bool
    {
        return $authUser->can('View:AssistanceType');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:AssistanceType');
    }

    public function update(AuthUser $authUser, AssistanceType $assistanceType): bool
    {
        return $authUser->can('Update:AssistanceType');
    }

    public function delete(AuthUser $authUser, AssistanceType $assistanceType): bool
    {
        return $authUser->can('Delete:AssistanceType');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:AssistanceType');
    }

}