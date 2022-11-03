<?php
include_once "conexion.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="./imagenes/iconos.png" type="image/ico" />
    <title>Notas Docente</title>
</head>
<body>




<div class="container">
  <div class="row">
    <div class="col">
     
    </div>
    <div class="col">
      
    </div>
    <div class="col">
       <!--codigo de cierre-->
       
<a href="salida.php"><button type="button" class="btn btn-dark">Cerrar Sesion</button></a>
  
       <!--fin de codigo de cierre--> 
    </div>
  </div>
</div>


<!--Ingreso de tabla-->
<table class="table">
  <thead>
  <br><br>
  <h1 class = "text-center">NOTAS DE LOS ESTUDIANTES</h1>

    <tr>
      
      <th scope="col">DOCUMENTO</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">CURSO</th>
      <th scope="col">NOTA 1</th>
      <th scope="col">NOTA 2</th>
      <th scope="col">NOTA 3</th>
      <th scope="col">ELIMINAR</th>
      <th scope="col">ACTUALIZAR</th>

    </tr>
  </thead>


  <tbody>
  <?php
  
  $con = conexion();
  $sql = "SELECT * FROM estudiantes";
  $query = mysqli_query($con,$sql);
  if($query){
      $contador=1;
      while ($row=mysqli_fetch_assoc($query)){
            $documento=$row['documento'];
            $nombre=$row['nombre'];
            $apellido=$row['apellido'];
            $curso=$row['curso'];
            $nota1 = $row['nota1'];
            $nota2 = $row['nota2'];
            $nota3 = $row['nota3'];       
 
          
          
    ?>
    

<tr>
  <td><?php echo $documento; ?></td>
  <td><?php echo $nombre; ?></td>
  <td><?php echo $apellido; ?></td>
  <td><?php echo $curso; ?></td>
  <td><?php echo $nota1; ?></td>
  <td><?php echo $nota2; ?></td>
  <td><?php echo $nota3; ?></td>
  
  
  
  
  <td><a href="eliminardocenteestu.php?documento=<?php echo $documento; ?>"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
  <td><a href="actuestudoce.php?documento=<?php echo $documento; ?>"><button type="button" class="btn btn-outline-primary">Actualizar</button></a></td>
 
 

</tr>
<?php
$contador++;
      }
      
  }
  ?>
   </tbody>
</table>

<!--fin de codigo de tabla-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>