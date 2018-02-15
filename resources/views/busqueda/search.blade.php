@extends('censo')

@section('contenido')

<table border=1>
	<tr>
		<th>dirección</th>
		<th>municipio</th>
		<th>estrato</th>
		<th>propia</th>
		<th>código</th>
		<th>ubicación</th>
		<th>residentes</th>
		<th>habitantes</th>
	</tr>

@foreach($residencias as $r)
	<tr>
		<td>{{$r->direccion}}</td>
		<td>{{$r->municipio}}</td>
		<td>{{$r->estrato}}</td>
		<td>{{$r->propia}}</td>
		<td>{{$r->codigo}}</td>
		<td><a href="https://www.google.com.co/maps/dir/'{{$r->ubicacion->coordinates[0]}},{{$r->ubicacion->coordinates[1]}}'">Ver </a> </td>
		<td>{{$r->residentes}}</td>
		<td> <?php
		echo "[";
		foreach ($r->habitantes as $key):
						echo $key . ", ";
					endforeach;
					echo "]";?>
		</td>
	</tr>
@endforeach

	</table>
@stop
