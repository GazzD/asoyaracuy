@extends('layouts.backend') @section('content')

<!-- Main row -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Usuarios <small>Panel de control</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{!!URL::route('admin')!!}"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li><a href="{!!URL::route('admin.users')!!}">Usuarios</a></li>
			<li class="active">Crear</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content col-md-5">
		<h2>Agregar Usuario</h2>

		<div class="container">
		    <div class="row">
		        <div class="col-md-8 col-md-offset-2">
		            <div class="panel panel-default">
		                <div class="panel-heading">Agregar Usuario</div>
		                <div class="panel-body">
		                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
		                    {!! Form::open(array('route' => 'admin.user.store')) !!}
		                        {!! csrf_field() !!}

		                        <div class="form-group{{ $errors->has('house') ? ' has-error' : '' }}">
		                            <label class="col-md-4 control-label">Casa</label>

		                            <div class="col-md-6">
		                                <input type="text" class="form-control" name="house" value="{{ old('house') }}">

		                                @if ($errors->has('house'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('house') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		                            <label class="col-md-4 control-label">E-Mail</label>

		                            <div class="col-md-6">
		                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

		                                @if ($errors->has('email'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
		                            <label class="col-md-4 control-label">Tel&eacute;fono</label>

		                            <div class="col-md-6">
		                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">

		                                @if ($errors->has('phone'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('phone') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		                            <label class="col-md-4 control-label">Password</label>

		                            <div class="col-md-6">
		                                <input type="password" class="form-control" name="password">

		                                @if ($errors->has('password'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
		                            <label class="col-md-4 control-label">Confirm Password</label>

		                            <div class="col-md-6">
		                                <input type="password" class="form-control" name="password_confirmation">

		                                @if ($errors->has('password_confirmation'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button type="submit" class="btn btn-primary">
		                                    <i class="fa fa-btn fa-user"></i>Agregar
		                                </button>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		{!! Form::open(array('url' => 'foo/bar')) !!}
			<div class="form-group">
		      <label for="first_name">Casa:</label>
				{!! Form::text('first_name', null , array('placeholder' => 'nombre', 'class' => 'form-control')) !!}
		    </div>
		    <div class="form-group">
		      <label for="last_name">Apellidos:</label>
		    {!! Form::text('last_name', null , array('placeholder' => 'apellido', 'class' => 'form-control')) !!}
		    </div>
		    <div class="form-group">
		      <label for="ci">C&eacute;dula:</label>
		    {!! Form::text('ci', null , array('placeholder' => '123456789', 'class' => 'form-control')) !!}
		    </div>
		    <div class="form-group">
		      <label for="email">Correo electr&oacute;nico:</label>
		    {!! Form::email('email', null , array('placeholder' => 'example@mail.com', 'class' => 'form-control')) !!}
		    </div>
		    <div class="form-group">
		      <label for="phone">Tel&eacute;fono:</label>
		    {!! Form::text('phone', null , array('placeholder' => '(0212) 111 22 22', 'class' => 'form-control')) !!}
		    </div>
		    <div class="form-group">
		      <label for="password">Contrase&ntilde;a:</label>
		    {!! Form::password('password', array('class' => 'form-control')) !!}
		    </div>
		    <div class="form-group">
		      <label for="password_confirmation">Confirmaci&oacute;n de contrase&ntilde;a:</label>
		    {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
		    </div>
		    <div class="form-group">
		      <label for="role">Role:</label>
		    {!! Form::select('role', array('CONTENT_ADMIN' => 'Administrador de contenido', 'PAYMENT_ADMIN' => 'Administrado de pagos', 'USER_ADMIN' => 'Administrador de usuarios', 'DIRECTIVE' => 'Junta directiva', 'SUPER_ADMIN' => 'Super administrador'), ['class' => 'form-control']) !!}
		    </div>
		    
		{!! Form::close() !!}
		<a href="{{URL::route('admin.users')}}"><button class="btn btn-primary">Volver</button></a>
	</section>
	<div class = "col-md-3"></div>
</div>
@endsection
