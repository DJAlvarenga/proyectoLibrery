<?php
	try {
		$hostname = "localhost";
		$dbname = "First";
		$username = "postgres";
		$pw = "Fi2002";
		$db = new PDO('pgsql:host='.$hostname.';dbname='.$dbname.'', $username, $pw);
	} catch (PDOException $ex) {
		echo "Error al conectar a la base de datos: " . $ex->getMessage() . "\n";
		exit;
	}

?>