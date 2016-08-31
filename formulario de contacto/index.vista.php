<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Contacto</title>
	<link rel="stylesheet" href="estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400italic' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>Mi formulario</h1>
	<div class="wrap">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" >	
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="">
				<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" value="">

				<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"></textarea>
			
					<?php  if (empty($errores)): ?>
						<div class="alert error">
							<?php  echo $errores; ?>
						</div>
					<?php elseif($enviado): ?>
							<div class="alert succes">
								<p>Enviado Correctamente</p>
						</div>
					<?php endif ?>	
			
				<input type="submit" name="submit" class="btn btn-primary" value="Enviar">
			</form>
	</div>
</body>
</html>