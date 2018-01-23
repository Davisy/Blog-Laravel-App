        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>This is the simple Blog site developed in <em>Laravel framework</em> .You can register as new user,login as existing users and then write a simple post and then add comment to the specific post</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              @foreach ($archives as $stats)
              <li>
                <a href="/?month={{ $stats['month'] }}&year={{ $stats['year']}}">
                {{  $stats['month'] .' '. $stats['year'] }} </a>
              </li>
              @endforeach
            </ol>
          </div>

           <div class="sidebar-module">
            <h4>Tags</h4>
            <ol class="list-unstyled">
              @foreach ($tags as $tag)
              <li>
                <a href="/posts/tags/{{ $tag }}">
                {{  $tag }} </a> 
              </li>
              @endforeach
            </ol>
          </div>

          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="https://github.com/Davisy">GitHub</a></li>
              <li><a href="https://twitter.com/Davis_McDavid">Twitter</a></li>
              <li><a href="https://web.facebook.com/davis.genius">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->