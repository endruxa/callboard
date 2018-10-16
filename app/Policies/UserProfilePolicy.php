<?php

namespace App\Policies;

use App\User;
use App\UserProfile;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserProfilePolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param UserProfile $userProfile
     * @return mixed
     */
    public function update(User $user, UserProfile $userProfile)
    {
        return $userProfile->user_id == $user->id;
    }

}
