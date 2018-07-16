<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    protected $data;

    /**
     * MailClass constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->data['name'];
        $email = $this->data['email'];
        $phone = $this->data['phone'];
        $comments = $this->data['comments'];
        return $this->view('emails.email')
            ->with(
                [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'comments' => $comments,
                ]
            )
            ->subject('New Later');
    }
}
