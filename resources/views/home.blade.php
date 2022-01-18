@extends('templates.base')
@section('title', 'Home')
@section('h1', 'Automoveis')

@section('content')
<div class="d-flex p-2" style='gap: 1em'>
@foreach ($automoveis as $automovel)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$automovel->foto}}">
        <div class="card-body">
        <h5 class="card-title">{{$automovel->nome}}</h5>
        <p class="card-text">Ano : {{$automovel->ano}}</p>
        <p class="card-text">{{$automovel->combustivel}}</p>
        <a href="{{ route('automoveis.show', ['id' => $automovel->id]) }}" class="btn btn-primary">Ver Carro</a>
        </div>
    </div>
@endforeach
</div>
@endsection