@extends('templates.base')
@section('title', 'Visualizar produto')

@section('content')
<h1>{{ $automovel->nome }}</h1>
<img src="{{ $automovel->foto }}" alt="" height="400">

<h3>{{ $automovel->descricao }}</h3>
<p>Ano: {{ $automovel->ano }}</p>
<p>Combustivel: {{ $automovel->combustivel }}</p>
<p>Preco: R$ {{ $automovel->preco }}</p>

@endsection