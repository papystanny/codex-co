<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\FormSubmitted;
use Illuminate\Support\Facades\Mail;

class SendNotificationEmail implements ShouldQueue
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
    public function handle(FormSubmitted $event)
    {
        //
        // Access form data
        $formData = $event->formData;

        // Logic to send email
        Mail::to('supervisor@example.com')->send(new \App\Mail\FormSubmittedMail($formData));
    }
}
