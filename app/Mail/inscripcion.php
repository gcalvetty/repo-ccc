<?php

namespace sis_ccc\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;


class inscripcion extends Mailable
{
    use Queueable, SerializesModels;
    public $datosGECN;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $a)
    { 
        $this->datosGECN = $a;        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {        
	return $this->from($this->datosGECN['email'])
               	    ->view('emailCCC/inscri_email');	
    }
}
