<?php

namespace App\Models;

use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['user_id', 'post_id', 'body'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {

        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post() {

        return $this->belongsTo(Post::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies() {

        return $this->hasMany(Reply::class);
    }

    /**
     * @return array
     */
    public function addReply() {

        $reply = $this->replies()->create([
            'user_id' => auth()->id(),
            'body'    => request('body')
        ]);

        $new_arr = $reply->toArray();

        $new_arr["user_name"] = auth()->user()->name;
        $new_arr["avatar"] = auth()->user()->avatar;

        return $new_arr;

    }
}
