<?php
include_once "conexion.php";
$con = conexion();

$documento = $_GET['documento'];

$sql = "SELECT * FROM estudiantes where documento='$documento'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Actualizar Estudiante</title>
</head>

<body>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">

    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">

  </nav>
  <br><br>


  <div class="container">
    <div class="row">
      <div class="col">

      </div>
      <br><br>
      <div class="col">

        <h1 class="text-center">Actualizacion De Datos Del Estudiante</h1>
        <br>
        <!--formulario-->
        <form action="updateestudoce.php" method="get">

          <label for="inputAddress2" class="form-label">Documento</label>
          <input type="text" class="form-control" name="documento" id="documento" placeholder="Ingrese su documento" value="<?php echo $row['documento'] ?>">

          <br>

          <label for="inputCity" class="form-label">Correo Electronico</label>
          <input type="text" class="form-control" name="correo" id="correo" placeholder="Ingrese su Correo Electronico" value="<?php echo $row['correo'] ?>">

          <br>

          <label for="inputCity" class="form-label">Curso</label>
          <input type="text" class="form-control" name="curso" id="curso" placeholder="Ingrese el curso en el que se quiere registrar" value="<?php echo $row['curso'] ?>">

          <br>

          <label for="inputEmail4" class="form-label">Nombres</label>
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su Nombre" value="<?php echo $row['nombre'] ?>">

          <br>

          <label for="inputPassword4" class="form-label">Apellidos</label>
          <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su Apellido" value="<?php echo $row['apellido'] ?>">

          <br>

          <label for="inputAddress" class="form-label">Número Telefonico</label>
          <input type="text" class="form-control" name="numero" id="numero" placeholder="Ingrese su número telefonico" value="<?php echo $row['numero'] ?>">

          <br>

          <label for="inputAddress" class="form-label">Edad</label>
          <input type="text" class="form-control" name="edad" id="edad" placeholder="Ingrese su edad" value="<?php echo $row['edad'] ?>">
          <br>

          <label for="inputAddress" class="form-label">NOTA 1</label>
          <input type="number" step="any" name="nota1" id="nota1" placeholder="INGRESE LA NOTA #1" class="form-control"  value="<?php echo $row['nota1'] ?>">
          <br>

          <label for="inputAddress" class="form-label">NOTA 2</label>
          <input type="number" step="any" name="nota2" id="nota2" placeholder="INGRESE LA NOTA #2" class="form-control"  value="<?php echo $row['nota2'] ?>">
          <br>

          <label for="inputAddress" class="form-label">NOTA 3</label>
          <input type="number" step="any" name="nota3" id="nota3" placeholder="INGRESE LA NOTA #3" class="form-control"  value="<?php echo $row['nota3'] ?>">
          <br>

          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña de registro" class="form-control" id="Ingrese su contraseña" value="<?php echo $row['contrasena'] ?>">

          <input type="checkbox" onclick="Toggle()">
          <br>
          <h5>Ver contraseña</h5>

          <script>
            // change the tyep of input to paswsword or text
            function Toggle() {
              var temp = document.getElementById("contrasena");
              if (temp.type === "password") {
                temp.type = "text";
              } else {
                temp.type = "password";
              }
            }
          </script>
          <input type="submit" class="btn btn-dark btn-lg" value="Actualizar"><br><br>
          <br><br>

      </div>
      <br><br>
      <div class="col">

      </div>
    </div>
  </div>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>