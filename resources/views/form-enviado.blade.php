@extends('layout')
@section('titulo-pagina')
Formulário submetido
@endsection
@section('header')
Informação enviada através de form
@endsection
@section('conteudo')
<li>Nome: </li>{{$nome}}<br>
<li>Morada: </li>{{$morada}}<br>
<li>Automoveis: </li>
{{$automovel}}@endsection