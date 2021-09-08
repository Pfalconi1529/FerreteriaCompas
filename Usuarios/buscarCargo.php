<?php 

	include_once "../conexion/conexion.php";
	$con= new connect();
	$conectar=$con->connection();
	$consulta= "SELECT * FROM cargo";
	$resultado= $conectar->prepare($consulta);
	$resultado->execute();
	$data = $resultado->fetchAll(PDO::FETCH_ASSOC);
	$datos = json_encode($data);//con json encode obtenemos todos los datos de la consulta 
	echo $datos;
	$connection = null;


 ?>