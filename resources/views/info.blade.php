@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-md-7">
                <img class="img-fluid" src="{{ asset('images/home.jpg') }}" alt="">
            </div>
            <div class="col-md-5">
                <h1>
                    Quinta edição da Semana de Engenharia de Software e Ciência da Computação - Campus da UFC em Russas
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <a type="button" class="btn btn-success" href="#">Submeter atividade</a>
            </div>
            <div class="col-md-5 text-right">
                <a type="button" class="btn btn-success" href="#">Inscreva-se</a>
            </div>
        </div>
    </div>
@endsection
