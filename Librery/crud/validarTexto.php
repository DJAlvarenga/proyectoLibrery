<?php
	if(!isset($_POST['nombre']) || strlen(trim($_POST['nombre'])) == 0)
	{
		die('El campo es vacio'); //aquí lo personalizas
	}

	if(!isset($_POST['autor']) || strlen(trim($_POST['autor'])) == 0)
	{
		die('El campo es vacio'); //aquí lo personalizas
	}

	if(!isset($_POST['anio_edicion']) || strlen(trim($_POST['anio_edicion'])) == 0)
	{
		die('El campo es vacio'); //aquí lo personalizas
	}

	if(!isset($_POST['genero']) || strlen(trim($_POST['genero'])) == 0)
	{
		die('El campo es vacio'); //aquí lo personalizas
	}

	if(!isset($_POST['descripcion']) || strlen(trim($_POST['descripcion'])) == 0)
	{
		die('El campo es vacio'); //aquí lo personalizas
	}

?>