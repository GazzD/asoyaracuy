<?php $__env->startSection('content'); ?>

<!-- Main row -->
<div class="content-wrapper">
	<!-- Main content -->
	<div class="row">
		<div class="col-md-3"></div>
		<section class="content col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Detalles del pago</div>
				<div class="panel-body"><span>Banco: </span><?php echo e($payment->bank); ?></div>
				<div class="panel-body"><span>C&oacute;digo de confirmaci&oacute;n: </span><?php echo e($payment->confirmation_code); ?></div>
				<div class="panel-body"><span>Fecha de pago: </span><?php echo e($payment->date); ?></div>
				<div class="panel-body"><span>Monto: </span><?php echo e($payment->amount); ?></div>
				<div class="panel-body"><span>Estado del pago: </span><?php echo e($payment->status); ?></div>
				<div class="panel-body"><span>Tipo de pago: </span><?php echo e($payment->type); ?></div>
				<div class="panel-body"><span>Nota: </span><?php echo e($payment->note); ?></div>
			</div>		
			<a href="<?php echo e(route('profile.invoice', $payment->id)); ?>"><button class="btn btn-success">Descargar Factura</button></a><a href="<?php echo e(route('profile')); ?>"><button class="btn btn-primary">Volver</button></a>
		</section>
		<div class="col-md-3"></div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>