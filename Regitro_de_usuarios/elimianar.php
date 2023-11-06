<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $usuario_id = $_POST["usuario_id"];

    
    $conexion = mysqli_connect("localhost", "root", "", "registro");

   
    $consulta = "DELETE FROM usuarios WHERE id = $usuario_id";
    $resultado = mysqli_query($conexion, $consulta);


    if ($resultado) {
        echo "Usuario eliminado con éxito.";
    } else {
        echo "Error al eliminar el usuario: " . mysqli_error($conexion);
    }

 
    mysqli_close($conexion);
}
?>
