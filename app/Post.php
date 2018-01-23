<?php

namespace Davis_Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
  

    protected $fillable = ['user_id','title','body',];

     public function user()  //$post->user->name
    {
      return $this->belongsTo(User::class);
    }
    public function comments()
    {
      return $this->hasMany(comment::class);
    }

    public function addComment($body)
    {
      Comment::create([
        'user_id' => auth()->id(),
        'body'=> request('body'),
        'post_id'=> $this->id

        ]);

      //another way to add a comment to the post 
      // $this->comments()->create(compact('body'));
    }

    public static function archives()
    {
      return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
    ->groupby('year', 'month')
    ->orderByRaw('min(created_at) desc')
    ->get()
    ->toArray();
    }

    public function tags()
    {
      // any post may have many tags
      // any tag may be applied to many posts
      
      return $this->belongsToMany(Tag::class);
    }
}
