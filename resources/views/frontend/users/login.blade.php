@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-6">
		<h2>Log in</h2>
		<p>Hi, here you can login to your account. Just fill in the form and press Sign In button.</p>
		<br>
		{!! Html::ul($errors->all(), array('class'=>'alert alert-danger errors')) !!}

		{!! Form::open(array('url' => 'login','class'=>'form')) !!}

		<br>{!! Form::label('email', 'Quinta') !!}
		{!! Form::text('house', null, array('class' => 'form-control','placeholder' => 'Nombre de la quinta')) !!}
		<br>{!! Form::label('password', 'Password') !!}
		{!! Form::password('password', array('class' => 'form-control')) !!}
		<br>
		{!! Form::submit('Sign In' , array('class' => 'btn btn-primary')) !!}
		
		{!! Form::close() !!}
		<br>
	</div>
</div>

<!-- 	<div class="wrapper">
		<div class="container">
			<h1>Bienvenidos</h1>
			
			{!! Form::open(array('url' => 'foo/bar')) !!}
				{!! Form::text('house', '', array('placeholder' => 'Quinta')) !!}
				{!! Form::password('password', array('placeholder' => 'Contrase&ntilde;a')) !!}
				{!! Form::submit('Inicir Sesi&oacute;n', array('class' => 'login-button')) !!}
			{!! Form::close() !!}
		</div>
		
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div> -->
@endsection


