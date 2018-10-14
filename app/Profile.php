<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $user
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 * @property mixed $activity
 */
class Profile extends Model
{

    const Role_USER = 1;
    const Role_COACH = 2;
    const Role_COMPANY = 3;

    protected $fillable = ['first_name', 'last_name','description','user_id', 'role'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activity()
    {
        return $this->belongsToMany(Activity::class, 'activity_profile');
    }

    public function getRouteKeyName()
    {
        return 'role';
    }

    public function user_role()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
