@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <event-card name="teste" description="terrterttkjh"></event-card>
                </div>
                {{-- 8 --}}
                <div>
                    <activities-carousel activities="{{$activities[0]}}"></activities-carousel>
                </div>

                {{-- 10 --}}
                <div>
                    <activities-carousel activities="{{$activities[1]}}"></activities-carousel>
                </div>

                {{-- 1.30 --}}
                <div>
                    <activities-carousel activities="{{$activities[2]}}"></activities-carousel>
                </div>

                {{-- 3.30 --}}
                <div>
                    <activities-carousel activities="{{$activities[3]}}"></activities-carousel>
                </div>
    

            </div>
        </div>
    </div>
</div>
@endsection
