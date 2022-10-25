<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Aplicaci&oacute;n de Gesti&oacute;n de Servicios Bancarios</title>

		<meta name="description" content="Acceso en linea a la banca">
		<meta name="author" content="Diseño Aplicaciones Web">
		
		<link rel="stylesheet" href="<?php print(base_url(). '/public/css/bootstrap.min.css"'); ?>/>
		
		<style>
			.bg-gris {
				background-color:#e6e6e6 !important;
			}
			.bg-celeste { 
				background-color: #1CBFFD !important;
			}
		</style>
	</head>
	<body>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 m-2">
					<ul class="nav bg-gris">
						<li class="nav-item">
						<a class="nav-link active" href="#">Inicio</a>
						</li>
						<li class="nav-item">
						<a class="nav-link text-dark" href="#">Qui&eacute;nes Somos</a>
						</li>
						
						<li class="nav-item">
						<a class="nav-link" href="#">Banca Personas</a>
						</li>
						
						<li class="nav-item">
						<a class="nav-link" href="#">Canales de Atenci&oacute;n</a>
						</li>
						
						<li class="nav-item dropdown ml-md-auto">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Banca en Linea</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
												
					<?php 
						echo anchor('usuario/nuevo', 'Crear Usuario', ['class'=>'dropdown-item']);
						echo anchor('blinea', 'Banca Personas', ['class'=>'dropdown-item']);
					?>
						<a class="dropdown-item" href="#">Banca Empresarial</a> 
						<a class="dropdown-item" href="#">PYMES</a>
						
						</div>
						</li>
						
					</ul>
					<div class="carousel slide" id="carousel-594461">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel-594461" class="active"></li>
							<li data-slide-to="1" data-target="#carousel-594461"></li>
							<li data-slide-to="2" data-target="#carousel-594461"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" alt="Mis Finanzas" src="<?php echo base_url()."/public/resource/bn_01.jpg"; ?>">
								<div class="carousel-caption">
									<h4>
										Bienvenido a Credibank
									</h4>
									<p>
										Disponibilidad de tu efectivo cuando lo necesites
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Second" src="<?php echo base_url()."/public/resource/bn_02.jpg"; ?>">
								<div class="carousel-caption">
									<h4>
										Inspirados en Innovar junto a nuestros clientes
									</h4>
									<p>
										Soluciones con Credibank
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Third" src="<?php echo base_url()."/public/resource/bn_03.jpg"; ?>">
								<div class="carousel-caption">
									<h4>
										Estamos contigo donde estes
									</h4>
									<p>
										Comodidad, Agilidad, Facilidad
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Third" src="<?php echo base_url()."/public/resource/bn_04.jpg"; ?>">
								<div class="carousel-caption">
									<h4>
										En Credibank sabemos lo que necesitas
									</h4>
									<p>
										Te brindamos una asesoria totalmente personalizada para tus necesidades
									</p>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carousel-594461" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a>
						<a class="carousel-control-next" href="#carousel-594461" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 m-1">
					<h4>
						Te brindamos soluciones con un alto valor agregado, Ampliando tu horizonte
					</h4>
					<p> 
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img alt="Cuenta de Ahorros" src="<?php echo base_url().'/public/resource/ahorro.jpg'; ?>">
					<h5 class="m-3">
						Cuenta de Ahorro
					</h5>
					<p class="m-2">
						Es la cuenta de ahorro diseñada para los clientes que deseen ahorrar, ganar intereses y tener completa flexibilidad de su dinero.
					</p>
					
					<h6 class="m-3">Beneficios</h6>
					<ul>
						<li>Diseñada para personas naturales.</li>
						<li>Disponible en Córdobas, Dólares y Euros.</li>
						<li>Acumula Puntos Disfruta+ por realizar sus compras con su tarjeta de débito.</li>
						<li>Capitaliza intereses mensualmente.</li>
						<li>Tarjeta de Débito Visa Internacional.</li>
						<li>Puede unir sus Puntos generadas por la cuenta, con los Puntos generados por <br> otros productos como tarjeta de crédito.</li>
						<li>Te permite realizar compras en línea.</li>
						<li>Seguro antifraude</li>
						<li>Acceso a Banca en Línea, la plataforma electrónica que te permite realizar <br /> de forma cómoda, sencilla y segura.</li>
					</ul>
				</div>
				<div class="col-md-4">
					<img class="img-responsive" alt="Servicio de Tarjetas de Credito" src="<?php echo base_url().'/public/resource/tarjeta.jpg'; ?>">
					<h5 class="m-3">
						Tarjeta de Credito
					</h5>
					<p class="m-2">
						Descubra la tarjeta de crédito que se ajusta a sus necesidades. Aquí encontrarás una tarjeta para cada una de tus necesidades, que además te brindan los mejores beneficios por su uso y acceso permanente a grandes descuentos y promociones.
					</p>
					
					<p class="m-2">
						Comuníquese con nosotros, uno de nuestros asesores lo está esperando para brindarle la información que necesita.
					</p>
					
					<img class="img-thumbnail" alt="Atenci&oacute;n al Cliente" src="<?php echo base_url().'/public/resource/atencion.jpg' ?>"/>
				</div>
				<div class="col-md-4">
					<img alt="Bootstrap Image Preview" src="<?php echo base_url().'/public/resource/cambio.jpg'; ?>">
					<h5 class="m-3">
						Mesa de Cambio
					</h5>
					<p class="m-2">
						Brindamos el servicio de compra y venta de cualquier tipo de moneda extranjera a un tipo cambio competitivo según el monto que necesita para su transacción, brindando asesoría, servicio ágil y seguro.
					</p>
					
					<h6 class="m-3">Beneficios</h6>
					
					<ul>
						<li>Tipos de monedas: dólares de EE. UU., monedas regionales o monedas duras como Euros, Yenes, Libras Esterlinas, Francos Suizos y otros.</li>			
						<li>Cotizaciones y transacciones de monedas extranjeras spot (a hoy) o a futuro (forwards). Este mecanismo permite a exportadores e importadores mitigar el riesgo de pérdidas y/o maximizar sus ganancias ante cambios repentinos y futuros en el precio de las divisas en las que importan o exportan.
						</li>
					</ul>
				</div>
			</div>
			<div class="row m-3">
				<div class="col-md-4">

					<h5 class="m-2">Consejos Financieros</h5>
					<p class="m-2">
						Las finanzas sanas en el hogar empiezan con un presupuesto domestico. Hacer una lista de las necesidades diarias o mensuales le ayudará a ubicar en qué está malgastando el dinero y en qué aspectos puede reducir sus gastos.
					</p>
				</div>
				
				<div class="col-md-4">
					<h5 class="m-2">Unete a nuestra Red</h5>
					<p>Completa nuestro Programa de Aprendizaje Bancario y forma parte de nuestros clientes.</p>
					<p class="m-2">
						A través de nuestra red de ATMs, podés retirar efectivo de tus tarjetas de débito o crédito, imprimir mini estado de cuenta de tus últimas 10 transacciones, consultar tu saldo, cambiar tu PIN y depositar o retirar dinero usando el nuevo servicio “Código T-Envío Credibank”.
					</p>
				</div>
				
				<div class="col-md-4">
					<img alt="Respaldado por FOGADE" src="<?php echo base_url().'/public/resource/fogadelogo.png' ?>"/>
					
					<h5 class="m-2">Contacto</h5>
					<ul>
						<li>Tel.2244-6677</li>
						<li>Calle Principal Altamira, Junior Music 100 mts al sur 1c. Oeste.</li>
						<li>Edificio Credibank</li>
						<li>Managua, Nicaragua</li>
					</ul>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url() . '/public/js/jquery.min.js"'; ?>> </script>
		<script src="<?php echo base_url() . '/public/js/bootstrap.min.js"';?>> </script>
		<script src="js/scripts.js"> </script>
	</body>
</html>