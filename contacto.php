<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">

	<!-- Inclusión de la hoja de estilos CSS -->
	<!--<link rel="stylesheet" href="css/contacto.css">-->
	<link rel="stylesheet" href="css/form.css">

</head>
<body>
<header>
	<hgroup>
		<br>
		<h1 class="title is-3">Contacto</h1><br>

	</hgroup>
</header>
<div id="contenedor" class="padre">
	<div id="textoContacto" class="contenido">

		<form id="formulario" name="formContacto" method="post" action="process.php">
			<div class="field is-horizontal has-addons-centered">
				<div class="field-label is-normal">
			<label for="nombre" class="label">Nombre <font color="red">*</font>:</label>
		</div>

		<div class="field-body">
			<div class="field">
				<p class="control is-expanded has-icons-left">
			<input class="input is-info" name="name" placeholder="Nombre" class="required" /></br>
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
	</p>
	</div>

	<div class="field">
		<p class="control is-expanded has-icons-left has-icons-right">
			<input class="input is-info" name="surname" placeholder="Apellido" class="required" /><br />
			<span class="icon is-small is-left">
	      <i class="fas fa-user"></i>
	    </span>
	    <span class="icon is-small is-right">
	      <i class="fas fa-check"></i>
	    </span>
		</p>
	  </div>
	</div>
</div>



			<div class="field is-horizontal has-addons-centered">
				<div class="field-label">
					<label for="telefono" class="label">Teléfono <font color="red">*</font>:</label>
				</div>
				<div class="field-body">
			    <div class="field">
			      <p class="control is-expanded has-icons-left">
			<input class="input is-info" name="phone" placeholder="Telefono" class="required" />
			<span class="icon is-small is-left">
	      <i class="fas fa-phone"></i>
	    </span>
	    <span class="icon is-small is-right">
	      <i class="fas fa-check"></i>
	    </span>
		</p>
	  </div>
	</div>
</div>

<div class="field is-horizontal has-addons-centered">
	<div class="field-label">
			<label for="mail" class="label">E-mail <font color="red">*</font>:</label>
		</div>
		<div class="field-body">
			<div class="field">
				<p class="control is-expanded has-icons-left">
			<input class="input is-info" name="mail" placeholder="Dirección de Email" class="required" /><br />
			<span class="icon is-small is-left">
	      <i class="fas fa-at"></i>
	    </span>
	    <span class="icon is-small is-right">
	      <i class="fas fa-check"></i>
	    </span>
		</p>
	  </div>
	</div>
</div>

<div class="field is-horizontal">
	<div class="field-label is-normal">
			<label class="label" id="modif01" for="comentario">Pregunta <font color="red">*</font>:</label>
		</div>
		<div class="field-body">
			<div class="field">
				<div class="control">
			<textarea class="textarea" id="modif02" placeholder="Escribeme tu pregunta/comentario aquí" name="comment"></textarea><br />
		</div>
		</div>
		</div>
		</div>




			<div id="aster" ><font color="red">*</font> Campos obligatorios</div></br>

			<input class="button is-link is-outlined" type="submit" id="boton" value="Enviar mensaje" />
		</form>
	</div><!-- /textoContacto -->
</div><!-- /contenedor -->
<footer>
	<!--<p></p>
	-->
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
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>
</html>
