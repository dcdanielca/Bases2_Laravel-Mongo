@extends('plantilla')

@section('contenido')
	
	<form action="{{route('estudiantes.store')}}" method="POST">
		{{ csrf_field() }}
		<table border=1>
			<tr>
				<td>nombre</td>
				<td><input type="text" name="nombre" /></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email" /></td>
			</tr>
			<tr>
				<td colspan=2>
					<input type="submit" value="Guardar">
				</td>
			</tr>
		</table>
	</form>

@stop