<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/mycss.css">
	<link rel="stylesheet" type="text/css" href="mylogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="mylogin/css/main.css">
<!--===============================================================================================-->

<!--========================================Login Propertis===========================================-->	

</head>
<body class="animsition">
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index">
							<img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="/">Home</a>
								</li>

								<li>
									<a href="gallery">Gallery</a>
								</li>

								<li>
									<a href="about">About</a>
								</li>
								
								<li>
									<a href="contact">Contact</a>
                                </li>
 
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20 circle">
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
					</div>
					

					<div class="wrap_menu p-l-45 p-l-0-xl">
							<nav class="menu">
								<ul class="main_menu">
									<!-- Authentication Links -->
									@guest
									<li class="nav-item">
										<a class="nav-link" href="login1">Iniciar sesion</a>
									</li>
									@else
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											{{ $user->name }} <span class="caret"></span>
										</a>
		
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('logout') }}"
											   onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>
		
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
										</div>
									</li>
								@endguest
								</ul>
							</nav>		
					</div>

					<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="/" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="gallery" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="about" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="contact" class="txt19">Contact</a>
			</li>

			<li class="t-center m-b-13">
				<a href="login" class="txt19">Login</a>
			</li>
		</ul>
	</aside>

	<!-- Login -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<div class="limiter">
							<div class="container-login50 center">
								<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
									<form class="login100-form validate-form flex-sb flex-w">
										<span class="login100-form-title p-b-32 t-center" method="POST" action="login1">
										@csrf
										Login
										</span>
					
										<span class="txt1 p-b-11">
											Usuario
										</span>
										<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
												<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

												@if ($errors->has('email'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('email') }}</strong>
													</span>
												@endif
										</div>
										
										<span class="txt1 p-b-11">
											Contraseña
										</span>
										<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
												<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

												@if ($errors->has('password'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('password') }}</strong>
													</span>
												@endif
										</div>
										
										<div class="flex-sb-m w-full p-b-48">
											<div class="contact100-form-checkbox">
												<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
												<label class="label-checkbox100" for="ckb1">
													Recordar Contraseña
												</label>
											</div>
					
											<div>
												<a href="#" class="txt3">
													¿Se olvido la Contraseña ?
												</a>
											</div>
										</div>
					
										<div class="container-login100-form-btn">
											<button class="login100-form-btn">
												Ingresar
											</button>
										</div>
					
									</form>
								</div>
							</div>
						</div>
						
					
						<div id="dropDownSelect1"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
    
	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contactanos
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							Jr. Chilca 135, Villa Maria del Triunfo
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+51) 998 455 484
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							franco_pacori@hotmail.com
						</li>
					</ul>

					<!-- - -->
					<h4 class="txt13 m-b-32">
						Horarios de Atencion
					</h4>

					<ul>
						<li class="txt14">
							08:30 AM - 08:30 PM
						</li>

						<li class="txt14">
							Lunes a Viernes
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2019 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

    

</body>
</html>
