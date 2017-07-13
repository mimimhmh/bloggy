<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

    protected $fillable = ['user_id', 'comment_id', 'body'];

    public function user() {

        return $this->belongsTo(User::class);
    }

    public function comment() {

        return $this->belongsTo(Comment::class);
    }

}
