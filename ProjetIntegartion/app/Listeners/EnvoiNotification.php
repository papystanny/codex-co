<?php

namespace App\Listeners;

use App\Notifications\FormsRegisteredNotification;
use App\Events\FormulaireSoumis;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use App\Models\Usager;
use Session;

class EnvoiNotification implements ShouldQueue
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
    public function handle(FormulaireSoumis $event)
    {
        $data=$event->data;

        $condition1=Session::get('nom');
        $Usager=Usager::where('nom', $condition1)->first();
        
        $emailsuperviseur=$Usager->emailsuperviseur;
        $emailadmin=$Usager->emailadmin;
        Log::debug($emailsuperviseur);
        Log::debug($emailadmin);
       // $emailsuperviseur='fmatho@yahoo.com';
        $notification= new FormsRegisteredNotification($data);
        if($emailsuperviseur==null)
        {
            \Notification::route('mail', $emailadmin)->notify($notification);
        }
        else
        {
        \Notification::route('mail', $emailsuperviseur)->notify($notification);
        \Notification::route('mail', $emailadmin)->notify($notification);
        }
       
        //
    }
}