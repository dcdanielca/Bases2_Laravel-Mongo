

<?php $__env->startSection('contenido'); ?>

	<table border=1>
		<tr>
			<th>dirección</th>
			<th>municipio</th>
			<th>estrato</th>
			<th>propia</th>
			<th>código</th>
			<th>ubicación</th>
			<th>residentes</th>
			<th>habitantes</th>
		</tr>

	<?php $__currentLoopData = $residencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($r->direccion); ?></td>
			<td><?php echo e($r->municipio); ?></td>
			<td><?php echo e($r->estrato); ?></td>
			<td><?php echo e($r->propia); ?></td>
			<td><?php echo e($r->codigo); ?></td>
			<td><a href="https://www.google.com.co/maps/dir/'<?php echo e($r->ubicacion->coordinates[0]); ?>,<?php echo e($r->ubicacion->coordinates[1]); ?>'">Ver </a> </td>
			<td><?php echo e($r->residentes); ?></td>
			<td> <?php
			echo "[";
			foreach ($r->habitantes as $key):
							echo $key . ", ";
						endforeach;
						echo "]";?>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

	<a href="<?php echo e(route('residencias.create')); ?>">Nueva</a>
	<br>
	<a href="<?php echo e(route('busqueda.index')); ?>">Buscar residencias cercanas</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('censo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>