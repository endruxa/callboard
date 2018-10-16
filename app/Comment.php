<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $commentable
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 * @property mixed $user
 * @property mixed body
 * @property  user_id
 * @property  user_id
 * @property int $user_id
 */
class Comment extends Model
{

    protected $fillable = ['body', 'commentable_id', 'commentable_type'];


    public function commentable()
    {
        return $this->morphTo();
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
