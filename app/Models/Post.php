<?php

namespace App;

use App\Model\PostVote;
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

    public function votes() {

        return $this->hasMany(PostVote::class, 'post_id');
    }

    /**
     *
     */
    public function addComment() {

        $this->comments()->create([
            'user_id' => auth()->id(),
            'body'    => request('body')
        ]);

    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */
    public static function popular() {

        return Post::with('user')->withCount('votes')
            ->orderBy('votes_count', 'desc')->take(3)->get();
    }

}
