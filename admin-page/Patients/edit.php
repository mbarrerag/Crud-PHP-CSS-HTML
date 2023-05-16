
<?php
include('../config/config.php');
include('users.php');
$p = new users();
$dp = mysqli_fetch_object($p->getOne($_GET['id']));
$date = new DateTime($dp->fecha);

if (isset($_POST) && !empty($_POST)){
  
  $update = $p->update($_POST);
  if ($update){
    $mensaje = '<div class="alert alert-success" role="alert">Sesion modificado correctamente</div>';
  }else{
    $mensaje = '<div class="alert alert-danger" role="alert" > Error al modificar la sesion </div>';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Sesion</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <?php include('../menu.php')?>
    <div class="container">
        <?php
         if(isset($mensaje)){
            echo $mensaje;
         }
        ?>
        <h2 class="text-center mb-2"> Modificar sesion </h2>
        <form method="POST" entype="multipart/form-data">

        <div class="row mb-2">
            <div class="col">
                <input type="text" name="nombres" id="nombres" placeholder="Nombre del usuario" class="form-control" value= "<?= $dp->nombres?>"/>
                <input type="hidden" name="id" value="<?= $dp->id ?>" />
            </div>
            <div class="col">
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del usuario" class="form-control" value= "<?= $dp->apellidos?>"/>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="email" name="email" placeholder="Email del usuario" class="form-control" value= "<?= $dp->email?>" />
            </div>
            <!-- Ya me pongo en ello gracias -->
            <div class="col">
                <input type="number" name="celular" placeholder="Celular del usuario" class="form-control"  value= "<?= $dp->celular?>"/>
        </div>
        </div>

        
        <div class="row mb-2">
        <div class="col">
        <textarea id="observarciones" name="observarciones" placeholder="Observaciones" <?= $dp->observarciones?>
            class="form-control">Observacion </textarea>   
        </div>
        <div class="col">
            <input type="text" name="duracionSesion" id="duracionSesion" placeholder="Duracion de la sesion" 
            class="form-control"  value= "<?= $dp->duracionSesion?>"/>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <input type="datetime-local" name="fecha" id="fecha" class="form-control"  value= "<?= $date->format('Y-m-d\TH:i') ?>"/>
        </div>
    </div>
    <button class="btn btn-success"> Registrar Informacion</button>
  </form>       
</div>   
            
    
</body>
</html>