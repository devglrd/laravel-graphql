<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $table = "cms_posts";
    protected $guarded = [];
    
    
    public function getAuthor()
    {
        return $this->hasOne(User::class, "id", "fk_user_id");
    }
    
    public function getComments()
    {
        return $this->hasMany(Comment::class, "fk_post_id", "id");
    }
}
