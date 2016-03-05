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
				  <th>Nombre</th>
				  <th>CI</th>
				  <th>Email</th>	
				  <th>Rol</th>		 
				  <th>Acciones</th>
				</tr>
		    	</thead>
		    	<?php $i = 1;?>
		    	@foreach ($users as $user)
		    	<tr>
				  <td>{{ $i }}</td>
				  <td>{{ $user->first_name }} {{ $user->last_name }}</td>
				  <td>{{ $user->ci }}</td>
				  <td>{{ $user->email }}</td>
				  <td>{{ $user->role }}</td>
				  <td><a href="{{URL::route('admin.user.detail',$user->id)}}"><button class="btn btn-primary">Detalle</button></a></td>
				</tr>
				@endforeach
			</table>
		</div>
		<a href="{{URL::route('admin.user.create')}}"><button class="btn btn-success">Agregar</button></a>
	</section>
</div>
@endsection
