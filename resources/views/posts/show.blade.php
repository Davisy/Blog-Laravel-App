@extends ('layouts.master')

@section ('content')

<div class="col-sm-8 blog-main">

 <h1>{{ $post->title }}</h1>

 

 <p class="blog-post-meta">
  {{ $post->user->name }} on 
  {{ $post->created_at->toFormattedDateString() }}</p>

  <hr>
  <p>{{ $post->body  }}</p>

  <hr>
  <h5>Comments</h5>
  <div class="comments">
    <ul class="list-group"> 
      @foreach ($post->comments as $comment)
      <li class="list-group-item" style="background-color: #F0FFFF;">

        <strong>
            {{ $comment->user->name }}:
        </strong>
        {{ $comment->body }} <br>
       <small style="color: green;">{{ $comment->created_at->diffforHumans() }}</small>
      </li>
        
      @endforeach
    </ul>
  </div>

  <hr>

  {{-- add a comment --}}

{{--user must log in to add comment--}}
@if (Auth::check())
  <div class="card">
    <div class="card-block">

      <form method="POST" action="/posts/{{ $post->id }}/comments">

        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="body" class="form-control"  rows="5" required>


          </textarea>
        </div>

        <div class="form-group">
          <button type="submit"  class="btn btn-primary btn-sm">Add Comment</button>
        </div>
      </form>

      @include ('layouts.errors')
    </div>
  </div>
@else
<small class="text-danger">You must log in to add comment</small>

@endif

</div>

@endsection