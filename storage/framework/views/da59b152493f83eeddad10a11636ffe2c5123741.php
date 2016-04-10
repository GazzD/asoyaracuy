<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Asoyaracuy | Admin</title>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>AdminLTE 2 | Log in</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<?php echo Html::style('css/bootstrap.min.css'); ?>

		<?php echo Html::script('js/jquery.min.js'); ?>

		<?php echo Html::script('js/bootstrap.min.js'); ?>

		<!-- Font Awesome -->
		<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet"
			href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="backend/dist/css/AdminLTE.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="backend/plugins/iCheck/square/blue.css">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

    <body>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>