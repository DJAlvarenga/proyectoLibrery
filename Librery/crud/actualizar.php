<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_libro.php');
	require_once('libro.php');
	$crud= new CrudLibro();
	$libro=new Libro();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerLibro($_GET['id']);

?>
<html>
<head>
	<title>Actualizar Libro</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<title>Registro de libros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Proyecta Bit - Formulario y foto"/>
    <meta name="description" content="Video tutorial de captura de foto por camara y registro de datos en base de datos"/>
    <meta name="author" content="Proyecta Bit - Luis Centeno"/>
    <link rel="stylesheet" href="/Librery/camara/custom/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Librery/camara/custom/css/sweetalert.css">
	<link rel="stylesheet" href="/Librery/camara/custom/css/custom.css">

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Librery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/Librery">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Libros</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="/Librery - english">Ingles</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <a href="/Librery/login/login.php">Iniciar sesion</a>
    </form>
  </div>
</nav>
	
	<div class="container">
		<div class="row-fluid">
			<h1 class="text-center mt-3">Acualizar el libro</h1>
				<div class="col-lg-12">
					<br><br>
					<form action='administrar_libro.php' method='post'>
						<div class="row">
							<div class="col-lg-6">
									<div class="form-group row">
										<input type='hidden' name='id' value='<?php echo $libro->getId()?>'>
										<label class="col-sm-3 col-form-label">Nombre libro:</label>
										<div class="col-sm-9"><input type='text' class="form-control form-control-sm" name='nombre' value='<?php echo $libro->getNombre()?>'></div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Autor:</label>
										<div class="col-sm-9"><input type='text' class="form-control form-control-sm" name='autor' value='<?php echo $libro->getAutor()?>'></div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Fecha Edición:</label>
										<div class="col-sm-9"><input type='date' class="form-control form-control-sm" name='edicion' value='<?php echo $libro->getAnio_edicion() ?>'></div>
									</div>
									<div class="form-group row">
								  		<label class="col-sm-3 col-form-label">Genero principal:</label>
								  		<div class="col-sm-9">
								  			<select class="form-control form-control-sm" name='genero' value='<?php echo $libro->getGenero() ?>'>
								  				<option>Otro...</option>
								  				<option>Cuentos</option>
								  				<option>Terror</option>
								  				<option>Ciencia Ficcion</option>
								  				<option>Poesia</option>
								  				<option>Novela</option>
								  				<option>Realismo</option>
								  				<option>Comedia</option>
								  			</select>
								  		</div>
								  	</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Descripción:</label>
										<div class="col-sm-9"><textarea class="form-control" rows="3" name='descripcion' value='<?php echo $libro->getDescripcion()?>'></textarea></div>
									</div>
									<input type='hidden' name='actualizar' value='actualizar'>
								<input type='submit' class="btn btn-primary btn-sm" value='Guardar'>
								<a href="index.php">Volver</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>