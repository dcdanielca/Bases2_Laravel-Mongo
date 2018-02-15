<?php $__env->startSection('contenido'); ?>

  <form action="<?php echo e(route('busqueda.store')); ?>" method="POST">
		<?php echo e(csrf_field()); ?>

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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('censo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>