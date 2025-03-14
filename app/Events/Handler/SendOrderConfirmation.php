<?php

namespace App\Events\Handler;

use App\Events\OrderPlaced;
use Illuminate\Support\Facades\Log;

class SendOrderConfirmation
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderPlaced $event): void

    {
        $order = $event->order;
        Log::log('info','Order confirmation sent: ' . $order);
    }
}