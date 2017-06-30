<?php

namespace App;

use App\Model\PostVote;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 */
class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts() {

        return $this->hasMany(Post::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function votes() {

        return $this->belongsToMany(Post::class,
            'post_votes')->withTimestamps();
    }

    /**
     * publish a post
     * @param Post $post
     */
    public function publish(Post $post) {

        $this->posts()->save($post);
    }

    /**
     * see if the login user has voted for the post.
     * @param Post $post
     * @return mixed
     */
    public function hasVotedFor(Post $post) {

        return $post->votes->contains('user_id', $this->id);
    }

}
