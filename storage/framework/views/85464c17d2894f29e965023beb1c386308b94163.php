 <?php $__env->startSection('content'); ?>

<!-- Main row -->
<div class="content-wrapper" style="height: 652px;">
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

		<div class="container">
		    <div class="row">
		        <div class="col-md-8">
		            <div class="panel panel-default">
		                <div class="panel-heading">Nuevo usuario</div>
		                <div class="panel-body">
		                    <?php echo Form::open(array('route' => 'admin.user.store', 'class' => 'form-horizontal')); ?>

		                        <?php echo csrf_field(); ?>


		                        <div class="form-group<?php echo e($errors->has('house') ? ' has-error' : ''); ?>">
		                            <label class="col-md-4 control-label">Quinta</label>

		                            <div class="col-md-6">
		                            	<?php echo Form::text('house', old('house') , array('placeholder' => 'casa', 'class' => 'form-control')); ?>


		                                <?php if($errors->has('house')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('house')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
		                            </div>
		                        </div>

		                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
		                            <label class="col-md-4 control-label">Correo electr&oacute;nico</label>

		                            <div class="col-md-6">
		                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="quinta@mail.com">

		                                <?php if($errors->has('email')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('email')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
		                            </div>
		                        </div>

		                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
		                            <label class="col-md-4 control-label">Tel&eacute;fono</label>

		                            <div class="col-md-6">
		                                <input type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="(0212) 5555555">

		                                <?php if($errors->has('phone')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('phone')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
		                            </div>
		                        </div>

		                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
		                            <label class="col-md-4 control-label">Contrase&ntilde;a</label>

		                            <div class="col-md-6">
		                                <input type="password" class="form-control" name="password">

		                                <?php if($errors->has('password')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('password')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
		                            </div>
		                        </div>

		                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
		                            <label class="col-md-4 control-label">Confirmaci&oacute;n de contrase&ntilde;a</label>

		                            <div class="col-md-6">
		                                <input type="password" class="form-control" name="password_confirmation">

		                                <?php if($errors->has('password_confirmation')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
		                            </div>
		                        </div>
								
								<div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
		                            <label class="col-md-4 control-label">Rol</label>

		                            <div class="col-md-6">
		                                <?php echo Form::select('role', array('USER' => 'Usuario', 'ADMIN' => 'Administrador', 'DIRECTIVE' => 'Junta directiva', 'COLLECTOR' => 'Cobrador'), ['class' => 'form-control']); ?>

		                                <?php if($errors->has('role')): ?>
		                                    <span class="help-block">
		                                        <strong><?php echo e($errors->first('role')); ?></strong>
		                                    </span>
		                                <?php endif; ?>
		                            </div>
		                        </div>
		                        <?php if(isset($response)): ?>
								<span class="help-block">
                                    <strong><?php echo e($response); ?></strong>
                                </span>
								<?php endif; ?>
		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button type="submit" class="btn btn-success">
		                                    <i class="fa fa-btn fa-user"></i> Agregar
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