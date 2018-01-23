<?php

namespace Davis_Blog\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Davis_Blog\user;
class WelcomeAgain extends Mailable
{
    use Queueable, SerializesModels;
      
       public $user; //this will be available to the view
    /**
     * Create a new message instance.
     *
     * @return void
     */
   public function __construct(User $user)
    {
       $this->user = $user;  //set user name
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.welcome-again');
    }
}
