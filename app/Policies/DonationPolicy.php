<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Donation;
use Illuminate\Auth\Access\HandlesAuthorization;

class DonationPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Donation');
    }

    public function view(AuthUser $authUser, Donation $donation): bool
    {
        return $authUser->can('View:Donation');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Donation');
    }

    public function update(AuthUser $authUser, Donation $donation): bool
    {
        return $authUser->can('Update:Donation');
    }

    public function delete(AuthUser $authUser, Donation $donation): bool
    {
        return $authUser->can('Delete:Donation');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:Donation');
    }

}