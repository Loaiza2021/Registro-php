<?php
if (isset($_POST['registro'])) {
    extract($_POST);
    include("database.php");

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El correo ingresado no es válido.";
    } else {
    
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '$email'");

        if (mysqli_num_rows($sql) > 0) {
            echo "El correo ya existe.";
        } else {
        
            if (empty($nombre) || empty($apellido)) {
                echo "El nombre y el apellido son obligatorios.";
            } else {
            
                if (strlen($contraseña) < 8) {
                    echo "La contraseña debe tener al menos 8 caracteres.";
                } else {
                
                    if ($contraseña === $confirmacion) {
                        $contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);
                        $query = "INSERT INTO usuarios (nombre, apellido, correo, contraseña) VALUES ('$nombre', '$apellido', '$email', '$contraseña_encriptada')";
                        $sql = mysqli_query($conn, $query) or die("No se pudo realizar la inserción en la base de datos");
                        header("location: index.php?status=success");
                    } else {
                        echo "Las contraseñas no coinciden.";
                    }
                }
            }
        }
    }
}
?>