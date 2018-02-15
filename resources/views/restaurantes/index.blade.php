@extends('plantilla')

@section('contenido')
	
	<table border=1>
		<tr>
			<th>_id</th>
			<th>nombre</th>
		</tr>
		
	@foreach($restaurantes as $r)
		<tr>
			<td>{{$r->_id}}</td>
			<td>{{$r->name}}</td>
		</tr>
	@endforeach
	
	</table>

@stop