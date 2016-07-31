<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Asoyaracuy Factura</h1>
	<ul>
		<li><?php echo e($payment->user->house); ?></li>
		<li><?php echo e($payment->bank); ?></li>
		<li><?php echo e($payment->date); ?></li>
		<li><?php echo e($payment->confirmation_code); ?></li>
		<li><?php echo e($payment->amount); ?></li>
		<li><?php echo e($payment->type); ?></li>
	</ul>
</body>
</html>