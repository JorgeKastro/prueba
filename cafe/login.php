<!DOCTYPE html>
<!-- saved from url=(0047)https://colorlib.com/etc/lf/Login_v9/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Login V9</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v9/images/icons/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V9_files/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V9_files/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V9_files/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V9_files/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V9_files/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V9_files/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V9_files/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V9_files/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V9_files/util.css">
	<link rel="stylesheet" type="text/css" href="./Login V9_files/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<meta name="robots" content="noindex, follow">
</head>
<body>


<div class="container-login100" style="background-image: url('img/carousel-1.jpg');">
	<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
		<form class="login100-form validate-form" method="POST" action="validacion.php">
			<span class="login100-form-title p-b-37">
				Iniciar Sesión
			</span>

			<!-- Mostrar mensaje de error si el parámetro 'error' está presente en la URL -->
			<?php if (isset($_GET['error']) && $_GET['error'] == 'si') { ?>
				<div class="alert alert-danger" style="color: white; background-color: red; text-align: center;">
					<b>Datos incorrectos, Inténtalo nuevamente.</b>
				</div>
			<?php } ?>

			<!-- Campo de Usuario -->
			<div class="form-group">
				<input class="input100" type="email" name="username" placeholder="Ingrese Usuario / Correo" autofocus>
				<span class="focus-input100"></span>
			</div>
			
			<!-- Campo de Contraseña -->
			<div class="form-group">
				<input class="input100" type="password" name="pass" placeholder="Ingrese Contraseña">
				<span class="focus-input100"></span>
			</div>
			
			<!-- Botón para enviar el formulario -->
			<div class="container-login100-form-btn">
				<button class="login100-form-btn" type="submit">
					Ingresar
				</button>
			</div>

			<!-- Texto adicional para iniciar sesión con redes sociales -->
			<div class="text-center p-t-57 p-b-20">
				<span class="txt1">
					O inicia con
				</span>
			</div>

			<div class="flex-c p-b-112">
				<a href="https://facebook.com" class="login100-social-item" target="_blank">
					<i class="fa-brands fa-facebook-f" style="font-size: 20px;"></i>
				</a>
				
				<a href="https://google.com" class="login100-social-item" target="_blank">
					<img src="./Login V9_files/icon-google.png" alt="GOOGLE" style="width: 20px; height: 20px;">
				</a>
			</div>
		</form>
	</div>
</div>




	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="./Login V9_files/jquery-3.2.1.min.js.descarga"></script>
<!--===============================================================================================-->
	<script src="./Login V9_files/animsition.min.js.descarga"></script>
<!--===============================================================================================-->
	<script src="./Login V9_files/popper.js.descarga"></script>
	<script src="./Login V9_files/bootstrap.min.js.descarga"></script>
<!--===============================================================================================-->
	<script src="./Login V9_files/select2.min.js.descarga"></script>
<!--===============================================================================================-->
	<script src="./Login V9_files/moment.min.js.descarga"></script>
	<script src="./Login V9_files/daterangepicker.js.descarga"></script>
<!--===============================================================================================-->
	<script src="./Login V9_files/countdowntime.js.descarga"></script>
<!--===============================================================================================-->
	<script src="./Login V9_files/main.js.descarga"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async="" src="./Login V9_files/js"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>


</body></html>