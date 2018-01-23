@extends ('layouts.master')

@section ('content')
  <div class="col-md-8">
  <h1>Sign In</h1>

      @include('layouts.errors')
      
   <form method="POST" action="/signin">
      {{ csrf_field() }}
      <div class="form-group">
         <label for="email">Email:</label>
         <input type="email"  class="form-control" id="email" name="email" required value={{Request::old('name')}}>
        
      </div>

      <div class="form-group">
         <label for="password">Password:</label>
         <input type="password"  class="form-control" id="password" name="password" required value={{Request::old('name')}}>
        
      </div>

       <div class="form-group">
         
         <button type="submit"  class="btn btn-primary">Sign in</button>
        
      </div>

      </form>
  </div>

@endsection