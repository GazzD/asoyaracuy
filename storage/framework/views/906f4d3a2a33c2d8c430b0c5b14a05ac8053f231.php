 
<?php $__env->startSection('content'); ?>

<div class="wrapper">
	<div class="container">
		
		<ul class="nav nav-tabs">
	        <li class="active"><a data-toggle="tab" href="#sectionA">Actualizar Datos</a></li>
	        <li><a data-toggle="tab" href="#sectionB">Registro de pagos</a></li>	      
	    </ul>

		<div class="tab-content">
	        <div id="sectionA" class="tab-pane fade in active">
	            <h3>Actualiza datos</h3>
	            <?php echo Form::open(array('route' => array('update-profile'))); ?>				
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div id="customer_details" class="col2-set">
					<div class="col-1">
						<div class="woocommerce-billing-fields">
							<h3>Informaci&oacute;n del usuario</h3>
							<label class="" for="house">Quinta</label>
							<?php echo Form::text('house', $user->house, ['readonly']); ?>

							<label class="" for="phone">Tel&eacute;fono</label>
							<?php echo Form::text('phone', $user->phone, array('placeholder' => 'Tel&eacute;fono')); ?>

							<label class="" for="email">Email</label>
							<?php echo Form::email('email', $user->email, array('placeholder' => 'Correo electrónico')); ?>

							<label class="" for="password">Contrase&ntilde;a</label>
							<?php echo Form::password('password', ''); ?>

							<label class="" for="password_confirmation">Confirmaci&oacute;n de contrase&ntilde;a</label>
							<?php echo Form::password('password_confirmation', ''); ?>

						</div>
					</div>
					<?php if($errors->any()): ?>
					<p style="color:red"><?php echo e($errors->all()); ?></p>
					<?php endif; ?>
				</div>
				<button class="btn btn-success">Actualizar datos</button>
				<?php echo Form::close(); ?>

	        </div>
	        <div id="sectionB" class="tab-pane fade">
	            <div id="customer_details" class="col2-set">
		            <h3>Historial de pagos</h3>
					<div class="table-responsive">
					<?php if(count($payments) > 0): ?>
					  	<table class="table">
					    	<thead>
					    	<tr>
							  <th>#</th>
							  <th>Tipo de pago</th>
							  <th>Estado</th>
							  <th>Codigo de confirmación</th>
							  <th>Fecha de pago</th>
							  <th>Monto</th>
							  <th>Acci&oacute;n</th>
							</tr>
					    	</thead>
					    	<?php $i = 1;?>
					    	<?php foreach($payments as $payment): ?>
					    	<tr>
							  <td><?php echo e($i++); ?></td>
							  <td><?php echo e($payment->type); ?></td>
							  <td><?php echo e($payment->status); ?></td>
							  <td><?php echo e($payment->confirmation_code); ?></td>
							  <td><?php echo e($payment->date); ?></td>
							  <td><?php echo e($payment->amount); ?></td>
							  <td><a href="<?php echo e(route('profile.payment.detail', $payment->id)); ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
							</tr>
							<?php endforeach; ?>
						</table>
					<?php else: ?>
						<p>No se han realizado pagos todav&iacute;a</p>
					<?php endif; ?>
					</div>
					<a href="<?php echo e(route('payment.create')); ?>"><button class="btn btn-success">Registrar pago</button></a>
					<br />
				</div>
			</div>
        </div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>