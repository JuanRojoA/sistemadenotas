<?php
$documento=$_GET['documento'];
include_once 'conexion.php';

$con=conexion();
$sql="DELETE FROM estudiantes WHERE documento= $documento";

$query=mysqli_query($con,$sql);
if($query){
    header("refresh:0;url=notas.php");
}else{
    echo "Error al eliminar";
}
?>