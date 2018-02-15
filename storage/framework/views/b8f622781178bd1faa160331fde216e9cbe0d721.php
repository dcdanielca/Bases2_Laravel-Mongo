

<?php $__env->startSection('contenido'); ?>
	
	<form action="<?php echo e(route('estudiantes.store')); ?>" method="POST">
		<?php echo e(csrf_field()); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>