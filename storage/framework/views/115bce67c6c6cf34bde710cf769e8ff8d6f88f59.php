<?php $__env->startSection('content'); ?>
	<div class="wrapper">
		<div class="container">
			<h1>Bienvenidos</h1>
			<?php echo link_to('/', 'Hola'); ?>

			<?php echo link_to_asset('foo/bar.zip', $title = null, $attributes = array(), $secure = null); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>