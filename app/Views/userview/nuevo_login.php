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
			
			<form method="post" action="<?php echo base_url (). '/login/crear';?>">
				<div class="form-group">
					<label for="txtCedula">N° de Cedula</label>
					<input type="text" value="<?php echo $cedula; ?>" class="form-control" id="txtCedula" name="txtCedula" readonly/>
				</div>
				
				<div class="form-group">
					<label for="txtnick">Nombre de Usuario</label>
					<input type="text" class="form-control" id="txtnick" name="txtnick"/>
				</div>
				
				<div class="form-group">
					<label for="txtClave">Definir clave</label>
					<input type="password" class="form-control" id="txtClave" name="txtClave"/>
				</div>
				
				<div class="form-group">
					<label for="txtValidarClv">Repetir Clave</label>
					<input type="password" class="form-control" id="txtValidarClv" name="txtValidarClv"/>
				</div>
				
				<div class="form-group">					
					<input type="hidden" value="<?php echo $id; ?>" name="idClte"/>
				</div>
				
				<button type="submit" class="btn btn-primary">Crear Usuario</button>
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