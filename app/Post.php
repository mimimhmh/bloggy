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
    protected $fillable = ['title', 'body', 'large_img_url'];

    public function user() {

        return $this->belongsTo(User::class);
    }
}
