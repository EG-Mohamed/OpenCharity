<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\AssistanceDelivery;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssistanceDeliveryPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:AssistanceDelivery');
    }

    public function view(AuthUser $authUser, AssistanceDelivery $assistanceDelivery): bool
    {
        return $authUser->can('View:AssistanceDelivery');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:AssistanceDelivery');
    }

    public function update(AuthUser $authUser, AssistanceDelivery $assistanceDelivery): bool
    {
        return $authUser->can('Update:AssistanceDelivery');
    }

    public function delete(AuthUser $authUser, AssistanceDelivery $assistanceDelivery): bool
    {
        return $authUser->can('Delete:AssistanceDelivery');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:AssistanceDelivery');
    }

}