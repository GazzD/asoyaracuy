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
			<li class="active">Actualizar</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content col-md-5">
	
		<?php foreach($errors->all() as $error): ?>
		<p style="color:red"><?php echo $error; ?></p>
		<?php endforeach; ?>
	
		<h2>Actualizar Usuario</h2>
		<?php echo Form::open(array('route' => 'admin.user.update')); ?>

		    <?php echo Form::hidden('id',$user->id); ?>


			<div class="form-group">
		      <label for="house">Quinta:</label>
				<?php echo Form::text('house', $user->house , array('placeholder' => 'Quinta', 'class' => 'form-control')); ?>

		    </div>
		    <div class="form-group">
		      <label for="email">Correo electr&oacute;nico:</label>
		    <?php echo Form::email('email', $user->email , array('placeholder' => 'example@mail.com', 'class' => 'form-control')); ?>

		    </div>
		    <div class="form-group">
		      <label for="phone">Tel&eacute;fono:</label>
		    <?php echo Form::text('phone', $user->phone , array('placeholder' => '(0212) 111 22 22', 'class' => 'form-control')); ?>

		    </div>
		    <?php if(isset($specialFee)): ?> 
		    <div class="form-group">
		      <label for="specialFee">Cuota Especial Activa:</label>
		    <?php echo Form::text('specialFee', $specialFee->amount , array('placeholder' => '100', 'class' => 'form-control','readonly')); ?>

		    </div>
		    <?php endif; ?>
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
		    <?php echo Form::select('role', array('USER' => 'Usuario', 'ADMIN' => 'Administrador', 'COLLECTOR' => 'Cobrador', 'DIRECTIVE' => 'Junta directiva'), ['class' => 'form-control']); ?>

		    </div>
		    <div class="form-group">
		      <label for="hasSpecialFee">¿Agregar cuota especial?:</label>
		    <?php echo Form::checkbox('hasSpecialFee','false', array('class' => 'form-control')); ?>

		    </div>
		    <div class="form-group">
		      <label for="amount">Nueva cuota especial:</label>
		    <?php echo Form::text('amount','', array('class' => 'form-control')); ?>

		    </div>

		    <button class="btn btn-success" type="submit">Guardar</button>
		<a href="<?php echo e(URL::route('admin.users')); ?>"><button class="btn btn-primary">Volver</button></a>
		<?php echo Form::close(); ?>

	</section>
	<div class = "col-md-3"></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>