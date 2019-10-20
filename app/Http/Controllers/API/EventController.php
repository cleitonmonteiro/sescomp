<?php

namespace App\Http\Controllers\API;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Event::all()) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event($request->all());
        $event->save();
        return response()->json(['message' => 'Successfully created event']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//
        $event = Event::find($id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], Response::HTTP_NOT_FOUND);
        }
        $event->name = $request->name;
        $event->description = $request->description;
        $event->save();
        return response()->json(['message' => 'Successfully updated event']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        if (!$event){
            return response()->json(['message' => 'Event not found'], Response::HTTP_NOT_FOUND);
        }
        $event->delete();
        return response()->json(['message' => 'Successfully deleted event']);
    }
}
