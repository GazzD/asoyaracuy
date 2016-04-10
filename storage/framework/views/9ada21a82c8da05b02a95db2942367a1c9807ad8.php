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
			<li class="active">Usuarios</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="table-responsive">
		  	<table class="table">
		    	<thead>
		    	<tr>
				  <th>#</th>
				  <th>Casa</th>
				  <th>Tel&eacute;fono</th>
				  <th>Email</th>	
				  <th>Rol</th>		 
				  <th>Acciones</th>
				</tr>
		    	</thead>
		    	<?php $i = 1;?>
		    	<?php foreach($users as $user): ?>
		    	<tr>
				  <td><?php echo e($i++); ?></td>
				  <td><?php echo e($user->house); ?></td>
				  <td><?php echo e($user->phone); ?></td>
				  <td><?php echo e($user->email); ?></td>
				  <td><?php echo e($user->role); ?></td>
				  <td><a href="<?php echo e(URL::route('admin.user.detail',$user->id)); ?>"><button class="btn btn-primary">Detalle</button></a></td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<a href="<?php echo e(URL::route('admin.user.create')); ?>"><button class="btn btn-success">Agregar</button></a>
	</section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>