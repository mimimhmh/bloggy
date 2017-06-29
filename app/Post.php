<?php

namespace App;

use App\Models\Comment;
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

    public function comments() {

        return $this->hasMany(Comment::class);
    }
}
