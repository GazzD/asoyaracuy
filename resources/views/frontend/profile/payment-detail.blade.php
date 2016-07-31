@extends('layouts.frontend')
@section('content')

<!-- Main row -->
<div class="content-wrapper">
	<!-- Main content -->
	<div class="row">
		<div class="col-md-3"></div>
		<section class="content col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Detalles del pago</div>
				<div class="panel-body"><span>Banco: </span>{{$payment->bank}}</div>
				<div class="panel-body"><span>C&oacute;digo de confirmaci&oacute;n: </span>{{$payment->confirmation_code}}</div>
				<div class="panel-body"><span>Fecha de pago: </span>{{$payment->date}}</div>
				<div class="panel-body"><span>Monto: </span>{{$payment->amount}}</div>
				<div class="panel-body"><span>Estado del pago: </span>{{$payment->status}}</div>
				<div class="panel-body"><span>Tipo de pago: </span>{{$payment->type}}</div>
				<div class="panel-body"><span>Nota: </span>{{$payment->note}}</div>
			</div>		
			<a href="{{route('profile.invoice', $payment->id)}}"><button class="btn btn-success">Descargar Factura</button></a><a href="{{route('profile')}}"><button class="btn btn-primary">Volver</button></a>
		</section>
		<div class="col-md-3"></div>
	</div>
</div>
@endsection
