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
			<li class="active">Actualizar</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content col-md-5">
	
		@foreach($errors->all() as $error)
		<p style="color:red">{!!$error!!}</p>
		@endforeach
	
		<h2>Actualizar Usuario</h2>
		{!! Form::open(array('route' => 'admin.user.update')) !!}
		    {!! Form::hidden('id',$user->id) !!}

			<div class="form-group">
		      <label for="house">Quinta:</label>
				{!! Form::text('house', $user->house , array('placeholder' => 'Quinta', 'class' => 'form-control')) !!}
		    </div>
		    <div class="form-group">
		      <label for="email">Correo electr&oacute;nico:</label>
		    {!! Form::email('email', $user->email , array('placeholder' => 'example@mail.com', 'class' => 'form-control')) !!}
		    </div>
		    <div class="form-group">
		      <label for="phone">Tel&eacute;fono:</label>
		    {!! Form::text('phone', $user->phone , array('placeholder' => '(0212) 111 22 22', 'class' => 'form-control')) !!}
		    </div>
		    @if(isset($specialFee)) 
		    <div class="form-group">
		      <label for="specialFee">Cuota Especial Activa:</label>
		    {!! Form::text('specialFee', $specialFee->amount , array('placeholder' => '100', 'class' => 'form-control','readonly')) !!}
		    </div>
		    @endif
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
		    {!! Form::select('role', array('USER' => 'Usuario', 'ADMIN' => 'Administrador', 'COLLECTOR' => 'Cobrador', 'DIRECTIVE' => 'Junta directiva'), ['class' => 'form-control']) !!}
		    </div>
		    <div class="form-group">
		      <label for="hasSpecialFee">¿Agregar cuota especial?:</label>
		    {!! Form::checkbox('hasSpecialFee','false', array('class' => 'form-control')) !!}
		    </div>
		    <div class="form-group">
		      <label for="amount">Nueva cuota especial:</label>
		    {!! Form::text('amount','', array('class' => 'form-control')) !!}
		    </div>

		    <button class="btn btn-success" type="submit">Guardar</button>
		<a href="{{URL::route('admin.users')}}"><button class="btn btn-primary">Volver</button></a>
		{!! Form::close() !!}
	</section>
	<div class = "col-md-3"></div>
</div>
@endsection
