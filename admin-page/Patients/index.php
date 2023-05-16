<?php
    include('../config/config.php');
    include('users.php');
    $p = new users();
    $data = $p->getAll();

 if(isset($_GET['id']) && !empty($_GET['id'])) {
    $remove = $p->delete($_GET['id']);
    if($remove){
        header('Location'.ROOT.'Patients/index.php');
    }else {
        $msj= "<div class='alert alert-danger' rol='alert'> Error al eliminar. </div>";

    }
} 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>

<?php include('../menu.php')?>
    <div class="container">;
    <h2 class="text-center mb-2"> Calendario </h2>
    <div class="row";>
    <?php 
        while($pt = mysqli_fetch_object($data)){ ///
            $date = $pt->fecha;
            echo "<div class ='col'>";
                echo "<div class= 'border border-infot pb-2'>";
                echo "<h5>$pt->nombres $pt->apellidos </h5>";
                echo " <p> <b>Fecha:</b> ".date("D", strtotime($pt->fecha)) . " " . date("d-M-Y H:i", strtotime($pt->fecha)). " </p> ";
            echo "<div class='text-center'>";
        
            echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/Patients/edit.php?id=$pt->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/Patients/index.php?id=$pt->id' >Eliminar</a> </div>";

                echo "</div>";
                echo "</div>";
            }

            ?>

        </div>
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>


</body>
</html>