@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img class="img-fluid" src="{{ asset('images/home.jpg') }}" alt="">
        </div>
        <div class="col">
            <h1>
                Quinta edição da Semana de Engenharia de Software e Ciência da Computação - Campus da UFC em Russas
            </h1>
            <a type="button" class="btn btn-success" href="{{ route('info') }}">Ver detalhes</a>
        </div>
    </div>
    <div class="row">

    </div>

{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">Dashboard</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    You are logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
</div>
@endsection
