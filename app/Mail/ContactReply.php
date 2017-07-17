<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactReply extends Mailable
{

    use Queueable, SerializesModels;

    protected $name;

    /**
     * ContactReply constructor.
     * @param $name
     */
    public function __construct($name = 'guest') {

        //
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {

        return $this->markdown('emails.contact-reply')
                    ->with(['name' => $this->name]);
    }
}
