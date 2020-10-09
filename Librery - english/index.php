<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/cuadro.css">

<head>
	<title>Librery</title>
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="crud/mostrar.php">Books</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="/Librery">Spanish</a>
        </li>
    </ul>
    <form action="registrar.php" class="form-inline my-2 my-lg-0">
        <a href="login/login.php">Log in</a>
    </form>
  </div>
</nav>


<div class="container-fluid h-100">
    <div class="row h-100">
        <aside class="col-12 col-md-2 p-0 bg-dark ">
            <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
                <div class="collapse navbar-collapse align-items-start">
                    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link pl-0 text-nowrap" href="categorias.html"><i class="fa fa-bullseye fa-fw"></i> <span class="font-weight-bold">Categories</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#"></i> <span class="d-none d-md-inline">Stories</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#"></i> <span class="d-none d-md-inline">Terror</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#"></i> <span class="d-none d-md-inline">Science Fiction</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#"></i> <span class="d-none d-md-inline">Poetry</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#"></i> <span class="d-none d-md-inline">Novel</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#"></i> <span class="d-none d-md-inline">Realism</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#"></i> <span class="d-none d-md-inline">Comedy</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
        <main class="col offset-md-2 bg-faded py-3">
            <div class="contenedor">
				<img src="libros/logo.png" width="500">
				<hr class="border">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login"><center>
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      				<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
				</form></center>
			</div><br>

			<div class="contenedor">
				<h4 class="titulo">Most popular bookands</h4><br>


			<section class="container-fluid bg-dark">
				<div class="row">
					<div class="col-sm-4">
						<a href="Harry.php"><img src="libros/Harry.jpg" alt="Libro" width="100"></a>
					</div>
					<div class="col-sm-8">
						<h2><strong>Harry Potter</strong></h2>
						<h4>and the chamber of secrets</h4>
            <p>Author:</p>
            <p>J. K. Rowling</p>
					</div>
				</div>
        <br>
			</section>

			<section class="container-fluid bg-dark">
				<div class="row">
					<div class="col-sm-4">
						<a href="https://es.wikipedia.org/wiki/De_la_Tierra_a_la_Luna"><img src="libros/Luna.jpg" alt="Libro" width="100"></a>
					</div>
					<div class="col-sm-8">
						<h2><strong>From the earth</strong></h2>
						<h4>to the moon</h4>
            <p>Author:</p>
            <p>Julio Verne</p>
					</div>
				</div>
			</section>

        </main>
    </div>
</div>


</body>
</html>