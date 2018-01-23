<?php

namespace Davis_Blog\Http\Controllers;

use Illuminate\Http\Request;

use Davis_Blog\Mail\WelcomeAgain;

use Davis_Blog\User;

class RegistrationController extends Controller
{
    public function create()
    {
      return view ('registrations.create');
    }

    public function store(Request $request)
    {
      //validate the form
      
      $this->validate(request(),[

        'name' => 'required|min:3|max:15',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:4|confirmed'
        ]);

      //crete and save the user 
      $name =  $request['name'];
      $email = $request['email'];
      $password = bcrypt($request['password']);

      $user = new User();
      $user->name = $name;
      $user->email = $email;
      $user->password = $password;

      $user->save();

      //sign them in
      
      auth()->login($user);

      //send an welcome email to the registered user
      
     // \Mail::to($user)->send(new WelcomeAgain($user)); //send with the user name ($user)
     

     //flash message to the new registere user 
     session()->flash('message', 'Thanks so much for signing up');
     
      //redirect the users
      return redirect()->home();
    }
}

