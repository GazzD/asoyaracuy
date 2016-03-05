@extends('layouts.frontend') 
@section('content')
<div class="wrapper">
	<div class="container">
		

		{!! Form::open(array('route' => 'user.update')) !!}
		<div id="customer_details" class="col2-set">
			<div class="col-1">
				<div class="woocommerce-billing-fields">
					<h3>Informaci&oacute;n del usuario</h3>
					<p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
						<label class="" for="billing_country">Nombre
						</label> 
						<label class="" for="billing_country">Nombre
						</label>
					</p>

					<p id="billing_first_name_field"
						class="form-row form-row-first validate-required">
						<label class="" for="billing_first_name">First Name <abbr
							title="required" class="required">*</abbr>
						</label> <input type="text" value="" placeholder=""
							id="billing_first_name" name="billing_first_name"
							class="input-text ">
					</p>

					<p id="billing_last_name_field"
						class="form-row form-row-last validate-required">
						<label class="" for="billing_last_name">Last Name <abbr
							title="required" class="required">*</abbr>
						</label> <input type="text" value="" placeholder=""
							id="billing_last_name" name="billing_last_name"
							class="input-text ">
					</p>
				</div>
			</div>
		</div>
		<button class="btn btn-success">Actualizar datos</button>
		{!! Form::close() !!}
		<div id="customer_details" class="col2-set">
			<h3>Pagos</h3>
			<div class="table-responsive">
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
			</div>
			<a href="{{URL::route('payment.create')}}"><button class="btn btn-success">Registrar pago</button></a>
			<br />
		</div>
	</div>
</div>
@endsection
