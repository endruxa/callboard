<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed permissions
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 * @property mixed pivot
 */
class Role extends Model
{

    const ROLE_USER = 1;
    const ROLE_COACH = 2;
    const ROLE_COMPANY = 3;

    protected $fillable = ['name', 'slug'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users');
    }

    /*public function hasAccess(array $permissions)
    {
        foreach($permissions as $permission){
            if($this->hasPermission($permission)){
                return true;
            }
        }
        return false;
    }*/
    /*protected function hasPermission(string $permission)
    {
        $permissions = json_decode($this->permissions,true);
        return $permissions[$permission] ?? false;
    }*/


}
