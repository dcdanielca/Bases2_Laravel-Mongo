

<?php $__env->startSection('contenido'); ?>
	
	<table border=1>
		<tr>
			<th>_id</th>
			<th>nombre</th>
			<th>email</th>
		</tr>
		
	<?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($e->_id); ?></td>
			<td><?php echo e($e->nombre); ?></td>
			<td><?php echo e($e->email); ?></td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
	</table>
	
	<a href="<?php echo e(route('estudiantes.create')); ?>">Nuevo</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>