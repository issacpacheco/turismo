<?php
	include("class/funciones.php");
	$total 			= filter_input(INPUT_GET,'total',FILTER_SANITIZE_SPECIAL_CHARS);
	$description 	= filter_input(INPUT_GET,'description',FILTER_SANITIZE_SPECIAL_CHARS);
	$fchexp 		= filter_input(INPUT_GET,'fchexp',FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Premier Travel | Pago</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="tripspremier" />
	<meta name="keywords" content="Hoteles, resevaciones, viajes, turismo, cancun, riviera maya, yucatan, viajes, booking" />
	<meta name="author" content="tripspremier" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io//favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io//favicon-16x16.png">
	<link rel="manifest" href="images/favicon_io/site.webmanifest">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.0/css/all.css">
	<!--Font awesome-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.0/css/all.css">
	<!--SweetAlert-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.min.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	<!---
	<script src="js/respond.min.js"></script>
	--->

	<style>
		#fh5co-blog-section .blog-grid {
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
			width: 100%;
			height: 485px;
			position: relative;
		}
		#fh5co-logo {
			font-size: 0px;
			text-transform: uppercase;
			font-weight: 300;
			float: left;
			margin-bottom: 0;
			margin-top: 1.4em;
		}
		#fh5co-header-section {
			background: transparent;
			padding: 0;
			width: 100%;
			background-color: rgba(0,0,0,0.3);
		}
		.margin-div {
			margin-top: 30px;
			margin-left: 120px;
			margin-bottom: 10px;
		}

		.resumen{
			color: #fff;
		}

		.resumen p,h1{
			color: #fff;
		}
		.resumen-pago{
			background-color: tomato;
			margin: 0px 0px 0px 10px;
			width: 49%;
		}
		.botones-pago{
			margin-left: 30rem;
			margin-right: -20rem;
			margin-top: 2rem;
		}
		@media only screen and (max-width: 375px)  {
			#fh5co-blog-section .blog-grid {
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center center;
				width: 100%;
				height: 175px;
				position: relative;
			}
			.margin-div {
				margin: 10px;
				margin-top: 20px;
				margin-left: 10px;
				margin-bottom: 0px;
			}
			.resumen-pago{
				background-color: tomato;
				margin: auto;
    			width: 100%;
			}
			.botones-pago{
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
			}
		}
		@media only screen and (min-width: 376px) and (max-width: 425px){
			#fh5co-blog-section .blog-grid {
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center center;
				width: 100%;
				height: 200px;
				position: relative;
			}
			.margin-div {
				margin: 10px;
				margin-top: 20px;
				margin-left: 10px;
				margin-bottom: 0px;
			}
			.resumen-pago{
				background-color: tomato;
				margin: auto;
    			width: 100%;
			}
			.botones-pago{
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				width: 100%;
			}
		}
		@media only screen and (min-width: 426px) and (max-width: 768px){
			#fh5co-blog-section .blog-grid {
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center center;
				width: 100%;
				height: 380px;
				position: relative;
			}
			.margin-div {
				margin: 10px;
				margin-top: 20px;
				margin-left: 10px;
				margin-bottom: 0px;
			}
		}
		@media only screen and (min-width: 769px) and (max-width: 1024px){
			#fh5co-blog-section .blog-grid {
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center center;
				width: 100%;
				height: 247px;
				position: relative;
			}
			.margin-div {
				margin: 10px;
				margin-top: 20px;
				margin-left: 10px;
				margin-bottom: 0px;
			}
		}
		@media only screen and (min-width: 1025px) and (max-width: 1440px){
			#fh5co-blog-section .blog-grid {
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center center;
				width: 100%;
				height: 355px;
				position: relative;
			}
			.margin-div {
				margin: 10px;
				margin-top: 20px;
				margin-left: 10px;
				margin-bottom: 0px;
			}
		}
		/* @media only screen and (min-width: 1441px) and (max-width: 2560px){
			#fh5co-blog-section .blog-grid {
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center center;
				width: 100%;
				height: 480px;
				position: relative;
			}
		} */
	</style>
	
