<html>
	<head>
		<title> Crear cuenta de usuario</title>
	</head>
	<link href="<?php echo base_url().'/public/css/bootstrap.min.css'; ?>" rel="stylesheet">
	
	<body>
		<form>
			<div class="form-group">
				<label for="textCedula">N° de Cedula</label>
			
				<input type="text" id="textCedula" name="textCedula" class="form-control" />
			</div>
						
			<div>
				<label for="textUser">Nombre de Usuario</label>
			
				<input type="text" id="textUser" name="textUser" class="form-control"  />
			</div>
			
			<div>
				<label for="textClv">Clave </label>
			
				<input type="text"  id="textClv" name="textClv"/>
			</div>
			
			<div>
				<label for="textValidar">Repetir Clave </label>
			
				<input type="text" id="textValidar" name="textValidar" />
			</div>
			
			<button type="submit">Crear Usuario</button>
		</form>
		
	</body>
</html