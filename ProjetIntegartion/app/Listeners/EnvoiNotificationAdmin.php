<?php

namespace App\Listeners;
use App\Notifications\FormsRegisteredNotification;
use App\Events\FormulaireAudit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use App\Models\Usager;
use Session;

class EnvoiNotificationAdmin implements ShouldQueue
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
    public function handle(FormulaireAudit $event)
    {
        $data=$event->data;
        $condition1=Session::get('nom');
        $Usager=Usager::where('nom', $condition1)->first();
       // $emailsuperviseur=$Usager->emailsuperviseur;
        $emailadmin=$Usager->emailadmin;
        $notification= new FormsRegisteredNotification($data);
        \Notification::route('mail', $emailadmin)->notify($notification);
        //
    }
}