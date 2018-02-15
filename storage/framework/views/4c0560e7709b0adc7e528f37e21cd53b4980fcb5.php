

<?php $__env->startSection('contenido'); ?>
	
	<table border=1>
		<tr>
			<th>_id</th>
			<th>nombre</th>
		</tr>
		
	<?php $__currentLoopData = $restaurantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($r->_id); ?></td>
			<td><?php echo e($r->name); ?></td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
	</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>