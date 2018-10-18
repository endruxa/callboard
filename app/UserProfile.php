<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $user
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 * @property mixed $user_role
 * @property mixed user_id
 * @property mixed $comments
 * @property mixed $activities
 */
class UserProfile extends Model
{

    protected $fillable = ['first_name', 'last_name','description','user_id', 'slug'];


    public function setSlugAttribute($value)
    {
        $this->attributes['description'] = $value;
        $this->attributes['slug'] = str_slug(str_limit($value, 6));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'activity_user_profiles');
    }


    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
