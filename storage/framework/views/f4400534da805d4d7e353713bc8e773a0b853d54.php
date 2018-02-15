

<?php $__env->startSection('contenido'); ?>

	<form action="<?php echo e(route('busqueda.store')); ?>" method="POST">
		<?php echo e(csrf_field()); ?>

		<table border=1>
			<tr>
				<td>longitud</td>
				<td><input type="number" name="longitud" /></td>
			</tr>
			<tr>
				<td>latitud</td>
				<td><input type="number" name="latitud" /></td>
			</tr>
			<tr>
				<td>distancia mínima</td>
				<td><input type="number" name="minimo" min=0 step="0.1"/></td>
			</tr>
			<tr>
				<td>distancia máxima</td>
				<td><input type="number" name="maxima" min=0 step="0.1"/></td>
			</tr>
			<tr>
				<td colspan=2>
					<input type="submit" value="Buscar residencias">
				</td>
			</tr>
		</table>
	</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('censo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>