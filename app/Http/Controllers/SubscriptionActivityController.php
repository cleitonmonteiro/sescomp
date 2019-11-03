<?php

namespace App\Http\Controllers;


use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubscriptionActivityController extends Controller
{

    public function store($activity_id)
    {

        $activity = Activity::find($activity_id);
        $event_id = $activity->event_id;
        $user = Auth::user();
        $event = Event::find($event_id);

        $user = DB::table('events_users')
            ->where('user_id', $user->id )
            ->where('event_id', $event_id )->first();

        if(!$user){
            $user->events()->attach($event_id);
        }

        $user->activities()->attach($activity_id);

        $user->save();
        $event->save();
        $activity->save();

        return redirect('dashboard');
    }
}
