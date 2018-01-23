<?php

namespace Davis_Blog\Http\Controllers;

use Davis_Blog\Post;

use Davis_Blog\Comment;

use Davis_Blog\User;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
      //add comment to a post
      //
       $this->validate(request(), ['body' => 'required|min:5']);
       
      $post->addComment(request('body'));
      

      return back();
    }
}
