@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <h1>Dashboard</h1>
        </div>
        <div class="row justify-content-center">
            <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse()
        </div>


    </div>
@endsection
