<?php

namespace Davis_Blog\Http\Controllers;

use Illuminate\Http\Request;
use Davis_Blog\Tag;
class TagsController extends Controller
{
    public function index(Tag $tag)
    {
      $posts = $tag->posts;

      return view('posts.index', compact('posts'));
    }

