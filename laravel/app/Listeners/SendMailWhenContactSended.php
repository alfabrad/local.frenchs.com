<?php

namespace Frenchs\Listeners;

use Frenchs\Events\ContactFormSended;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailWhenContactSended
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ContactFormSended  $event
     * @return void
     */
    public function handle(ContactFormSended $event)
    {
        \Mail::send( 'emails.contact', [ 'contact' => $event->data ], function( $message )
        {
          $message->from( env( 'CONTACT_SENDER', 'forge' ), env( 'CONTACT_APP_NAME', 'forge' ) );
          $message->subject( 'Formulario de contacto' );
          $message->to( env( 'CONTACT_MAIL', 'forge' ), env( 'CONTACT_NAME', 'forge' ) );
        } );
    }
}
