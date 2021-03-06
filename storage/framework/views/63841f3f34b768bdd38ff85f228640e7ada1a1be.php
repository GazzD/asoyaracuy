<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Asoyaracuy | Dashboard</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="backend/css/bootstrap.min.css">
		<?php echo Html::style('backend/css/bootstrap.min.css'); ?>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<?php echo Html::style('backend/css/AdminLTE.min.css'); ?>

		<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
		<?php echo Html::style('backend/css/skins/_all-skins.min.css'); ?>

		<!-- iCheck -->
		<?php echo Html::style('backend/css/plugins/iCheck/flat/blue.css'); ?>

		<!-- Date Picker -->
		<?php echo Html::style('backend/css/plugins/datepicker/datepicker3.css'); ?>

		<!-- Daterange picker -->
		<?php echo Html::style('backend/css/plugins/daterangepicker/daterangepicker-bs3.css'); ?>

		<!-- bootstrap wysihtml5 - text editor -->
		<?php echo Html::style('backend/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    	<div class="wrapper">
	    	<header class="main-header">
			    <!-- Logo -->
			    <a href="<?php echo e(route('home')); ?>" class="logo">
			      <!-- mini logo for sidebar mini 50x50 pixels -->
			      <span class="logo-mini"><b>AsoY</b></span>
			      <!-- logo for regular state and mobile devices -->
			      <span class="logo-lg"><b>Asoyaracuy</b></span>
			    </a>
			    <!-- Header Navbar: style can be found in header.less -->
			    <nav class="navbar navbar-static-top" role="navigation">
			      <!-- Sidebar toggle button-->
			      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			        <span class="sr-only">Toggle navigation</span>
			      </a>
			
			      <div class="navbar-custom-menu">
			        <ul class="nav navbar-nav">
			          <!-- Messages: style can be found in dropdown.less-->
			          <li class="dropdown messages-menu">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			              <i class="fa fa-envelope-o"></i>
			              <span class="label label-success">4</span>
			            </a>
			            <ul class="dropdown-menu">
			              <li class="header">You have 4 messages</li>
			              <li>
			                <!-- inner menu: contains the actual data -->
			                <ul class="menu">
			                  <li><!-- start message -->
			                    <a href="#">
			                      <div class="pull-left">
			                        <img alt="Imagen de usuario" src="<?php echo asset('backend/img/user2-160x160.jpg'); ?>" class="img-circle">
			                      </div>
			                      <h4>
			                        Support Team
			                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
			                      </h4>
			                      <p>Why not buy a new awesome theme?</p>
			                    </a>
			                  </li>
			                  <!-- end message -->
			                </ul>
			              </li>
			              <li class="footer"><a href="#">See All Messages</a></li>
			            </ul>
			          </li>
			          <!-- Notifications: style can be found in dropdown.less -->
			          <li class="dropdown notifications-menu">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			              <i class="fa fa-bell-o"></i>
			              <span class="label label-warning">10</span>
			            </a>
			            <ul class="dropdown-menu">
			              <li class="header">You have 10 notifications</li>
			              <li>
			                <!-- inner menu: contains the actual data -->
			                <ul class="menu">
			                  <li>
			                    <a href="#">
			                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
			                    </a>
			                  </li>
			                  <li>
			                    <a href="#">
			                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
			                      page and may cause design problems
			                    </a>
			                  </li>
			                  <li>
			                    <a href="#">
			                      <i class="fa fa-users text-red"></i> 5 new members joined
			                    </a>
			                  </li>
			                  <li>
			                    <a href="#">
			                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
			                    </a>
			                  </li>
			                  <li>
			                    <a href="#">
			                      <i class="fa fa-user text-red"></i> You changed your username
			                    </a>
			                  </li>
			                </ul>
			              </li>
			              <li class="footer"><a href="#">View all</a></li>
			            </ul>
			          </li>
			          <!-- Tasks: style can be found in dropdown.less -->
			          <li class="dropdown tasks-menu">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			              <i class="fa fa-flag-o"></i>
			              <span class="label label-danger">9</span>
			            </a>
			            <ul class="dropdown-menu">
			              <li class="header">You have 9 tasks</li>
			              <li>
			                <!-- inner menu: contains the actual data -->
			                <ul class="menu">
			                  <li><!-- Task item -->
			                    <a href="#">
			                      <h3>
			                        Design some buttons
			                        <small class="pull-right">20%</small>
			                      </h3>
			                      <div class="progress xs">
			                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
			                          <span class="sr-only">20% Complete</span>
			                        </div>
			                      </div>
			                    </a>
			                  </li>
			                  <!-- end task item -->
			                  <li><!-- Task item -->
			                    <a href="#">
			                      <h3>
			                        Create a nice theme
			                        <small class="pull-right">40%</small>
			                      </h3>
			                      <div class="progress xs">
			                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
			                          <span class="sr-only">40% Complete</span>
			                        </div>
			                      </div>
			                    </a>
			                  </li>
			                  <!-- end task item -->
			                  <li><!-- Task item -->
			                    <a href="#">
			                      <h3>
			                        Some task I need to do
			                        <small class="pull-right">60%</small>
			                      </h3>
			                      <div class="progress xs">
			                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
			                          <span class="sr-only">60% Complete</span>
			                        </div>
			                      </div>
			                    </a>
			                  </li>
			                  <!-- end task item -->
			                  <li><!-- Task item -->
			                    <a href="#">
			                      <h3>
			                        Make beautiful transitions
			                        <small class="pull-right">80%</small>
			                      </h3>
			                      <div class="progress xs">
			                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
			                          <span class="sr-only">80% Complete</span>
			                        </div>
			                      </div>
			                    </a>
			                  </li>
			                  <!-- end task item -->
			                </ul>
			              </li>
			              <li class="footer">
			                <a href="#">View all tasks</a>
			              </li>
			            </ul>
			          </li>
			          <!-- User Account: style can be found in dropdown.less -->
			          <li class="dropdown user user-menu">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			              <img alt="Imagen de usuario" src="<?php echo asset('backend/img/user2-160x160.jpg'); ?>" class="user-image">
			              <span class="hidden-xs"><?php echo e($authUser->house); ?></span>
			            </a>
			            <ul class="dropdown-menu">
			              <!-- User image -->
			              <li class="user-header">
			                <img alt="Imagen de usuario" src="<?php echo asset('backend/img/user2-160x160.jpg'); ?>" class="img-circle">
			
			                <p>
			                  Quinta - <?php echo e($authUser->house); ?>

			                  <small>&Uacute;ltima actualizaci&oacute;n <?php echo e($authUser->updated_at); ?></small>
			                </p>
			              </li>
			              <!-- Menu Footer-->
			              <li class="user-footer">
			                <div class="pull-left">
			                  <a href="<?php echo e(route('profile')); ?>" class="btn btn-default btn-flat">Perfil</a>
			                </div>
			                <div class="pull-right">
			                  <a href="#" class="btn btn-default btn-flat">Cerrar Sessi&oacute;n</a>
			                </div>
			              </li>
			            </ul>
			          </li>
			          <!-- Control Sidebar Toggle Button -->
			          <li>
			            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
			          </li>
			        </ul>
			      </div>
			    </nav>
			  </header>
	        <!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="pull-left image">
							<img alt="Imagen de usuario" src="<?php echo asset('backend/img/user2-160x160.jpg'); ?>" class="img-circle">
						</div>
						<div class="pull-left info">
							<p><?php echo e($authUser->house); ?></p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<!-- search form -->
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control"
								placeholder="Search..."> <span class="input-group-btn">
								<button type="submit" name="search" id="search-btn"
									class="btn btn-flat">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">MAIN NAVIGATION</li>
						<li class="active treeview">
							<?php echo HTML::decode(link_to_route('admin', '<i class="fa fa-dashboard"></i><span>Dashboard</span>')); ?>

						</li>
						<li class="treeview">
							<?php if($payments_count > 0): ?>
							<?php echo HTML::decode(link_to_route('admin.payments', '<i class="fa fa-files-o"></i> <span>Pagos</span> <span class="label label-primary pull-right">'.$payments_count.'</span>')); ?>

							<?php else: ?>
							<?php echo HTML::decode(link_to_route('admin.payments', '<i class="fa fa-files-o"></i> <span>Pagos</span>')); ?>

							<?php endif; ?>
							
							
						</li>
						<li>
							<?php echo HTML::decode(link_to_route('admin.users', '<i class="fa fa-dashboard"></i><span>Usuarios</span>')); ?>

						</li>
						<li>
							<?php echo HTML::decode(link_to_route('admin.specialfee', '<i class="fa fa-dashboard"></i><span>Cuotas Especiales</span>')); ?>

						</li>
						<!--
						<li class="treeview"><a href="#"> <i class="fa fa-laptop"></i> <span>UI
									Elements</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
							<ul class="treeview-menu">
								<li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i>
										General</a></li>
								<li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i>
										Icons</a></li>
								<li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i>
										Buttons</a></li>
								<li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i>
										Sliders</a></li>
								<li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i>
										Timeline</a></li>
								<li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i>
										Modals</a></li>
							</ul></li>
						<li class="treeview"><a href="#"> <i class="fa fa-edit"></i> <span>Forms</span>
								<i class="fa fa-angle-left pull-right"></i>
						</a>
							<ul class="treeview-menu">
								<li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i>
										General Elements</a></li>
								<li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i>
										Advanced Elements</a></li>
								<li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i>
										Editors</a></li>
							</ul></li>
						<li class="treeview"><a href="#"> <i class="fa fa-table"></i> <span>Tables</span>
								<i class="fa fa-angle-left pull-right"></i>
						</a>
							<ul class="treeview-menu">
								<li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>
										Simple tables</a></li>
								<li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>
										Data tables</a></li>
							</ul></li>
						<li><a href="pages/calendar.html"> <i class="fa fa-calendar"></i> <span>Calendar</span>
								<small class="label pull-right bg-red">3</small>
						</a></li>
						<li><a href="pages/mailbox/mailbox.html"> <i class="fa fa-envelope"></i>
								<span>Mailbox</span> <small class="label pull-right bg-yellow">12</small>
						</a></li>
						<li class="treeview"><a href="#"> <i class="fa fa-folder"></i> <span>Examples</span>
								<i class="fa fa-angle-left pull-right"></i>
						</a>
							<ul class="treeview-menu">
								<li><a href="pages/examples/invoice.html"><i
										class="fa fa-circle-o"></i> Invoice</a></li>
								<li><a href="pages/examples/profile.html"><i
										class="fa fa-circle-o"></i> Profile</a></li>
								<li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i>
										Login</a></li>
								<li><a href="pages/examples/register.html"><i
										class="fa fa-circle-o"></i> Register</a></li>
								<li><a href="pages/examples/lockscreen.html"><i
										class="fa fa-circle-o"></i> Lockscreen</a></li>
								<li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i>
										404 Error</a></li>
								<li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i>
										500 Error</a></li>
								<li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i>
										Blank Page</a></li>
								<li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i>
										Pace Page</a></li>
							</ul></li>
						<li class="treeview"><a href="#"> <i class="fa fa-share"></i> <span>Multilevel</span>
								<i class="fa fa-angle-left pull-right"></i>
						</a>
							<ul class="treeview-menu">
								<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Level One <i
										class="fa fa-angle-left pull-right"></i></a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
										<li><a href="#"><i class="fa fa-circle-o"></i> Level Two <i
												class="fa fa-angle-left pull-right"></i></a>
											<ul class="treeview-menu">
												<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
												<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
											</ul></li>
									</ul></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
							</ul></li>
						<li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
						!-->
						<li class="header">LABELS</li>
						<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
						<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
						<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
			<?php echo $__env->yieldContent('content'); ?>
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
					<b>Version</b> 2.3.2
				</div>
				<strong>Copyright &copy; 2016 Desarrollado por <a href="http://www.cyberia-server.com.ve" target="_blank">Cyberia LabTech</a></strong>.
			</footer>
		</div>
        <!-- jQuery 2.1.4 -->
		<?php echo Html::script('backend/js/plugins/jQuery/jQuery-2.1.4.min.js'); ?>

		<!-- jQuery UI 1.11.4 -->
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button);
		</script>
		<!-- Bootstrap 3.3.5 -->
		<?php echo Html::script('backend/js/bootstrap.min.js'); ?>

		<!-- daterangepicker -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
		<?php echo Html::script('backend/js/plugins/daterangepicker/daterangepicker.js'); ?>

		<!-- datepicker -->
		<?php echo Html::script('backend/js/plugins/datepicker/bootstrap-datepicker.js'); ?>

		<!-- Bootstrap WYSIHTML5 -->
		<?php echo Html::script('backend/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>

		<!-- Slimscroll -->
		<?php echo Html::script('backend/js/plugins/slimScroll/jquery.slimscroll.min.js'); ?>

		<!-- FastClick -->
		<?php echo Html::script('backend/js/plugins/fastclick/fastclick.js'); ?>

		<!-- AdminLTE App -->
		<?php echo Html::script('backend/js/app.min.js'); ?>

		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<?php echo Html::script('backend/js/dashboard.js'); ?>

		<!-- AdminLTE for demo purposes -->
		<?php echo Html::script('backend/js/demo.js'); ?>

    </body>
</html>