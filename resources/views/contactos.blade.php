@extends('layout')
@section('titulo-pagina')
Contactos
@endsection
@section('header')
Fale Connosco
@endsection
@section('conteudo')
<form method="post" action="{{route('processar.form')}}">@csrf
	
	<label for="nome">Nome</label>
	<input type="text" name="nome">
	<br>

	<label for="morada">Morada</label>
	<input type="text" name="morada">
	<br>

	<label for="automovel">Automovel</label>
	<select name="automovel">
		<option value="honda">Honda</option>
		<option value="bmw">BMW</option>
		<option value="mercedes">Mercedes</option>
		<option value="porsche">Porsche</option>
	</select>
	<br>

	<button type="submit">Enviar</button>
</form>


@endsection


