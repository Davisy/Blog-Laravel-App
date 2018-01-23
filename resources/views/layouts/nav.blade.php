   <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Home</a>
          @if (Auth::check()) 
          
          <a  class="nav-link" href="/posts/create">New Post</a>
          
          @endif
          
  

          @if (! Auth::check()) 
          
          <a  class="nav-link ml-auto" href="/login">LogIn <span><a class="nav-link" href="/register">Register</a></span></a>

          @endif

          @if (Auth::check())
          <li class="nav-item btn-group">
                            <a class="nav-link ml-auto dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/posts/create">New Post</a>
                                <a class="dropdown-item" href="/logout">Log Out</a>
                            </div>
                        </li>
          @endif
        </nav>
      </div>
    </div>
