<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $profile
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 * @property mixed $user_profiles
 */
class Activity extends Model
{
    protected $fillable = ['user_profile_id', 'main_activity'];

    public function user_profiles()
    {
        return $this->belongsToMany(UserProfile::class, 'activity_user_profiles');
    }
}
