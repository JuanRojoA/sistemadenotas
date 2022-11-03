<?php
session_start();

$correo=$_GET['correo'];
$contrasena=$_GET['contrasena'];

include_once "conexion.php";
$con=conexion();

if($_GET){
$sql="SELECT * FROM estudiantes where correo='$correo' AND contrasena='$contrasena'";
$query =mysqli_query($con,$sql);
$count = mysqli_num_rows($query);

if($count ==1){
    echo "Bienvenido usuario '$correo'";
    header("refresh:2;url=notasestu.php");
}else{
    echo "Correo o contraseña con error";
    header("refresh:2;url=estudiantes.php");
}
}
?>