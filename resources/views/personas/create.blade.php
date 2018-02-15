@extends('censo')

@section('contenido')

	<form action="{{route('personas.store')}}" method="POST">
		{{ csrf_field() }}
		<table border=1>
			<tr>
				<td>documento</td>
				<td><input type="number" name="documento" /></td>
			</tr>
			<tr>
				<td>nombre</td>
				<td><input type="text" name="nombre" /></td>
			</tr>
			<tr>
				<td>fecha de nacimiento</td>
				<td><input type="date" name="fecha" /></td>
			</tr>
			<tr>
				<td>municipio nacimiento</td>
				<td><input type="text" name="municipio" /></td>
			</tr>
			<tr>
				<td>grupo sanguineo</td>
				<td><input type="text" name="sangre" /></td>
			</tr>
			<tr>
				<td>residencia</td>
				<td><select name="residencia">
							@foreach($residencias as $r)
								<option value={{$r->codigo}}> {{$r->codigo}}</option>
							@endforeach
						</select></td>
			</tr>
			<tr>
				<td colspan=2>
					<input type="submit" value="Agregar">
				</td>
			</tr>
		</table>
	</form>

@stop
