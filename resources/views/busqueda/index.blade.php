@extends('censo')

@section('contenido')

  <form action="{{route('busqueda.store')}}" method="POST">
		{{ csrf_field() }}
		<table border=1>
			<tr>
				<td>longitud</td>
				<td><input type="float" name="longitud" /></td>
			</tr>
      <tr>
        <td>latitud</td>
        <td><input type="float" name="latitud" /></td>
      </tr>
      <tr>
        <td>minimo</td>
        <td><input type="float" name="minimo" /></td>
      </tr>
      <tr>
        <td>maximo</td>
        <td><input type="float" name="maximo" /></td>
      </tr>
			<tr>
				<td colspan=2>
					<input type="submit" value="Buscar">
				</td>
			</tr>
		</table>
	</form>

@stop
