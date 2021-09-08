<?php 
	include_once "../conexion/conexion.php";//incluimos la clase
	$connect = new connect();
	$connection = $connect->connection();


	$nombre = $_POST['nombre'];
	$cedula = $_POST['cedula'];
	$email = $_POST['email'];
	$imagen = $_POST['imagen'];



	$query = "INSERT INTO usuarios (carId,usuNombre, usuCedula,usuCorreo,usuImagen) VALUES ('$nombre','$cedula','$email','$imagen') ";
	$result = $connection->prepare($query);
	$result->execute();

 ?>