<?php

namespace Contactamax\Listeners;

use Contactamax\Events\SaveOrdem;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class NotifyIfLower
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  SaveOrdem  $event
     * @return void
     */
    public function handle(SaveOrdem $event)
    {

    }

    public function notify($event)
    {
        Log::alert("O produto de SKU {$event->order} menor que 100");
    }
}
