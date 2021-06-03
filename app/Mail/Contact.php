<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
      $this->data=$data;
    }

    public  $data;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mihin.aime@gmail.com')
                    ->subject('nouvel enregistrement')
                    ->view('Email')->with('data',$this->data);
    }

}
