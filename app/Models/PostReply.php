<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostReply extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $with = ['author'];


    function post(){
        return $this->belongsTo(Post::class, 'post_id');
    }

    function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}