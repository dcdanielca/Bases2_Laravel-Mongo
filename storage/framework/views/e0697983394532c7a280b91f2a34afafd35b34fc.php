

<?php $__env->startSection('contenido'); ?>

	<h2>Información básica </h2>
	<table border=1>
		<tr>
			<th>documento</th>
			<th>nombre</th>
			<th>fecha de nacimiento</th>
			<th>municipio nacimiento</th>
			<th>grupo sanguineo</th>
			<th>residencia</th>
		</tr>

	<?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($p->documento); ?></td>
			<td><?php echo e($p->nombre); ?></td>
			<td><?php echo e($p->fecha); ?></td>
			<td><?php echo e($p->municipio); ?></td>
			<td><?php echo e($p->sangre); ?></td>
			<td><?php echo e($p->residencia); ?></td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>
	<a href="<?php echo e(route('personas.create')); ?>">Nueva</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('censo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>