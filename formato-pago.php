<?php
	include("class/funciones.php");
	$total 			= filter_input(INPUT_GET,'total',FILTER_SANITIZE_SPECIAL_CHARS);
	$description 	= filter_input(INPUT_GET,'description',FILTER_SANITIZE_SPECIAL_CHARS);
	$fchexp 		= filter_input(INPUT_GET,'fchexp',FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!DOCTYPE html>
<html>
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
	<!-- <link rel="stylesheet" href="css/superfish.css"> -->
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<!-- <link rel="stylesheet" href="css/cs-select.css"> -->
	<!-- <link rel="stylesheet" href="css/cs-skin-border.css"> -->

	<!-- Themify Icons -->
	<!-- <link rel="stylesheet" href="css/themify-icons.css"> -->
	<!-- Flat Icon -->
	<!-- <link rel="stylesheet" href="css/flaticon.css"> -->
	<!-- Icomoon -->
	<!-- <link rel="stylesheet" href="css/icomoon.css"> -->
	<!-- Flexslider  -->
	<!-- <link rel="stylesheet" href="css/flexslider.css"> -->
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.0/css/all.css">
	<!--Font awesome-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.0/css/all.css">
	<!--SweetAlert-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.min.css">

	<!-- Modernizr JS -->
	<!-- <script src="js/modernizr-2.6.2.min.js"></script> -->

	<style>
		/* If you like this, please check my blog at codedgar.com.ve */
		@import url('https://fonts.googleapis.com/css?family=Work+Sans');
		body{
			font-family: 'Work Sans', sans-serif;
			background: #00d2ff; 
			background: -webkit-linear-gradient(to right, #3a7bd5, #00d2ff); 
			background: linear-gradient(to right, #3a7bd5, #00d2ff); 
		}

		.card{
			background: #fff;
			border-radius: 14px;
			max-width: 550px;
			display: block;
			margin: auto;
			padding: 60px;
			padding-left: 50px;
			padding-right: 20px;
			box-shadow: 2px 10px 40px black;
			z-index: 99;
		}

		.logo-card{max-width:50px; margin-bottom:15px; margin-top: -19px;}

		label{display:flex; font-size:10px; color:#000; opacity:.4;}

		input{font-family: 'Work Sans', sans-serif;background:transparent; border:none; border-bottom:1px solid transparent; color:#dbdce0; transition: border-bottom .4s;}
		input:focus{border-bottom:1px solid #1abc9c; outline:none;}

		.cardnumber{display:block; font-size:20px; margin-bottom:8px; }

		.name{display:block; font-size:15px; max-width: 200px; float:left; margin-bottom:15px;}

		.toleft{float:left;}
		.ccv{width:50px; margin-top:-5px; font-size:15px;}

		.receipt{
			background: #dbdce0;
			border-radius: 4px;
			padding: 5%;
			padding-top: 300px;
			max-width: 695px;
			display: block;
			margin: auto;
			margin-top: -180px;
			z-index: -999;
			position: relative;
		}

		.col{width:50%; float:left;}
		.bought-item{background:#f5f5f5; padding:2px;}
		.bought-items{margin-top:-3px;}

		.cost{color:#3a7bd5;}
		.seller{color: #3a7bd5;}
		.description{font-size: 13px;}
		.price{font-size:12px;}
		.comprobe{text-align:center;}
		.proceed{
			position:absolute; 
			transform:translate(300px, 10px); 
			width:90px; 
			height:90px; 
			border-radius:50%; 
			background:#1abc9c; 
			border:none;color:white; 
			transition: box-shadow .2s, transform .4s; 
			cursor:pointer;
			margin-left: 150px;
			margin-top: 60px;
		}
		.proceed:active{outline:none; }
		.proceed:focus{outline:none;box-shadow: inset 0px 0px 5px white;}
		.sendicon{filter:invert(100%); padding-top:2px;}

		.container {
			margin-right: auto;
			margin-left: auto;
			padding-left: 20px;
			padding-right: 20px;
			margin-top: 115px;
		}

		@media (max-width: 600px){
			.proceed{
				transform:translate(250px, 10px);
				position: relative;
				right: 245px;
				top: 300px;
			}
			.card {
				background: #fff;
				border-radius: 14px;
				max-width: 550px;
				display: block;
				margin: auto;
				/* padding: 0px; */
				padding-left: 50px;
				padding-right: 20px;
				box-shadow: 2px 10px 40px black;
				z-index: 99;
			}
			.col{display:block; margin:auto; width:100%; text-align:center;}
		}

	</style>
	
</head>
<body>
	<div class="container">
		<div class="card">
			<form id="metodo-pago">
				<input type="hidden" name="total_pago" id="total_pago" value="<?php echo $total ?>">
				<input type="hidden" name="descripcion" id="descripcion" value="<?php echo $description ?>">
				<input type="hidden" name="fch_exp" id="fch_exp" value="<?php echo $fchexp; ?>">
				<input type="hidden" name="correo" id="correo" value="isaacpacheco.go@gmail.com" class="form-control" placeholder="Correo electronico">
				<button class="proceed pagar" id="boton-pago">
					<svg class="sendicon" width="24" height="24" viewBox="0 0 24 24">
						<path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
					</svg>
				</button>
				<img src="https://seeklogo.com/images/V/VISA-logo-62D5B26FE1-seeklogo.com.png" class="logo-card">
				<label>Numero de tarjeta:</label>
				<input type="text" class="input cardnumber"  placeholder="1234 5678 9101 1121" name="numero_tarjeta" id="numero_tarjeta" maxlength="16">
				<div class="row">
					<div class="col-lg-12">
						<label>Nombre Titular:</label>
						<input class="input name"  placeholder="Edgar Pérez" name="nombre_titular" id="nombre_titular">
					</div>
					<div class="col-lg-3">
						<label class="">CCV:</label>
						<input class="input  ccv" placeholder="321" name="cvv" id="cvv" value="" placeholder="CVV" maxlength="4" minlength="3">
					</div>
					<div class="col-lg-6">
						<label class="">Fecha vencimiento:</label>
						<div class="row">
							<div class="col-lg-3">
								<input type="text" name="mes_vencimiento" id="mes_vencimiento" value="" class="input ccv" placeholder="MES" maxlength="2">
							</div>
							<div class="col-lg-3">
								<input type="text" name="anio_vencimiento" id="anio_vencimiento" value="" class="input ccv" placeholder="AÑO" maxlength="2">
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="receipt">
			<div class="row">
				<div class="col-lg-6"><p>Costo:</p>
					<h2 class="cost">$<?php echo $desencriptar($total); ?> MXN</h2><br>
				</div>
				<div class="col-lg-6">
					<p>Descripcion :</p>
					<h3 class="bought-items"><?php echo $desencriptar($description); ?></h3>
				</div>
			</div>
		</div>
	</div>
	
	<!-- END fh5co-wrapper -->
	<!--Sweet Alert-->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<!-- <script src="js/hoverIntent.js"></script> -->
	<!-- <script src="js/superfish.js"></script> -->
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<!-- <script src="js/jquery.waypoints.min.js"></script> -->
	<!-- Counters -->
	<!-- <script src="js/jquery.countTo.js"></script> -->
	<!-- Stellar Parallax -->
	<!-- <script src="js/jquery.stellar.min.js"></script> -->
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<!-- <script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script> -->
	<!-- Flexslider -->
	<!-- <script src="js/jquery.flexslider-min.js"></script> -->

	<!-- <script src="js/custom.js"></script> -->
	
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
		$(".boton-link").on("click",function(){
			$('#boton-link').empty();
			$('#boton-link').prop('disabled',true);
			$('#boton-link').append('<i class="fas fa-spinner fa-spin"></i> Generando link...');
			$.ajax({
				type: "POST",
				url: "ajax/generar-link-pago.php",
				data: $('#metodo-pago').serialize(),
				cache: false,
				dataType: "JSON",
				success: function (response) {
					switch(response.respuesta){
						case "1":{
							Swal.fire({
								icon: 'success',
								title: 'Link generado',
								text: 'Gracias!'
							});
							var url = response.url;
							window.open(url, '_blank');
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
					$('#boton-link').empty();
					$('#boton-link').append('Abrir link');
					$('#boton-link').prop('disabled',false);
				}
			})
		})
	</script>

</body>
</html>