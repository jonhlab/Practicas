<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>


</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="POST">

			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php if (!$enviado && isset($nombre)) echo $nombre ?>">

			<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php if (!$enviado && isset($correo)) echo $correo ?>">

			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if (!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores;  ?>
				</div>
			<?php elseif($enviado):?>
				<div class="alert succes">
					<p>Enviado Correctamente</p>
				</div>
			<?php endif	?>
			
			<!-- <div class="alert error">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicingelit. Ad.</p>
			</div>
			<div class="alert succes">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicingelit. Ad.</p>
			</div>
 -->

			<input type="submit" name="submit" class="btn btn-success" value="Enviar Correo">
		</form>

	</div>
</body>
</html>