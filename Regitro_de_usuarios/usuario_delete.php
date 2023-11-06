<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Cuenta</title>
</head>
<body>
    <h2>Eliminar Cuenta</h2>
    <p>¿Estás seguro de que deseas eliminar tu cuenta? Esta acción es irreversible.</p>
    <form method="post" action="delete.php">
        <input type="hidden" name="confirmacion" value="1">
        <input type="submit" value="Confirmar Eliminación">
    </form>
</body>
</html>