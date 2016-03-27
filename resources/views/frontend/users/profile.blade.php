@extends('layouts.frontend') 
@section('content')
<div class="wrapper">
	<div class="container">
		
		<ul class="nav nav-tabs">
	        <li class="active"><a data-toggle="tab" href="#sectionA">Actualizar Datos</a></li>
	        <li><a data-toggle="tab" href="#sectionB">Registro de pagos</a></li>	      
	    </ul>

		<div class="tab-content">
	        <div id="sectionA" class="tab-pane fade in active">
	            <h3>Actualiza datos</h3>
	            {!! Form::open(array('route' => array('update-profile'))) !!}				
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div id="customer_details" class="col2-set">
					<div class="col-1">
						<div class="woocommerce-billing-fields">
							<h3>Informaci&oacute;n del usuario</h3>
							<label class="" for="house">Quinta</label>
							{!! Form::text(null, $user->house, ['readonly']) !!}
							<label class="" for="phone">Tel&eacute;fono</label>
							{!! Form::text('phone', $user->phone, array('placeholder' => 'Tel&eacute;fono')) !!}
							<label class="" for="email">Email</label>
							{!! Form::email('email', $user->email, array('placeholder' => 'Correo electrónico')) !!}
							<label class="" for="password">Contrase&ntilde;a</label>
							{!! Form::password('password', '', ['placeholder' => 'Contrase&ntilde;a']) !!}
							<label class="" for="password-confirmation">Confirmaci&oacute;n de contrase&ntilde;a</label>
							{!! Form::password('password-confirmation', '') !!}
						</div>
					</div>
						
				</div>
				<button class="btn btn-success">Actualizar datos</button>
				{!! Form::close() !!}
	        </div>
	        <div id="sectionB" class="tab-pane fade">
	            <div id="customer_details" class="col2-set">
		            <h3>Historial de pagos</h3>
					<div class="table-responsive">
					@if(count($payments) > 0)
					  	<table class="table">
					    	<thead>
					    	<tr>
							  <th>#</th>
							  <th>Quinta</th>
							  <th>Tipo de pago</th>
							  <th>Estado</th>
							  <th>Codigo de confirmación</th>
							  <th>Fecha de pago</th>
							  <th>Monto</th>
							</tr>
					    	</thead>
					    	<?php $i = 1;?>
					    	@foreach ($payments as $payment)
					    	<tr>
							  <td>{{ $i++ }}</td>
							  <td>{{ $payment->house }}</td>
							  <td>{{ $payment->type }}</td>
							  <td>{{ $payment->status }}</td>
							  <td>{{ $payment->confirmation_code }}</td>
							  <td>{{ $payment->date }}</td>
							  <td>{{ $payment->amount }}</td>
							</tr>
							@endforeach
						</table>
					@else
						<p>No se han realizado pagos todav&iacute;a</p>
					@endif
					</div>
					<a href="{{URL::route('payment.create')}}"><button class="btn btn-success">Registrar pago</button></a>
					<br />
				</div>
			</div>
        </div>
	</div>
</div>
@endsection
