<?php


session_start();
include ('database.php');


$idUsuario = $_SESSION['id'];

$mysqli = new mysqli("localhost", "root", "", "registro");
$usuario = $mysqli->query("SELECT * FROM usuarios WHERE id = $idUsuario");


    
if ($usuario->num_rows > 0) {
    $usuario = $usuario->fetch_assoc();

    echo "Nombre: " . $usuario['nombre'];
    echo "<br>";
    echo "Apellido: " . $usuario['apellido'];
    echo "<br>";
    echo "rol: " . $usuario['rol'];
    echo "<br>";
    echo "Correo electrónico: " . $usuario['correo'];
    echo " <br>";
    echo "Fecha de creacion: " . $usuario['fecha_creacion'];
    echo "<br>";
    echo "Fecha de actualizacion: " . $usuario['fecha_actualizacion'];
    
} else {
    echo "No hay datos del usuario";
}



?>
<br>
<a href="index.php" class="btn">  <button typt="submit"> Cerrar Sesion</button></a> 
<br> 
<a class="btn"  href="actualizar.php?id=<?php echo $row['id']; ?>" >

<button type="submit">Actualizar Datos</button></a><br/>
<br>
<a href="usuario_delete.php"  class="btn"> <?php echo $sql['id']?> <button typt="submit"> borrar datos</button></a> 