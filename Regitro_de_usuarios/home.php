
<?php 
session_start();
include 'database.php';
$id = $_SESSION["id"];
$sql = mysqli_query($conn, "SELECT * FROM  usuarios where id = '$id'");
$row = mysqli_fetch_array($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="home.css">

</head>
<body>
  <section class="sect">
    <p class="btnp">BIENVENIDO   <?php echo $_SESSION["nombre"] ?>
</p>

<a href="index.php" class="btn">  <button typt="submit"> Cerrar Sesion</button></a> <br>
<a class="btn"  href="actualizar.php?id=<?php echo $row['id']; ?>" >
<button type="submit">Actualizar Datos</button></a><br/>
<a href="datos.php" class="btn">  <button typt="submit"> Datos Personales</button></a>
</section>


