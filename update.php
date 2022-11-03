<?php
$documento = $_GET['documento'];
$correo = $_GET['correo'];
$curso = $_GET['curso'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$numero = $_GET['numero'];
$edad = $_GET['edad'];
$contrasena = $_GET['contrasena'];

include_once "conexion.php";

$conexion = conexion();

$sql="UPDATE estudiantes SET documento='$documento', correo='$correo', curso = '$curso', nombre = '$nombre', apellido = '$apellido', numero = $numero, edad ='$edad', contrasena = '$contrasena' where documento='$documento'";
$query=mysqli_query($conexion,$sql);
if($query){
    header("refresh:0;url=vistaadmin.php");
}
?>



