<?php

namespace Davis_Blog;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{     

    protected $table= 'comments';

    protected $fillable = ['user_id','post_id','body'];

    public function post()
    {
      return $this->belongsTo(Post::class);
    }
       public function user()  //$comment->user->name
    {
      return $this->belongsTo(User::class);
    }
}
