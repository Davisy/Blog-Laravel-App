
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Davis Blog</title>

  <!-- Bootstrap core CSS -->
  <link href= {{ asset('css/bootstrap.min.css') }} rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href= {{ asset('css/blog.css') }} rel="stylesheet">
</head>
<body>
  @include ('layouts.nav')

  <!--show a flash message to the new registered user-->
  @if ($flash = session('message'))

  <div class="alert alert-success alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
    {{ $flash }}
  </div>
  @endif

  <div class="blog-header">
    <div class="container">
      <h1 class="blog-title">Davis Blog</h1>
      <p class="lead blog-description">Welcome to my Personal Blog.</p>
    </div>
  </div>

  <div class="container">
    <div class="row">

      @yield ('content')

      @include ('layouts.sidebar')
    </div>
  </div>

  @include ('layouts.footer')
</body>

</html>