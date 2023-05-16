<?php
    include_once('../config/config.php'); //include Once incluye una sola vez 
    include('users.php'); 

    if (isset($_POST) && !empty($_POST)){ //si existe post
        $p = new  users();
        $save = $p ->save($_POST);
        if($save){
            $mensaje = '<div  class="alert alert-success" role="alert">Sesion resgistrada </div>';
        }else{
            $mensaje = '<div class="alert alert-danger" role="alert">Error al registrar </div>';
        }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar sesion</title>
    <link rel="stylesheet" href="../Estilos/registro.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="linea0"></div>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php"> <img src="../Imagenes/Juego.png" alt="JuegoLogo"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="Titulo">Vinculo Familiar</h1>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav barra">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Pagina2.php">Los juegos en la familia</a>
            </li>

            <li class="nav-item">
              <a class="nav-link Disabled" href="../Pagina4.php">Acerca de nosotros</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Sesiones
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../Pagina3.php">Mas informacion</a></li>
                <li><a class="dropdown-item" href="add.php">Registrarse</a></li>
                

              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Decorado del encabezado -->
  <div class="linea1"></div>

    <div class="container">
        <?php
        if (isset($mensaje)){
            echo $mensaje;
        }
        ?>
        <div class="titulo">
        <h2 class="text-center mb-2"> Registrar sesion</h2>
        <br>
        <br>
         <div>
        <form  method="POST" enctype ="multipart/from-data">
   
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="nombres" id="nombres" placeholder="Nombre del usuario" class="form-control"/>
            </div>
            <div class="col">
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del usuario" class="form-control"/>
            </div>
        </div>

    <div class="row mb-2">
        <div class="col">
            <input type="email" name="email" id="email" placeholder="Email del usuario" class="form-control"/>
        </div>
        <div class="col">
            <input type="number" name="celular" id="celular" placeholder="Celular del usuario" class="form-control"/>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <textarea id="observaciones" name="observaciones" placeholder="Observaciones"
            class="form-control">Observacion </textarea>    
        </div>
        <div class="col">
            <input type="text" name="duracionSesion" id="duracionSesion" placeholder="Duracion de la sesion" 
            class="form-control"/>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <input type="datetime-local" name="fecha" id="fecha" class="form-control"/>
        </div>
    </div>

    <button class="btn btn-success"> Registrar Informacion</button>
  </form>       
</div>   
  
         

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>