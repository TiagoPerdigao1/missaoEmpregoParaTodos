<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NovoCandidato extends Mailable
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
        return $this->view('emails.Novocandidato')
                    ->with([
                        'nameCandidato' => $this->data['nameCandidato'],
                        'phoneCandidato' => $this->data['phoneCandidato'],
                        'emailCandidato' => $this->data['emailCandidato'],
                        'adressCandidato' => $this->data['adressCandidato'],
                        'zipcode' => $this->data['zipcode'],
                        'localidadeCandidato' => $this->data['localidadeCandidato'],
                        'birthDate' => $this->data['birthDate'],
                        'dificuldades' => $this->data['dificuldades'],
                        'habilitacoes' => $this->data['habilitacoes'],
                        'experienciaCandidato' => $this->data['experienciaCandidato'],
                        'entidadeCanditado' => $this->data['entidadeCanditado'],
                        'conhecimentoPlataformaCandidato' => $this->data['conhecimentoPlataformaCandidato'],
                    ]);;
    }
}
