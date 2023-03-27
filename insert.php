<?php
	include("conexion.php");
	$con=conectar();
	

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

	
	

	

	$sql="INSERT INTO cliente VALUES('$id','$nombre','$apellido','$correo','$contraseña')";
	$query= mysqli_query($con,$sql);
	

	if($query){
	    Header("Location: cliente.php");
	    
	}else {
	}
	?>
