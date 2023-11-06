<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirmacion"]) && $_POST["confirmacion"] == 1) {
    
    $conexion = mysqli_connect("localhost", "root", "", "registro");

    $usuario_id  = 14; 
    $consulta = "DELETE FROM usuarios WHERE id = $usuario_id";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        
        echo "Tu cuenta ha sido eliminada con éxito.";
    } else {
        
        echo "Error al eliminar la cuenta: " . mysqli_error($conexion);
    }

  
    mysqli_close($conexion);
}
?>