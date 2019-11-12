<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    private function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = $this->validator($data);

        if ($validator->fails()) {
            return redirect()
                        ->route('events.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $event = new Event($data);
        $event->save();
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $init = $event->begin_date;
        $init = Carbon::parse($init);
        $init->second = 0;
        $init->minute = 0;
        
        $activities = [];
        
        $init->hour = 8;
        $activities[] = $event->activitiesHours($init);
        $init->hour = 10;
        $activities[] = $event->activitiesHours($init);
        $init->hour = 13;
        $init->minute = 30;
        $activities[] = $event->activitiesHours($init);
        $init->hour = 19;
        $activities[] = $event->activitiesHours($init);
        return view('events.show')->with(compact('event', 'activities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
