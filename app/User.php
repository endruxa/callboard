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
 * @property mixed $avatar
 * @property mixed $save
 * @property mixed $pivot
 */
class User extends Authenticatable
{
    use Notifiable;

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
        return $this->hasMany(UserProfile::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users');
    }

    //get users name from db in route
    public function getRouteKeyName()
    {
        return 'name';
    }

}
