<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel = "stylesheet" href ="./redes.css">
</head>
<body>
    <!--MENU-->
    <ul class="nav nav-pills bg-light nav-fill ">
    <li class="nav-item ">
    <a class="nav-link " href="index.php">Inicio</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link " href="cursos.php">Cursos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="estudiantes.php">Estudiantes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="docentes.php">Docente</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="administrador.php">Administrador</a>
  </li>
</ul>
<!--FIN DE MENU-->
<br>

<!--carrusel-->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./imagenes/01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./imagenes/02.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./imagenes/03.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--fin de carrusel-->
<br>
<!--redes sociales-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<footer>

  <div id = "footer">
    
  <i class="bi bi-envelope-fill"></i>
    <i class="bi bi-facebook"></i>
    <i class="bi bi-instagram"></i>
    <i class="bi bi-whatsapp"></i>
    <i class="bi bi-youtube"></i>
  </div>
</footer>

<!--fin de redes sociales-->
</body>
</html>