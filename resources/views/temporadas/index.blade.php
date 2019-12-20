@extends('layout')

@section('cabecalho')
    
    <h1>Temporadas {{$serie->nome}}</h1>

@endsection

@section('conteudo')
<ul class="list-group mb-2">

    @foreach ($temporadas as $temporada) 
    <li class="list-group-item list-group-item-primary">TEMPORADA {{$temporada->numero}}</li>
    @endforeach

</ul>

@endsection