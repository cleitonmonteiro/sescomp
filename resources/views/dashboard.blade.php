@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <div class="card">
                    <div class="card-header">Dashboard</div>
                                
                    <div class="card-body">
                                
                        @forelse ($events as $event)
                            <div>
                                <event-card name="{{$event->name}}" description="{{$event->description}}"/>
                            </div>    
                        @empty
                            <h1>voce nao esta participando de nenhum evento</h1>
                        @endforelse
                        @can('create-event')
                            <a href="{{route('events.create')}}"> Novo evento </a>        
                        @endcan
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
@endsection
