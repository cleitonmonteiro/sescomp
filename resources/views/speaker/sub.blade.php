@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nova atividade</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('events.store') }}">
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
                            <label for="resumo">Resumo</label>
                            <textarea type="text" name="Resumo" id="Resumo" rows="5" cols="66"></textarea>
                        </div>


                        <div class="form-group row">
                            <div class="mx-auto">
                                <select name="nivel">
                                    <option value="facil">Facil</option>
                                    <option value="intermediario">Intermediario</option>
                                    <option value="dificil">Dificil</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Adicionar') }}
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
