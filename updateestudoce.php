<?php
$documento = $_GET['documento'];
$correo = $_GET['correo'];
$curso = $_GET['curso'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$numero = $_GET['numero'];
$edad = $_GET['edad'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$contrasena = $_GET['contrasena'];

include_once "conexion.php";

$conexion = conexion();

$sql="UPDATE estudiantes SET documento='$documento', correo='$correo', curso = '$curso', nombre = '$nombre', apellido = '$apellido', numero = $numero, edad ='$edad', nota1 = '$nota1', nota2 = '$nota2', nota3 = '$nota3', contrasena = '$contrasena' where documento='$documento'";
$query=mysqli_query($conexion,$sql);
if($query){
    header("refresh:0;url=notas.php");
}
?>



