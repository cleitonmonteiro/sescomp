<?php

namespace App\Http\Controllers\API;
use App\Models\Event;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class EventControllerProxy extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EventController $eventController, Response $request)
    {

        return $eventController->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventController $eventController, Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'begin_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->fails(), 'message' => 'Validator Error'])->setStatusCode(Response::HTTP_BAD_REQUEST);
        }
        return $eventController->store($request);
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
