<?php
$documento = $_GET['documento'];
$nombre = $_GET['nombre'];
$numero = $_GET['numero'];
$correo = $_GET['correo'];
$programa = $_GET['programa'];
$contrasena = $_GET['contrasena'];

include_once "conexion.php";

$conexion = conexion();

$sql="INSERT INTO docentes(documento, nombre,  numero, correo, programa, contrasena) VALUES ('$documento', '$nombre','$numero', '$correo', '$programa', '$contrasena')";
$query=mysqli_query($conexion,$sql);
if($query){
    header("refresh:0;url=vistaadmin.php");
}
?>