</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h6 id="fh5co-logo"><img src="images/logo.png" alt="" style="width: 25%;"></h6>
					<!-- <h1 id="fh5co-logo"><a href="index.html">Trips Premier</a></h1> -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="index.html">Inicio</a></li>
							<li><a href="paquetes.html">Paquetes</a></li>
							<li><a href="services.html">Nosotros</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/metodo-pago.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">GRACIAS POR CONFIAR EN NOSOTROS</h1>
						<div id="fh5co-counter-section" class="fh5co-counters">
							<div class="container">
								<div class="row">
									<div class="col-md-3 text-center">
										<p class="fh5co-counter js-counter" data-from="0" data-to="989" data-speed="5000" data-refresh-interval="50"></p>
										<p class="fh5co-counter-label">Clientes satisfechos</p>
									</div>
									<div class="col-md-3 text-center">
										<p class="fh5co-counter js-counter" data-from="0" data-to="5487" data-speed="5000" data-refresh-interval="50"></p>
										<p class="fh5co-counter-label">Hoteles disponibles</p>
									</div>
									<div class="col-md-3 text-center">
										<p class="fh5co-counter js-counter" data-from="0" data-to="378" data-speed="5000" data-refresh-interval="50"></p>
										<p class="fh5co-counter-label">Transacciones satisfactorias</p>
									</div>
									<div class="col-md-3 text-center">
										<p class="fh5co-counter js-counter" data-from="0" data-to="200" data-speed="5000" data-refresh-interval="50"></p>
										<p class="fh5co-counter-label">Reseñas y Opiniones</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="" id="fh5co-blog-section">
		<div class="container">
			<div class="row">				
				<div class="col-lg-6">
					<form id="metodo-pago">
						<input type="hidden" name="total_pago" id="total_pago" value="<?php echo $total ?>">
						<input type="hidden" name="descripcion" id="descripcion" value="<?php echo $description ?>">
						<input type="hidden" name="fch_exp" id="fch_exp" value="<?php echo $fchexp; ?>">
						<div class="row">
							<div class="row mb-3">
								<div class="col-sm-12">
									<label class="text-right">NOMBRE DEL TITULAR</label>
									<input type="text" name="nombre_titular" id="nombre_titular" class="form-control" value="" placeholder="Escriba el nombre como esta en su tarjeta">
								</div>
								<div class="col-sm-12">
									<label>NUMERO DE TARJETA</label>
									<input type="text" name="numero_tarjeta" id="numero_tarjeta" class="form-control" value="" placeholder="Escriba los 16 digitos de su tarjeta" maxlength="16" minlength="16">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-8">
									<label>FECHA DE VENCIMIENTO</label>
									<div class="row">
										<div class="col-lg-6">
											<input type="text" class="form-control" name="mes_vencimiento" id="mes_vencimiento" placeholder="MM" maxlength="2" minlength="2">
										</div>
										<div class="col-lg-6">
											<input type="text" class="form-control" name="anio_vencimiento" id="anio_vencimiento" placeholder="YY" maxlength="2" minlength="2">
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<label>CVV</label>
									<input type="text" name="cvv" id="cvv" class="form-control" value="" placeholder="CVV" maxlength="4" minlength="3">
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-lg-12">
									<label>Correo (donde te enviaremos tu voucher de pago)</label>
									<input type="email" name="correo" id="correo" value="" class="form-control" placeholder="Correo electronico">
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="row mb-3">
								<div class="col-lg-2">
									<button type="button" class="btn btn-danger pagar" id="boton-pago">Pagar</button>
								</div>
								<div class="col-lg-2">
									<button type="button" class="btn btn-info">Generar link de pago</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-6 resumen-pago">
					<div class="card-columns wrap resumen">
						<h1 class="text-center">Resumen de compra</h1>
						<div class="row">
							<div class="col-lg-12">
								<label class="resumen">DESCRIPCION DE PAGO</label>
								<p class=""><?php echo $desencriptar($description); ?></p>
							</div>
							<div class="col-lg-12">
								<label class="resumen">MONTO A PAGAR</label>
								<h1 class="">$<?php echo $desencriptar($total); ?> MXN</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap">
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</div>
	

	<div id="fh5co-blog-section">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>Nuestras promociones</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 margin-div">
				<img src="images/image-1.jpg" class="img-fluid rounded-top" alt="" style="    max-width: 100%;">
			</div>
			<div class="col-md-3 margin-div">
				<img src="images/image-2.jpg" class="img-fluid rounded-top" alt="" style="    max-width: 100%;">
			</div>
			<div class="col-md-3 margin-div">
				<img src="images/image-3.jpg" class="img-fluid rounded-top" alt="" style="    max-width: 100%;">
			</div>
			<div class="col-md-3 margin-div">
				<img src="images/image-4.jpg" class="img-fluid rounded-top" alt="" style="    max-width: 100%;">
			</div>
			<div class="col-md-3 margin-div">
				<img src="images/image-5.jpg" class="img-fluid rounded-top" alt="" style="    max-width: 100%;">
			</div>
			<div class="col-md-3 margin-div">
				<img src="images/image-6.jpg" class="img-fluid rounded-top" alt="" style="    max-width: 100%;">
			</div>
		</div>
	</div>

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2019 Trips Premier <br>
						Desarrollado por MKT Solutions <a href="" target="_blank">MKT Solution</a></small></p>
						<br>
						<p>
							<small>Contactanos <br>
								Correo: <i class="fal fa-envelope"></i><a href="" target="_blank"> ventas@tripspremier.com</a>
								<br>
								Telefono: <i class="fal fa-phone-alt"></i> <a href="" target="_blank">999 513 5811</a>
								<br>
								Direccion: <i class="fal fa-map-marked-alt"></i> <a href="" target="_blank">MKT Solution</a>
							</small>
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Compañia</h3>
							<ul class="link">
								<li><a href="#">Nosotros</a></li>
								<li><a href="#">Paquetes</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Hoteles en convenio</h3>
							<ul class="link">
								<li><a href="#">Hotel Francés</a></li>
								<li><a href="#">Marriot</a></li>
								<li><a href="#">Park Royal Beach</a></li>
								<li><a href="#">Dreams Tulum Resort and Spa</a></li>
								<li><a href="#">Iberostar Grand Paraiso</a></li>
								<li><a href="#">Courtyard</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Suscribete</h3>
							<p>Recibe en tu correo nuestras promociones del mes, suscribete con nosotros</p>
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Correo electronico" id="email">
									<input type="submit" id="submit" value="Enviar">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="#"><i class="icon-twitter-with-circle"></i></a>
							<a href="#"><i class="icon-facebook-with-circle"></i></a>
							<a href="#"><i class="icon-instagram-with-circle"></i></a>
							<a href="#"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	<!--Sweet Alert-->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/custom.js"></script>}
	
	<script>
		$(".pagar").on("click",function(){
			$('#boton-pago').empty();
			$('#boton-pago').prop('disabled',true);
			$('#boton-pago').append('<i class="fas fa-spinner fa-spin"></i> Pagando...');
			$.ajax({
				type: "POST",
				url: "ajax/generar-token.php",
				data: $('#metodo-pago').serialize(),
				cache: false,
				dataType: "JSON",
				success: function (response) {
					switch(response.respuesta){
						case "1":{
							Swal.fire({
								icon: 'success',
								title: 'El pago fue un exito',
								text: 'Gracias por su pago!'
							});
							break;
						}
						case "2":{
							Swal.fire({
								icon: 'error',
								title: 'Algo sucedio',
								text: response.mensaje
							});
							break;
						}
						default:
						{
							//Error
							Swal.fire({
								icon: 'error',
								title: 'Oops...',
								text: 'Ocurrío un error, por favor intente de nuevo.',
							});
							break;
						}
					}
					$('#boton-pago').empty();
					$('#boton-pago').append('Pagar');
					$('#boton-pago').prop('disabled',false);
				}
			})
		});
		
	</script>

</body>
</html>