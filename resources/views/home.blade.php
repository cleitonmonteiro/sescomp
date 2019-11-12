@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <event-card-home event="{{$event}}"/>
                    </div>
                    <div>
                        <form action="{{route ('sub')}}" method="post">
                            @csrf
                            <input type="hidden" name="_id" value="{{$event->id}}">
                            <input type="submit" value="inscrever">
                        </form>

                        <form action="{{route ('events.show', ['event' => $event->id])}}" method="get">
                            <input type="submit" value="ver evento">
                        </form>

                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
