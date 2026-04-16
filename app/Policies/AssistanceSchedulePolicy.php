<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\AssistanceSchedule;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssistanceSchedulePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:AssistanceSchedule');
    }

    public function view(AuthUser $authUser, AssistanceSchedule $assistanceSchedule): bool
    {
        return $authUser->can('View:AssistanceSchedule');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:AssistanceSchedule');
    }

    public function update(AuthUser $authUser, AssistanceSchedule $assistanceSchedule): bool
    {
        return $authUser->can('Update:AssistanceSchedule');
    }

    public function delete(AuthUser $authUser, AssistanceSchedule $assistanceSchedule): bool
    {
        return $authUser->can('Delete:AssistanceSchedule');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:AssistanceSchedule');
    }

}