<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "cms_comments";
    protected $guarded = [];
    
    public function getPost()
    {
        return $this->hasOne(Post::class, "id", "fk_post_id");
    }
}
