<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class SupportController extends Controller
{
    public function index($event_id){
        return view('admin.addsuport')->with(compact('event_id'));
    }

    public function add(Request $request){
        $user = User::where('email', $request->email)->first();
        $event = Event::find($request->event_id);
        $user->supported_events()->attach($event->id);
        $role = Role::where('name', 'Support')->first();
        $user->assignRole($role);
        $user->save();
        $event->save();
        return redirect()->back();
    }
}
