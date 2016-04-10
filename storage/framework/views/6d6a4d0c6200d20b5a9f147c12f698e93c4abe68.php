 <?php $__env->startSection('content'); ?>

<!-- Main row -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Pagos <small>Panel de control</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo URL::route('admin'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li><a href="<?php echo URL::route('admin.users'); ?>">Usuarios</a></li>
			<li class="active">Detalle</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<h2>Usuario</h2>
		<div class="panel panel-primary">
			<div class="panel-heading">Detalles del usuario</div>
			<div class="panel-body"><span>Quinta: </span><?php echo e($user->house); ?></div>
			<div class="panel-body"><span>Tel&eacute;fono: </span><?php echo e($user->phone); ?></div>
			<div class="panel-body"><span>Email: </span><?php echo e($user->email); ?></div>
			<div class="panel-body"><span>Rol: </span><?php echo e($user->role); ?></div>
			<?php if(isset($specialFee)): ?>
			<div class="panel-body"><span>Cuota especial: </span><?php echo e($specialFee->amount); ?></div>	
			<?php endif; ?>
		</div>
		
		<a href="<?php echo e(URL::route('admin.user.edit', $user->id)); ?>"><button class="btn btn-success">Editar</button></a>
		<a href="<?php echo e(URL::route('admin.user.delete', $user->id)); ?>"><button class="btn btn-danger">Eliminar</button></a>
		<a href="<?php echo e(URL::route('admin.users')); ?>"><button class="btn btn-primary">Volver</button></a>
	</section>
	
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>