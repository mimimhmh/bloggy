<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @mixin \Eloquent
 */
class Post extends Model
{

    public function user() {

        return $this->belongsTo(User::class);
    }
}
