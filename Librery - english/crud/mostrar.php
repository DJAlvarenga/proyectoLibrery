<?php
//incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro= new Libro();
//obtiene todos los libros con el método mostrar de la clase crud
$listaLibros=$crud->mostrar();
?>

<html lang="es" xml:lang="es">
<head>
	<title>Book list</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="title" content="Proyecta Bit - Listado de foto"/>
	<meta name="description" content="Video tutorial de listado de fotos"/>
	<meta name="author" content="Proyecta Bit - Luis Centeno"/>
	<link rel="stylesheet" href="/Librery/camara/custom/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Librery/camara/custom/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="/Librery/camara/custom/css/custom.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Librery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/Librery - english">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Librery - english/crud/mostrar.php">Books</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="/Librery">Spanish</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <a href="/Librery - english/login/login.php">Log in</a>
    </form>
  </div>
</nav>

	<div class="container">
		<div class="row-fluid">
			<h1 class="text-center mt-3">Book list</h1>
			<div class="col-lg-12">
				<p>Welcome here you can review the list of the form entry.</p>
				<a class="btn btn-success btn-sm float-right" type="button" href="ingresar.php">Register</a><br><br>
				<div class="row">
					<div class="card-body pad table-responsive">
						<div class="row">
							<div class="col-12">
								<div class="table-responsive">
									<table id="tabla" class="table table-striped table-hover table-bordered" width="100%">
										<thead>
											<head>
												<td>Title</td>
												<td>Author</td>
												<td>Edition</td>
												<td>Categorie</td>
												<td>Details</td>
												<td>Update</td>
												<td>Delete</td>
											</head>
											<body>
												<?php foreach ($listaLibros as $libro) {?>
												<tr>
													<td><?php echo $libro->getNombre() ?></td>
													<td><?php echo $libro->getAutor() ?></td>
													<td><?php echo $libro->getAnio_edicion()?></td>
													<td><?php echo $libro->getGenero()?></td>
													<td><a href="detalles.php?id=<?php echo $libro->getId()?>&accion=a">Details</a></td>
													<td><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Update</a> </td>
													<td><a href="administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Delete</a>   </td>
												</tr>
												<?php }?>
											</body>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" id="modalfoto">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">VISUALIZAR FOTO</h4>
				</div>
				<div class="modal-body">
					<div id="verfotomodal"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"> Cerrar</button>
				</div>
			</div>
		</div>
	</div>


	<script src="custom/js/jquery.min.js"></script>
	<script src="custom/js/bootstrap.min.js"></script>
	<script src="custom/js/jquery.datatables.min.js"></script>
	<script src="custom/js/dataTables.bootstrap4.min.js"></script>
	<script src="custom/app/lista.js"></script>

</body>
</html>