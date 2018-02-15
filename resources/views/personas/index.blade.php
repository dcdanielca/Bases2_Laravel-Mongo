@extends('censo')

@section('contenido')

	<h2>Información básica </h2>
	<table border=1>
		<tr>
			<th>documento</th>
			<th>nombre</th>
			<th>fecha de nacimiento</th>
			<th>municipio nacimiento</th>
			<th>grupo sanguineo</th>
			<th>residencia</th>
		</tr>

	@foreach($personas as $p)
		<tr>
			<td>{{$p->documento}}</td>
			<td>{{$p->nombre}}</td>
			<td>{{$p->fecha}}</td>
			<td>{{$p->municipio}}</td>
			<td>{{$p->sangre}}</td>
			<td>{{$p->residencia}}</td>
		</tr>
	@endforeach

	</table>
	<a href="{{route('personas.create')}}">Nueva</a>

@stop
