<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Post
 *
 * @mixin \Eloquent
 */
class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'slug', 'abstract', 'body', 'large_img_url'];

    protected $dates = [
        'deleted_at'
    ];

    public function user() {

        return $this->belongsTo(User::class);
    }
}
