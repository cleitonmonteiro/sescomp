@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <event-card name="{{$event->name}}" description="{{$event->description}}"></event-card>
                        <a href="{{route('activities.create', ['event' => $event->id])}}">submeter atividade</a>
                    </div>
                    {{-- 8 --}}
                    @if (count($activities[0]))
                    <div>
                        <h1>8 as 10 horas</h1>
                        <activities-carousel activities="{{$activities[0]}}" ></activities-carousel>
                    </div>
                    @endif
                    {{-- 10 --}}
                    @if (count($activities[1]))
                    <div>
                        <h1>10 as 12 horas</h1>
                        <activities-carousel activities="{{$activities[1]}}" ></activities-carousel>
                    </div>
                    @endif
                    
                    {{-- 1.30 --}}
                    
                    @if (count($activities[2]))
                    <div>
                        <h1>1:30 as 3:30 horas</h1>
                        <activities-carousel activities="{{$activities[2]}}" ></activities-carousel>
                    </div>
                    @endif
                    {{-- 3.30 --}}
                    
                    @if (count($activities[3]))
                    <div>
                        <h1>3:30 as 5:30 horas</h1>
                        <activities-carousel activities="{{$activities[3]}}"></activities-carousel>
                    </div>
                    @endif
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection
