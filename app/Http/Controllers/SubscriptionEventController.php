<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionEventController extends Controller
{

    public function store($event_id)
    {

        $user = Auth::user();
        $event = Event::find($event_id);

        $user->events()->attach($event_id);

        $user->save();
        $event->save();

        return redirect('info');
    }
}
