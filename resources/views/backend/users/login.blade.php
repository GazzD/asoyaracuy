@extends('layouts.master')

@section('content')
	<div class="wrapper">
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
	</div>
@endsection