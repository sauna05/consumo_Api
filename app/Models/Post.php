<?php

namespace App\Models;

use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    

    protected $fillable = ['title', 'body','user_id'];

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function coment()
    {
        return $this->hasMany(Comment::class);
    }


    
}
