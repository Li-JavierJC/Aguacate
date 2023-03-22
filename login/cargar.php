<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Imagen</title>

    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Administrador</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cargarA">Cargar Audios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cargarV">Cargar Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Salir</a>
                </li>
            </ul>
        </div>
    </nav>
    <section id="cargarA">

        <?php

        include ("db.php");
        if(isset($_POST["submit"])){
            $revisar = getimagesize($_FILES["image"]["tmp_name"]);
            if($revisar !== false){
                $image = $_FILES['image']['tmp_name'];
                $imgContenido = addslashes(file_get_contents($image));



        //Insertar imagen en la base de datos
                $insertar = $conexion->query("INSERT into images (imagenes, creado) VALUES ('$imgContenido', now())");
        // COndicional para verificar la subida del fichero
                if($insertar){

                   ?>
                   <h3 class="bad" style="background-color: #0FD840; color: white">Archivo Subido Correctamente</h3>
                   <button style="color: #F3F4F9; border-radius: 15px;"> <a href="admin.php"><h4>Regresar</h4></a> </button>
                   <?php

               }else{
                 ?>
                 <h3 class="bad" style="background-color: red; color: white">Ha fallado la subida, reintente nuevamente</h3>
                 <button style="color: #F3F4F9; border-radius: 15px;"> <a href="admin.php"><h4>Regresar</h4></a> </button>
                 <?php

             } 
        // Sie el usuario no selecciona ninguna imagen
         }else{


            ?>
            <h3 class="bad" style="background-color: #F5A10E; color: white">Por favor seleccione imagen a subir</h3>
            <button style="color: #F3F4F9; border-radius: 15px;"> <a href="admin.php"><h4>Regresar</h4></a> </button>
            <?php
        }
    }
    ?>

</section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

