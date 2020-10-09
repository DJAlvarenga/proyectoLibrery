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
	<div class="container">
		<div class="row-fluid">
			<h1 class="text-center mt-3">Detalles del libro</h1>
				<div class="col-lg-12">
					<center><p>Bienvenidos a los detalles del libros, aqui puedes ver los detalles más relevantes del libro seleccionado</p><br><br></center>
					<form action='administrar_libro.php' method='post'>
						<div class="row">
							<div class="col-lg-6">
									<div class="form-group row">
										<input type='hidden' name='id' value='<?php echo $libro->getId()?>'>
										<label class="col-sm-3 col-form-label">Nombre libro:</label>
										<div class="col-sm-9"><?php echo $libro->getNombre()?></div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Autor:</label>
										<div class="col-sm-9"><?php echo $libro->getAutor()?></div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Fecha Edición:</label>
										<div class="col-sm-9"><?php echo $libro->getAnio_edicion() ?></div>
									</div>
									<div class="form-group row">
								  		<label class="col-sm-3 col-form-label">Genero principal:</label>
								  		<div class="col-sm-9">
								  			<?php echo $libro->getGenero() ?>
								  		</div>
								  	</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Descripción:</label>
										<div class="col-sm-9"><?php echo $libro->getDescripcion() ?></div>
									</div>
									<input type='hidden' name='detalles' value'detalles'>
									<a href="index.php">Volver</a>
								<a href="index.php">Prestar</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>