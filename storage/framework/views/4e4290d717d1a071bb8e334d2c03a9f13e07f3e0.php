 <?php $__env->startSection('content'); ?>

<!-- Main row -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cuotas Especiales <small>Panel de control</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo URL::route('admin'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Cuotas Especiales</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="table-responsive">
		  	<table class="table">
		    	<thead>
		    	<tr>
				  <th>#</th>
				  <th>Usuario</th>
				  <th>Cuota Especial</th> 
				  <th>Acciones</th>
				</tr>
		    	</thead>
		    	<?php $i = 1;?>
		    	<?php foreach($specialFees as $specialFee): ?>
		    	<tr>
				  <td><?php echo e($i++); ?></td>
				  <td><?php echo e($specialFee->user->house); ?></td>
				  <td><?php echo e($specialFee->amount); ?></td>
				  <td><a href="<?php echo e(URL::route('admin.specialfee.delete',$specialFee->id)); ?>"><button class="btn btn-primary">Borrar</button></a></td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>