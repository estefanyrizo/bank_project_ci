<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Banca en Linea</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="Credibank">

    <link href="<?php echo base_url().'/public/css/bootstrap.min.css'; ?>" rel="stylesheet">    

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<img alt="Banca en linea img-fluid" src="<?php echo base_url() . '/public/resource/bank_online.jpg' ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h4>Hola </h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				   </button> <a class="navbar-brand" href="#">Navegar</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item">
							 <a class="nav-link" href="#">Mi Perfil</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="#">Mi Cuenta</a>
						</li>
						
						<li class="nav-item">
							 <a class="nav-link" href="#">Tarjetas de Credito</a>
						</li>
						
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="row">
	
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
			<form method="post" action="<?php echo base_url (). '/usuario/registro';?>">
				<div class="form-group">
					<label for="txtCedula">N° de Cedula</label>
					<input type="text" class="form-control" id="txtCedula" name="txtCedula"/>
				</div>
				
				<div class="form-group">
					<label for="txtNombres">Nombres</label>
					<input type="text" class="form-control" id="txtNombres" name="txtNombres"/>
				</div>
				
				<div class="form-group">
					<label for="txtApellido1">Primer Apellido</label>
					<input type="text" class="form-control" id="txtApellido1" name="txtApellido1"/>
				</div>
				
				<div class="form-group">
					<label for="txtApellido2">Segundo Apellido</label>
					<input type="text" class="form-control" id="txtApellido2" name="txtApellido2"/>
				</div>
				
				<div class="form-group">
					<label for="txtCorreo">Correo</label>
					<input type="email" class="form-control" id="txtCorreo" name="txtCorreo"/>
				</div>
				
				<div class="form-group">
					<label for="txtTelefono">Tel&eacute;fono</label>
					<input type="tel" class="form-control" id="txtTelefono" name="txtTelefono"/>
				</div>
				
				<div class="form-group">
					<label for="txtDireccion">Direcci&oacute;n</label>
					<input type="text" class="form-control" id="txtDireccion" name="txtDireccion"/>
				</div>
				
				<button type="submit" class="btn btn-primary">Registro</button>
			</form>
			
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-8">
			
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>

    <script src="<?php echo base_url(). '/public/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url().'/public/js/bootstrap.min.js' ?>"></script>
   
  </body>
</html>