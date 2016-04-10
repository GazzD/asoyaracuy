 <?php $__env->startSection('content'); ?>

<!-- Main row -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Pagos <small>Panel de control</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Pagos</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<h2>Quinta <?php echo e($payment->house); ?></h2>
		<div class="panel panel-primary">
			<div class="panel-heading">Detalles del pago</div>
			<div class="panel-body"><span>Banco: </span><?php echo e($payment->bank); ?></div>
			<div class="panel-body"><span>C&oacute;digo de confirmaci&oacute;n: </span><?php echo e($payment->confirmation_code); ?></div>
			<div class="panel-body"><span>Fecha de pago: </span><?php echo e($payment->date); ?></div>
			<div class="panel-body"><span>Monto: </span><?php echo e($payment->amount); ?></div>
			<div class="panel-body"><span>Estado del pago: </span><?php echo e($payment->status); ?></div>
			<div class="panel-body"><span>Tipo de pago: </span><?php echo e($payment->type); ?></div>
			<div class="panel-body"><span>Nota: </span><?php echo e($payment->note); ?></div>
		</div>
		
		<a href="<?php echo e(URL::route('admin.payment.approve', $payment->id)); ?>"><button class="btn btn-success">Aprobar</button></a>
		<a href="<?php echo e(URL::route('admin.payment.reject', $payment->id)); ?>"><button class="btn btn-danger">Rechazar</button></a>
		<a href="<?php echo e(URL::route('admin.payments')); ?>"><button class="btn btn-primary">Volver</button></a>
	</section>
	
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>