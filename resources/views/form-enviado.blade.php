@extends('layout')
@section('titulo-pagina')
Formulário submetido
@endsection
@section('header')
Informação enviada através de form
@endsection
@section('conteudo')
<u>Nome: </u>{{$nome}}<br>
<u>Morada: </u>{{$morada}}<br>
<u>Automoveis: </u>
{{$automovel}}@endsection