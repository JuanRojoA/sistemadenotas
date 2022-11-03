<?php
include_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<!--registro-->
<div class="container">
  <div class="row">
    <div class="col">

    <br>
    <img src="./Imagenes/09.jpg" class="img-fluid" alt="">
    <br><br>

    </div>
    <div class="col">
    

      <br><br>
      <div class="col">
          <h1 class="text-center">Formulario de Registro Docentes</h1>
          <br>
        <!--formulario-->
        <form  action="registrardocentes1.php" method="get">
          <div class="col-12">
            <label for="inputAddress2" class="form-label"> Documento</label>
            <input type="text" class="form-control" name = "documento" id="documento" placeholder="Ingrese su documento">
          </div>
          <br>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">Nombre</label>
            <input type="text" class="form-control" name = "nombre" id="nombre" placeholder="Ingrese su Correo Electronico">
          </div>
          <br>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">Numero de Telefono</label>
            <input type="number" class="form-control" name = "numero" id="numero" placeholder="Ingrese el curso en el que se quiere registrar">
          </div>
          <br>
            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Correo</label>
              <input type="text" class="form-control" name = "correo" id="correo"  placeholder="Ingrese su Nombre">
            </div>
            <br>
            <div class="col-md-12">
              <label for="inputPassword4" class="form-label">Programa</label>
              <input type="text" class="form-control" name = "programa" id="programa" placeholder="Ingrese su Apellido">
            </div>
            <br>
    
            
            <div class = "col-12">
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
               <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña de registro" class="form-control" id="Ingrese su contraseña">
            <input type="checkbox" onclick = "Toggle()"> 
            <br>
            <h5>Ver contraseña</h5>
          </div>
            <script>
            // change the tyep of input to paswsword or text
            function Toggle(){
                var temp = document.getElementById("contrasena");
                if (temp.type === "password"){
                    temp.type = "text";
                }
                else{
                    temp.type = "password";
                }
            }
            </script>
            <div class="col-12">
              <input type="submit"  class="btn btn-dark btn-lg" value="Registrar"><br><br>
            </div>
          </form>
          <br>
        <!--fin de formulario-->
      </div>
    </div>
  </div>
</div>
<!--fin registro-->
   

</body>
</html>