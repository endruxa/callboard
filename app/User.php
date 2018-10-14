<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property mixed $profile
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 * @property mixed $user_role
 * @property mixed $role
 * @property mixed roles
 * @property mixed $user_profile
 * @property int $user_id
 * @property mixed $name
 * @property int $role_id
 */
class User extends Authenticatable
{
    use Notifiable;

    const ROLE_USER = 1;
    const ROLE_COACH = 2;
    const ROLE_COMPANY = 3;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users');
    }

    /*public function hasAccess(array $permissions)
    {
        foreach ($this->roles as $role) {
            if ($role->hasAccess($permissions)){
                return true;
            }
        }
        return false;
    }*/

}
