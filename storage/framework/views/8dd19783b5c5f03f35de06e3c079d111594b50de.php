

<?php $__env->startSection('contenido'); ?>

	<form action="<?php echo e(route('personas.store')); ?>" method="POST">
		<?php echo e(csrf_field()); ?>

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
							<?php $__currentLoopData = $residencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value=<?php echo e($r->codigo); ?>> <?php echo e($r->codigo); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select></td>
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