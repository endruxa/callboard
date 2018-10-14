<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $profile
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 */
class Activity extends Model
{
    protected $fillable = ['main_activity'];

    public function profile()
    {
        return $this->belongsToMany(UserProfile::class);
    }
}
