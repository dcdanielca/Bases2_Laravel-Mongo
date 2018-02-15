

<?php $__env->startSection('contenido'); ?>

	<form name = "form" action="<?php echo e(route('residencias.store')); ?>" method="POST">
		<?php echo e(csrf_field()); ?>

		<table border=1>
			<tr>
				<td>direccion</td>
				<td><input type="text" name="direccion" /></td>
			</tr>
			<tr>
				<td>municipio</td>
				<td><input type="text" name="municipio" /></td>
			</tr>
			<tr>
				<td>estrato</td>
				<td><input type="number" name="estrato" min=0 max=7 /></td>
			</tr>
			<tr>
				<td>propia</td>
				<td>
					<select name="valor">
						<option value=1>Sí</option>
  					<option value=0>No</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>código</td>
				<td><input type="text" name="codigo"/></td>
			</tr>
			<tr>
				<td>longitud</td>
				<td><input type="text" name="longitud"/></td>
			</tr>
			<tr>
				<td>latitud</td>
				<td><input type="text" name="latitud"/></td>
			</tr>
			<tr>
				<td colspan=2>
					<input type="submit" value="Agregar">
				</td>
			</tr>
		</table>
	</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('censo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>