@extends('templates.base')
@section('title', 'Inserir Automovel')
@section('h1', 'Inserir Automovel')

@section('content')
<div class="row">
    <div class="col-4">

        <form method="post" action="{{ route('automoveis.create') }}" enctype='multipart/form-data'>
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value='{{old('nome')}}'>
                @error('nome')
                    {{-- Caso tiver algum erro de validação, sera renderizado aqui --}}
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descricao</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value='{{old('descricao')}}'>
                @error('descricao')
                    <span>{{$message}}</span>
                @enderror
            </div>
           


            <div class="mb-3">
                <label for="imagem" class="form-label">Foto do carro</label>
                <input type="file" class="form-control" id="imagem" name="imagem">
                @error('imagem')
                    <span>{{$message}}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label for="combustivel" class="form-label">Combustivel</label>
                <input type="text" class="form-control" id="combustivel" name="combustivel" value='{{old('combustivel')}}'>
                @error('combustivel')
                    <span>{{$message}}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="number" min="1900" max="2099" step="1" value="2016" class="form-control" id="ano" name="ano" value='{{old('ano')}}'> 
                @error('ano')
                    <span>{{$message}}</span>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="preco" class="form-label">Preco</label>
                <input type="text" class="form-control" id="preco" name="preco" value='{{old('preco')}}'> 
                @error('preco')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>

    </div>
</div>
@endsection