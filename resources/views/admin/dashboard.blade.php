@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="card col-12">
                <div class="card-body">

                    <div class="row py-3">
                        <div class="col-md-8 mx-auto">
                            <div class="card">
                                <h1 class="card-header text-center">Dashboard - Admin</h1>
                                <div class="card-body">
                                    <a href="{{route('events.create')}}"> Novo evento </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-md-8 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">eventos criados</h5>
                                    @forelse ($events as $i)
                                        <div><event-card title="{{$i->name}}" description="{{$i->description}}"/></div>
                                    @empty
                                        <h1>nenhum evento adicionado<h1>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-5">
                        <div class="col-md-8 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">escolha do suporte</h5>
                                    <form method="POST" action="{{route('admin.dashboard.supportregister')}}">
                                        @csrf
                                        <div class="form-group">
                                            <div class="form-group row py-3">
                                                <label class="px-3" for="emailSupport ">email do suporte</label>
                                                <input id="emailSupport" class="form-control col-md-7 px-3" type="email" name="suportemail">
                                                <div class="px-4">
                                                    <input class="btn btn-primary" type="submit" value="enviar">
                                                </div>
                                            </div>
                                            <div class="row px-3 py-3 d-flex mb-3">
                                                <div class="form-group px-1">
                                                    <input  type="radio" name="suport" value="adicionar" id="radioad">
                                                </div>
                                                <label class="pr-4" for="radioad"> adicionar </label>
                                                
                                                <div class="form-group px-1">
                                                    <input  type="radio" name="suport" value="retirar" id="radiore">
                                                </div>
                                                <label class="mr-auto" for="radiore"> remover </label>
                                            </div>
                                        </div>
                                    </form>

                                    <form method="POST" action="#" >
                                        @csrf
                                        <div class="text-right px-5">
                                            <input class="btn btn-primary" type="submit" value="ver participantes">
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
