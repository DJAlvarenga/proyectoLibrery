<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudLibro{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($libro){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO books values(NULL,:nombre,:autor,:anio_edicion,:genero,:descripcion)');
			$insert->bindValue('nombre',$libro->getNombre());
			$insert->bindValue('autor',$libro->getAutor());
			$insert->bindValue('anio_edicion',$libro->getAnio_edicion());
			$insert->bindValue('genero',$libro->getGenero());
			$insert->bindValue('descripcion',$libro->getDescripcion());
			$insert->execute();
 
		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM books');
 
			foreach($select->fetchAll() as $libro){
				$myLibro= new Libro();
				$myLibro->setId($libro['id']);
				$myLibro->setNombre($libro['nombre']);
				$myLibro->setAutor($libro['autor']);
				$myLibro->setAnio_edicion($libro['anio_edicion']);
				$myLibro->setGenero($libro['genero']);
				$myLibro->setDescripcion($libro['descripcion']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}
 
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM books WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM books WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$libro=$select->fetch();
			$myLibro= new Libro();
			$myLibro->setId($libro['id']);
			$myLibro->setNombre($libro['nombre']);
			$myLibro->setAutor($libro['autor']);
			$myLibro->setAnio_edicion($libro['anio_edicion']);
			$myLibro->setGenero($libro['genero']);
			$myLibro->setDescripcion($libro['descripcion']);
			return $myLibro;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE books SET nombre=:nombre, autor=:autor, anio_edicion=:anio, genero=:genero, descripcion=:descripcion  WHERE ID=:id');
			$actualizar->bindValue('id',$libro->getId());
			$actualizar->bindValue('nombre',$libro->getNombre());
			$actualizar->bindValue('autor',$libro->getAutor());
			$actualizar->bindValue('anio',$libro->getAnio_edicion());
			$actualizar->bindValue('genero',$libro->getGenero());
			$actualizar->bindValue('descripcion',$libro->getDescripcion());
			$actualizar->execute();
		}
	}
?>