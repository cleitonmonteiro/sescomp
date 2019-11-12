<?php

namespace App\Http\Controllers;


use App\Models\Activity;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubscriptionActivityController extends Controller
{

    public function store($activity_id)
    {

        $activity = Activity::find($activity_id);
        $event_id = $activity->event_id;
        $user_auth = Auth::user();
        $event = Event::find($event_id);

        $user = DB::table('event_user')
            ->where('user_id', $user_auth->id )
            ->where('event_id', $event_id )->first();

        if(!$user){
            $user_auth->events()->attach($event_id);
        }

        $user_auth->activities()->attach($activity_id);

        $user_auth->save();
        $event->save();
        $activity->save();

        return redirect('dashboard');
    }
}
