<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);
    include 'database.php';
    $sql = mysqli_query($conn, "SELECT * FROM usuarios where  correo = '$correo' ");
    $row = mysqli_fetch_array($sql);


    if ( is_array($row)) {
      if (password_verify($contraseña, $row ['contraseña'])){
        $_SESSION['id']= $row ['id'];
        $_SESSION['nombre'] = $row ['nombre'];

        header("Location: home.php");
        exit();
        }else{
          echo "<h1>Contraseña incorrecta</h1>";
      }
    } else {
      echo "Debe proporcionar un correo y una contraseña.";
    }
  }
?>

