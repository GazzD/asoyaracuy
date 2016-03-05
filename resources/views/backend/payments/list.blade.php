@extends('layouts.backend') @section('content')

<!-- Main row -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Pagos <small>Panel de control</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Pagos</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
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
				  <th>Acciones</th>
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
				  <td><a href="{{URL::to('/admin/payment/detail/')}}/{{ $payment->id }}"><button class="btn btn-primary">Detalle</button></a></td>
				</tr>
				@endforeach
			</table>
		</div>
	</section>
	
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', '');
        data.addColumn('string', 'Quinta');
      	data.addColumn('string', 'Tipo de pago');
        data.addColumn('string', 'Banco');
        data.addColumn('string', 'Codigo de confirmación');
        data.addColumn('string', 'Fecha de pago');
        data.addColumn('number', 'Monto');
        data.addColumn('string', 'Estado');
        data.addColumn('string', 'Acción');

		<?php $i = 1;?>
        data.addRows
        ([	
        	@foreach ($payments as $payment)
        	  ['<input type="checkbox" name="box<?= $payment->id?>" value="combo<?= $payment->id?>">',
         	  '<?= $payment->house;?>', 
        	  '<?= $payment->type;?>', 
        	  '<?= $payment->bank;?>', 
        	  '<?= $payment->confirmation_code;?>', 
        	  '<?= $payment->date;?>',
        	   <?= $payment->amount;?>,
        	  '<?= $payment->state;?>',
        	  '<a href="http://localhost/asoyaracuy/admin/payment/detail/<?= $payment->id;?>"><button class="btn btn-primary">Detalle</button>'
        	  ],
        	@endforeach     
        ]);


        var table = new google.visualization.Table(document.getElementById('payments_table'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%', allowHtml: true, showRowNumber:true});
      }
    </script>
</div>
@endsection