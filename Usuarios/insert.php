<?php
	include_once('../conexion/conexion.php');
	$connect = new connect();
	$connection = $connect->connection();


	$cargo= $_POST['cargo'];
	$nombre= $_POST['nombre'];
	$cedula= $_POST['cedula'];
	$email= $_POST['email'];
	
	//empieza tratamiento de imagen
	$imagen= $_FILES['imagen']['tmp_name'];
	$imgContenido= addslashes(file_get_contents($imagen));
	
	
	$query= "INSERT INTO ususarios (CARID,USUNOMBRE,USUCEDULA,USUCORREO,USUIMAGEN) values(0,'$cargo','$nombre','$cedula','$email','$imgContenido')";
	$result= $connection->prepare($query);
	$result->execute();
	if ($result>0) {
		header('Location:Usuarios.php');
	}

	
 ?>
 