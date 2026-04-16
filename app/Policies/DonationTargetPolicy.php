<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\DonationTarget;
use Illuminate\Auth\Access\HandlesAuthorization;

class DonationTargetPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:DonationTarget');
    }

    public function view(AuthUser $authUser, DonationTarget $donationTarget): bool
    {
        return $authUser->can('View:DonationTarget');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:DonationTarget');
    }

    public function update(AuthUser $authUser, DonationTarget $donationTarget): bool
    {
        return $authUser->can('Update:DonationTarget');
    }

    public function delete(AuthUser $authUser, DonationTarget $donationTarget): bool
    {
        return $authUser->can('Delete:DonationTarget');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:DonationTarget');
    }

}