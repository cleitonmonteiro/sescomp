<?php

namespace App\Http\Controllers\API;

use App\Activity;
use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $event_id
     * @return \Illuminate\Http\Response
     */
    public function index($event_id)
    {
        $event = Event::find($event_id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], Response::HTTP_BAD_REQUEST);
        }
        return $event->activities;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $event_id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $event_id)
    {
        $event = Event::find($event_id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], Response::HTTP_BAD_REQUEST);
        }
        $activity = new Activity($request->all());
        $activity->event()->associate($event);
        $event->activities()->save($activity);
        $activity->save();

        return response()->json(['message' => 'Successfully created activity']);
    }

    /**
     * Display the specified resource.
     *
     * @param $event_id
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($event_id, $id)
    {
        $event = Event::find($event_id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], Response::HTTP_BAD_REQUEST);
        }
        $activity = $event->activities()->where('id', $id)->first();
        if (!$activity) {
            return response()->json(['message' => 'Activity not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json($activity);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $event_id
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $event_id, $id)
    {
        $event = Event::find($event_id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], Response::HTTP_BAD_REQUEST);
        }
        $activity = $event->activities()->where('id', $id)->first();
        if (!$activity) {
            return response()->json(['message' => 'Activity not found'], Response::HTTP_NOT_FOUND);
        }
        $activity->name = $request->name;
        $activity->hours = $request->hours;
        $activity->save();
        return response()->json(['message' => 'Successfully updated activity']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $event_id
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($event_id, $id)
    {
        $event = Event::find($event_id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], Response::HTTP_BAD_REQUEST);
        }
        $activity = $event->activities()->where('id', $id)->first();
        if (!$activity) {
            return response()->json(['message' => 'Activity not found'], Response::HTTP_NOT_FOUND);
        }
        $activity->delete();
        return response()->json(['message' => 'Successfully deleted activity']);
    }
}
