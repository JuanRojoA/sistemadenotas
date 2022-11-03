<?php
include_once "conexion.php";

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>ADMINISTRADOR</title>
</head>
<body>

<a href="salida.php"><button type="button" class="btn btn-dark">Cerrar Sesion</button></a>
<a href="registraradminestu.php"><button type="button" class="btn btn-dark">Registrar Estudiante</button></a>
<a href="registrardocentes.php"><button type="button" class="btn btn-dark">Registar Docente</button></a>


  
       <!--fin de codigo de cierre--> 
    </div>
  </div>
</div>
 
<div class="container">
  <div class="row">
    <div class="col">
    <center><h2>ESTUDIANTES REGISTRADOS</h2></center>
<br><br>
<!--Ingreso de tabla-->
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">DOCUMENTO</th>
      <th scope="col">CORREO</th>
      <th scope="col">CURSO</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">NUMERO</th>
      <th scope="col">EDAD</th>
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
            $correo=$row['correo'];
            $curso=$row['curso'];
            $nombre=$row['nombre'];
            $apellido=$row['apellido'];
            $numero=$row['numero'];
            $edad=$row['edad'];
          
    ?>
<tr>
  <td><?php echo $documento; ?></td>
  <td><?php echo $correo; ?></td>
  <td><?php echo $curso; ?></td>
  <td><?php echo $nombre; ?></td>
  <td><?php echo $apellido; ?></td>
  <td><?php echo $numero; ?></td>
  <td><?php echo $edad; ?></td>

  

  <td><a href="eliminar.php?documento=<?php echo $documento; ?>"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
  <td><a href="actestu.php?documento=<?php echo $documento; ?>"><button type="button" class="btn btn-outline-danger">Actualizar</button></a></td>
  
 
 
  </tbody>
</tr>
<?php
$contador++;
      }
      
  }
  ?>
    </div>
    <div class="col">
    

<!--Ingreso de tabla DOCENTE-->
<table class="table">
<center><h2>DOCENTES REGISTRADOS</h2></center>
<br><br>
  <thead>
    <tr>
      
      <th scope="col">DOCUMENTO</th>
      <th scope="col">CORREO</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">NUMERO</th>
      <th scope="col">PROGRAMA</th>
      <th scope="col">ELIMINAR</th>
      <th scope="col">ACTUALIZAR</th>
      
    
    </tr>
  </thead>


  <tbody> 
  <?php
  $con = conexion();
  $sql = "SELECT * FROM docentes";
  $query = mysqli_query($con,$sql);
  if($query){
      $contador=1;
      while ($row=mysqli_fetch_assoc($query)){
            $documento=$row['documento'];
            $correo=$row['correo'];
            $nombre=$row['nombre'];
            $numero=$row['numero'];
            $programa=$row['programa'];
            
          
    ?>
<tr>
  <td><?php echo $documento; ?></td>
  <td><?php echo $correo; ?></td>
  <td><?php echo $nombre; ?></td>
  <td><?php echo $numero; ?></td>
  <td><?php echo $programa; ?></td>
  
  

  <td><a href="eliminar.php?documento=<?php echo $documento; ?>"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
  <td><a href="actdoce.php?documento=<?php echo $documento; ?>"><button type="button" class="btn btn-outline-danger">Actualizar</button></a></td>

 

 
 
  
</tr>
<?php
$contador++;
      }
      
  }
  ?>
    </div>
  








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>