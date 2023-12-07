<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostReply extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    function post(){
        return $this->belongsTo(Post::class);
    }

    function author(){
        return $this->belongsTo(User::class);
    }
}