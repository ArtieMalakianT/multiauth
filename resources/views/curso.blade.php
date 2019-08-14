@extends('layouts.home-menu')

@section('titulo')
Curso
@endsection
@section('conteudo')

<p>Olá Curso {{$pacote->nome}}</p>

@foreach($pacote->pacote as $relacao)
    <p>{{$relacao->cursos->nome}}</p>
@endforeach

@endsection