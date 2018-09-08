<?php

namespace sis_ccc\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class activar_cuenta extends Mailable
{
    use Queueable, SerializesModels;
    
    /*  
     * Aquien le mandamos el Email
     */
    public $nombre;    
    public $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $token)
    {
        $this->nombre = $nombre;        
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emailCCC.activar_cuenta')                
                ->subject('Activar Cuenta en CCC');
        
        
    }
}
