<?php

namespace CodeCommerce\Listeners;

use CodeCommerce\Events\CheckoutEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailCheckout
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
     * @param  CheckoutEvent  $event
     * @return void
     */
    public function handle(CheckoutEvent $event)
    {
       // echo "Evento disparado!";
       $user = $event->getUser();
     //  dd($user);
       $order = $event->getOrder();
       //dd($order);
       
       Mail::send('email.checkout', ['user' => $user, 'order' => $order], function ($m) use ($user, $order) {
            $m->from('cissa.pmro@gmail.com', 'Cissa')->to($user->email, $user->name)->subject('Testando email de checkout from Cissa');
           
        });
    }
}
