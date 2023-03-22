<?php
include("db.php");

$nombre=$_POST['nombre'];
$clave=$_POST['clave'];


// añadiría un limit 1 a la consulta pues solo esperamos un registro
$consulta = mysqli_query ($conexion, "SELECT * FROM admin WHERE nombre = '$nombre' AND clave = '$clave'");  

// esto válida si la consulta se ejecuto correctamente o no
// pero en ningún caso válida si devolvió algún registro
if(!$consulta){ 
    // echo "Usuario no existe " . $nombre . " " . $password. " o hubo un error " . 
	echo mysqli_error($mysqli);
    // si la consulta falla es bueno evitar que el código se siga ejecutando
	exit;
} 
// validemos pues si se obtuvieron resultados 
// Obtenemos los resultados con mysqli_fetch_assoc
// si no hay resultados devolverá NULL que al convertir a boleano para ser evaluado en el if será FALSE
if($user = mysqli_fetch_assoc($consulta)) {
	header("location:admin.php");
    // el usuario y la pwd son correctas
} else {
    // Usuario incorrecto o no existe
	?>
	<?php
	include("index.php");

	?>
	<h1 class="bad">ERROR DE AUTENTIFICACION</h1>
	<?php
}

?>
