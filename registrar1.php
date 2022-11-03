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

$sql="INSERT INTO estudiantes(documento,correo,curso, nombre, apellido, numero, edad, contrasena) VALUES ('$documento', '$correo','$curso', '$nombre', '$apellido', '$numero', '$edad', '$contrasena')";
$query=mysqli_query($conexion,$sql);
if($query){
    header("refresh:0;url=estudiantes.php");
}
?>