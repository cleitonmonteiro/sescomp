@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add support') }}</div>

                <div class="card-body">
                    <form action="{{route('add.support.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="event_id" value={{$event_id}}>
                            <input type="email" name="email" id="">
                            <input type="submit" value="add">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





