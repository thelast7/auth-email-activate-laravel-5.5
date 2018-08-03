<?php

namespace App\Listeners\Auth;

use App\Events\Auth\UserActivationEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\Auth\ActivationEmail;

class SendActivationEmail
{
    //cara buat file ini = php artisan make:listener Auth\\SendActivationEmail --event=Auth\\UserActivationEmail
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
     * @param  UserActivationEmail  $event
     * @return void
     */
    public function handle(UserActivationEmail $event)
    {
        //dd($event);
        if($event->user->active)
        {
            return;
        }

        Mail::to($event->user->email)->send(new ActivationEmail($event->user));
    }
}
