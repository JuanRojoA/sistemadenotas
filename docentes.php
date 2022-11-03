<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  
 <!--MENU-->
 <ul class="nav nav-pills bg-light nav-fill ">
    <li class="nav-item ">
    <a class="nav-link " href="index.php">Inicio</a>
  </li>
 
</ul>
<!--FIN DE MENU-->
  <br><br><br>
    <!--INGRESO-->
   
    <form action="ingredocen.php" method="get">
<br><br><br>
<div class="row">
    <div class="col">
      
    </div>
    
    <div class="col      bg-dark text-white">
    <br>
    <h2 class="text-center">FORMULARIO DE INGRESO DOCENTE</h2>
<!--INPUT CAJA-->
<br>
<label for="exampleInputEmail1" class="form-label">CORREO ELECTRÓNICO</label>
    <input type="email" name="correo" id="correo" placeholder="INGRESE SU CORREO DE REGISTRO" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


<br>
<label for="exampleInputPassword1" class="form-label">CONTRASEÑA</label>
    <input type="password" name="contrasena" id="contrasena" placeholder="INGRESE SU CONTRASEÑA DE REGISTRO" class="form-control" id="exampleInputPassword1">
     <br>
 <input type="checkbox" onclick="Toggle()">
    <b>Ver contraseña</b>
  <br>
    <script>
    // Change the type of input to password or text
        function Toggle() {
            var temp = document.getElementById("contrasena");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
</script>

<br>
<input type="submit"  class="btn btn-primary btn-lg" value="INGRESAR USUARIO">
<br><br>



    </div>
    <div class="col">
      
    </div>
  </div>
</div>

</form>

    <!--FIN DE INGRESO-->
</body>
</html>