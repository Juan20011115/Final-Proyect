<?php


include('conexion.php');

$con=conectar();
$sql="SELECT *  FROM cliente";

$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$consulta = "SELECT * FROM cliente WHERE  correo= '$correo' and contraseña='$contraseña'";
$resultado= mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location: INICIOCLIENTE.php");

}else{
    echo "Correo o contraseña invalidos";
}
mysqli_free_result($resultado);