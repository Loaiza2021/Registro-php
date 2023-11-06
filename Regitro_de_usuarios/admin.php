<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Usuario</title>
</head>
<body>
    <h2>Eliminar Usuario</h2>
    <form method="post" action="elimianar.php">
        <label for="usuario_id">Selecciona un usuario a eliminar:</label>
        <select name="usuario_id">
            <?php
            
            $conexion = mysqli_connect("localhost", "root", "", "registro");
            $consulta = "SELECT id, nombre FROM usuarios";
            $resultado = mysqli_query($conexion, $consulta);

            
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<option value='" . $fila['id'] . "'>" . $fila['nombre'] . "</option>";
            }

        
            mysqli_close($conexion);
            ?>
        </select>
        <input type="submit" value="Eliminar Usuario"> <br>
    </form>
    <a href="home.php"  class="btn"> <?php echo $sql['id']?> <button typt="submit"> Home</button></a> 
</body>
</html>