<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];

$conexion= mysqli_connect("localhost", "root" , "" , "programador_web_inicial2"
) or exit ("no se pudo conectar a la base de datos");


$query = "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form' , '$apellido_form'
 , '$correo_form' , '$mensaje_form' )";

 $resultado = mysqli_query($conexion, $query); 

 if ($resultado) {
    header("Location:contacto.php?ok");

} else{
    echo "Error en la inserción" . mysqli_error($conexion);
}

mysqli_close($conexion);