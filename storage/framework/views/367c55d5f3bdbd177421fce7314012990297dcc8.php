 <?php $__env->startSection('content'); ?>

<!-- Main row -->
<div class="content-wrapper" style="height: 853px;">
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
	
		<h2>Actualizar Usuario</h2>
		<div class="container">
		    <div class="row">
		        <div class="col-md-8">
					<div class="panel panel-default">
			            <div class="panel-heading">Actualizar quinta <?php echo e($user->house); ?></div>
			            <div class="panel-body">
							<?php echo Form::open(array('route' => 'admin.user.update', 'class' => 'form-horizontal')); ?>

							    <?php echo Form::hidden('id',$user->id); ?>


								<div class="form-group<?php echo e($errors->has('house') ? ' has-error' : ''); ?>">
							      	<label class="col-md-4 control-label" for="house">Quinta</label>
							      	<div class="col-md-6">
										<?php echo Form::text('house', $user->house , array('placeholder' => 'Quinta', 'class' => 'form-control')); ?>

										
										<?php if($errors->has('house')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('house')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
							    	</div>
							    </div>

							    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
							    	<label class="col-md-4 control-label" for="email">Correo electr&oacute;nico</label>
							    	<div class="col-md-6">
								    	<?php echo Form::email('email', $user->email , array('placeholder' => 'example@mail.com', 'class' => 'form-control')); ?>


								    	<?php if($errors->has('email')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('email')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
								    </div>
							    </div>
							    <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
							    	<label class="col-md-4 control-label" for="phone">Tel&eacute;fono</label>
							      	<div class="col-md-6">
							    		<?php echo Form::text('phone', $user->phone , array('placeholder' => '(0212) 111 22 22', 'class' => 'form-control')); ?>


							    		<?php if($errors->has('phone')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('phone')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
							    	</div>
							    </div>
							    <?php if(isset($specialFee)): ?> 
							    <div class="form-group">
							    	<label class="col-md-4 control-label" for="specialFee">Cuota Especial Activa</label>
							      	<div class="col-md-6">
								    	<?php echo Form::text('specialFee', $specialFee->amount , array('placeholder' => '100', 'class' => 'form-control','readonly')); ?>

								    </div>
							    </div>
							    <?php endif; ?>
							    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
							    	<label class="col-md-4 control-label" for="password">Contrase&ntilde;a</label>
							    	<div class="col-md-6">
							    		<?php echo Form::password('password', array('class' => 'form-control')); ?>

							    	</div>
							    </div>
							    <div class="form-group">
							    	<label class="col-md-4 control-label" for="password_confirmation">Confirmaci&oacute;n de contrase&ntilde;a</label>
							    	<div class="col-md-6">
							    		<?php echo Form::password('password_confirmation', array('class' => 'form-control')); ?>

							    	</div>
							    </div>

							    <div class="form-group">
							    	<label class="col-md-4 control-label" for="role">Rol</label>
							    	<div class="col-md-6">
							    		<?php echo Form::select('role', array('USER' => 'Usuario', 'ADMIN' => 'Administrador', 'COLLECTOR' => 'Cobrador', 'DIRECTIVE' => 'Junta directiva'), ['class' => 'form-control']); ?>

							    	</div>
							    </div>
							    <div class="form-group">
							    	<label class="col-md-4 control-label" for="hasSpecialFee">¿Agregar cuota especial?</label>
							    	<div class="col-md-6">
							    		<?php echo Form::checkbox('hasSpecialFee','false', array('class' => 'form-control')); ?>

							    	</div>
							    </div>
							    <div class="form-group">
							      	<label class="col-md-4 control-label" for="amount">Nueva cuota especial</label>
							      	<div class="col-md-6">
							    		<?php echo Form::text('amount','', array('class' => 'form-control')); ?>

							    	</div>
							    </div>
								
								<div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button class="btn btn-success" type="submit">
											<i class="fa fa-btn fa-user"></i>
		                                	Guardar
		                                </button>
		                                    
		                                <a href="<?php echo e(URL::route('admin.users')); ?>" class="btn btn-primary">Volver</a>
		                            </div>
		                        </div>
							<?php echo Form::close(); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class = "col-md-3"></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>