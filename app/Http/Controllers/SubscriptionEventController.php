<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionEventController extends Controller
{

    public function store(Request $request)
    {
        $event_id = (int)($request->_id);
        
        $user = Auth::user();
        $event = Event::find($event_id);

        $user->events()->attach($event_id);

        $user->save();
        $event->save();

        return redirect()->route('home');
    }
}
