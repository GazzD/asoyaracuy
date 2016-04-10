 <?php $__env->startSection('content'); ?>

<!-- Main row -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Usuarios <small>Panel de control</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo URL::route('admin'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li><a href="<?php echo URL::route('admin.users'); ?>">Usuarios</a></li>
			<li class="active">Crear</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content col-md-5">
		<h2>Agregar Usuario</h2>
		<?php echo Form::open(array('url' => 'foo/bar')); ?>

			<div class="form-group">
		      <label for="first_name">Nombres:</label>
				<?php echo Form::text('first_name', null , array('placeholder' => 'nombre', 'class' => 'form-control')); ?>

		    </div>
		    <div class="form-group">
		      <label for="last_name">Apellidos:</label>
		    <?php echo Form::text('last_name', null , array('placeholder' => 'apellido', 'class' => 'form-control')); ?>

		    </div>
		    <div class="form-group">
		      <label for="ci">C&eacute;dula:</label>
		    <?php echo Form::text('ci', null , array('placeholder' => '123456789', 'class' => 'form-control')); ?>

		    </div>
		    <div class="form-group">
		      <label for="email">Correo electr&oacute;nico:</label>
		    <?php echo Form::email('email', null , array('placeholder' => 'example@mail.com', 'class' => 'form-control')); ?>

		    </div>
		    <div class="form-group">
		      <label for="phone">Tel&eacute;fono:</label>
		    <?php echo Form::text('phone', null , array('placeholder' => '(0212) 111 22 22', 'class' => 'form-control')); ?>

		    </div>
		    <div class="form-group">
		      <label for="password">Contrase&ntilde;a:</label>
		    <?php echo Form::password('password', array('class' => 'form-control')); ?>

		    </div>
		    <div class="form-group">
		      <label for="password_confirmation">Confirmaci&oacute;n de contrase&ntilde;a:</label>
		    <?php echo Form::password('password_confirmation', array('class' => 'form-control')); ?>

		    </div>
		    <div class="form-group">
		      <label for="role">Role:</label>
		    <?php echo Form::select('role', array('CONTENT_ADMIN' => 'Administrador de contenido', 'PAYMENT_ADMIN' => 'Administrado de pagos', 'USER_ADMIN' => 'Administrador de usuarios', 'DIRECTIVE' => 'Junta directiva', 'SUPER_ADMIN' => 'Super administrador'), ['class' => 'form-control']); ?>

		    </div>
		    
		<?php echo Form::close(); ?>

		<a href="<?php echo e(URL::route('admin.users')); ?>"><button class="btn btn-primary">Volver</button></a>
	</section>
	<div class = "col-md-3"></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>