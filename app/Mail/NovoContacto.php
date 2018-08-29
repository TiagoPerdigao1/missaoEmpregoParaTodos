<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NovoContacto extends Mailable
{
    use Queueable, SerializesModels;

 protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
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
        return $this->view('emails.Novocontacto')
                    ->with([
                        'nameContacto' => $this->data['nameContacto'],
                        'emailContacto' => $this->data['emailContacto'],
                        'subjectContacto' => $this->data['subjectContacto'],
                        'messageContacto' => $this->data['messageContacto'],
                    ]);;
    }
}
