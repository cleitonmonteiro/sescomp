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
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label for="emailSupport">email do suporte</label>
                                            <input id="emailSupport" class="form-control" type="text" name="">
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
