<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'author', 'created_at', 'updated_at'
    ];

    protected $table = 'posts';

    protected $primaryKey = 'postID';

    public $timestamps = false;
}
