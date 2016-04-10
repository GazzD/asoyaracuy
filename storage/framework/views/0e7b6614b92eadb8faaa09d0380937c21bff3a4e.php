<?php $__env->startSection('content'); ?>
	<div class="wrapper">
		<div class="container">
			<h1>Bienvenidos</h1>
			
			<?php echo Form::open(array('url' => 'foo/bar')); ?>

				<?php echo Form::text('house', '', array('placeholder' => 'Quinta')); ?>

				<?php echo Form::password('password', array('placeholder' => 'Contrase&ntilde;a')); ?>

				<?php echo Form::submit('Inicir Sesi&oacute;n', array('class' => 'login-button')); ?>

			<?php echo Form::close(); ?>

		</div>
		
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>