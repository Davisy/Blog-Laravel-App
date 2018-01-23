<?php

namespace Davis_Blog\Http\Controllers;

use Illuminate\Http\Request;

use Davis_Blog\Post;

use Davis_Blog\Tag;

use Carbon\Carbon; // deal with date issues

class PostController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth')->except(['index','show']); // you must be sign in to create a post
  }
  public function index()

  {

    //fetch all posts 
    //you may use Post::orderBy('created_at', 'desc')->get()
    //
    $posts = Post::latest();

    if ($month = request('month'))
    {
      $posts->whereMonth('created_at', Carbon::parse($month)->month);
    }

    if($year =request('year'))
    {
      $posts->whereYear('created_at', $year);
    }

    $posts = $posts->get();




    return view('posts.index', compact('posts'));
  }

  public function create() 

  {

    return view('posts.create');
  }

  public function store()
  
  {
         //create a new post using the request data and validate the data from the form
    $this->validate(request(),
      [

        'title' => 'required',

        'body' => 'required'

      ]);

    Post::create([
          'user_id' => auth()->id(),          
          'title'  => request('title'),
          'body'  => request('body')
      ]);


     //flash message for the new post
     
     session()->flash('message','Your post has now been published');

      //And then redirect to the home page

      return redirect('/');
 }

    public function show($id)
    {
        $post = Post::find($id);

     return view('posts.show', compact('post'));
   }
}
