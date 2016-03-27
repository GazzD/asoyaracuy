@extends('layouts.frontend') 
@section('content')

<!-- Main row -->
<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<div class="col-md-4"></div>
		{!! Form::open(array('route' => 'payment.store')) !!}
		<div id="customer_details" class="col2-set">
			<div class="col-1">
				<div class="woocommerce-billing-fields">
					<h3>Informaci&oacute;n del pago</h3>
					<p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
						<label class="" for="bank">Banco<abbr title="required" class="required">*</abbr>
						</label>
						{!!Form::text('bank')!!}
					</p>
					<p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
						<label class="" for="type">Tipo de pago <abbr title="required" class="required">*</abbr>
						</label>
						{!!FORM::select('type', $payment_types)!!}
					</p>
					<p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
						<label class="" for="confirmation_code">C&oacute;digo de confirmaci&oacute;n<abbr title="required" class="required">*</abbr>
						</label>
						{!!FORM::text('confirmation_code')!!}
					</p>
					<p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
						<label class="" for="amount">Monto<abbr title="required" class="required">*</abbr>
						</label>
						{!!FORM::text('amount')!!}
					</p>
					<p id="note" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
						<label class="" for="billing_country">Nota
						</label>
						{!!FORM::text('note')!!}
					</p>
				</div>
				<button class="btn btn-success">Registrar pago</button>
				<a class="btn btn-primary" href="{{route('profile')}}">Volver</a>
			</div>
		</div>
		{!! Form::close() !!}
	</section>
	
</div>
@endsection
