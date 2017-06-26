<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FileUpload extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'path'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
