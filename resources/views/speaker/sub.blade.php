@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nova atividade</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('activities.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="off"  autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="off" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="abstract">Resumo</label>
                            <textarea type="text" name="abstract" id="Resumo" rows="5" cols="66"></textarea>
                            <h5>maximo 5000 letras</h5>
                        </div>


                        <div class="form-group row">
                            <div class="mx-auto">
                                <select name="level">
                                    <option selected="selected" value="Facil">Facil</option>
                                    <option value="Intermediario">Intermediario</option>
                                    <option value="Dificil">Dificil</option>
                                </select>

                                <select name="hours">
                                    <option selected="selected" value="1">1 hora</option>
                                    <option value="2">2 horas</option>
                                    <option value="4">4 horas</option>
                                </select>
                            </div>
                        </div>

                        <input type="hidden" name="event_id" value="{{$event}}">

                        <div class="form-group row mb-0">
                            <div class="col-md offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('submeter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
