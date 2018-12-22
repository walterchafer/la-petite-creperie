<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Formulario de contacto</title>

	<!-- Inclusión de la hoja de estilos CSS -->
	<link rel="stylesheet" href="css/contacto.css">

</head>
<body>
<header>
	<hgroup>
		<h1>Formulario de contacto</h1>

	</hgroup>
</header>
<div id="contenedor">
	<div id="textoContacto">
		<h3>Contacto</h3>
		<form id="formulario" name="formContacto" method="post" action="process.php" >
			<label for="nombre">Nombre <font color="red">*</font>:</label>
			<input name="name" placeholder="Introduce tu hombre" class="required" /><br />

			<label for="apellidos">Apellido<font color="red">*</font>:</label>
			<input name="surname" placeholder="Introduce tu Apellido" class="required" /><br />

			<label for="telefono">Teléfono<font color="red">*</font>:</label>
			<input name="phone" placeholder="Telefono" /><br />

			<label for="mail">E-mail<font color="red">*</font>:</label>
			<input name="mail" placeholder="Dirección de Email" class="required" /><br />

			<label id="modif01" for="comentario">Comentario<font color="red">*</font> :</label>
			<textarea id="modif02" placeholder="Escribeme tu comentario aquí" name="comment"></textarea><br />

			<div id="aster" > * | Campos obligatorios</div>

			<input class="botonAcceder" type="submit" id="boton" value="Enviar" />
		</form>
	</div><!-- /textoContacto -->
</div><!-- /contenedor -->
<footer>
	<p>Desarrollado por <a href="http://www.dariobf.com" title="Diseño web Cantabria">DarioBF</a></p>
	<a href="">Licencia</a>
</footer>

<!-- Códigos de validación para el formulario -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/jquery.form.js"></script>
<!-- Script que llama a la validación del formulario -->
	<script>
		$(function(){
			$('#formulario').validate({
				submitHandler: function(form) {
				    $(form).ajaxSubmit({
					    url: 'process.php',
					    success: function() {

						    $('#textoContacto h3').hide();
						    $('#formulario').hide();
						    $('#textoContacto').append("<p class='thanks'>Gracias por contactar con nosotros.</p>")
					    }
				    });
			    }
			});
		});
	</script>
<!-- Fin códigos de validación del formulario -->
</body>
</html>
