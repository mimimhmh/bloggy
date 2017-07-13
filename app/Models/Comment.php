<?php

namespace App\Models;

use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['user_id', 'post_id', 'body'];

    public function user() {

        return $this->belongsTo(User::class);
    }

    public function post() {

        return $this->belongsTo(Post::class);
    }

    public function replies() {

        return $this->hasMany(Reply::class);
    }

    public function addReply() {

        $this->replies()->create([
            'user_id' => auth()->id(),
            'body'    => request('body')
        ]);
    }
}
