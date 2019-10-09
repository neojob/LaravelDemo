<?php

namespace App\Listeners;

use App\Events\onRegisterUserEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class RegisterUserListener
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
     * @param  onRegisterUserEvent  $event
     * @return void
     */
    public function handle(onRegisterUserEvent $event)
    {
        Log::info('User Registered');
    }
}
