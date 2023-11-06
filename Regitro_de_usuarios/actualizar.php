<?php
session_start();
include 'database.php';
$usuario = $_SESSION["id"];


$id = $_GET['id'];
$m = "SELECT * FROM usuarios WHERE id='$id'";
$modificar = $conn->query($m);
$dato = $modificar->fetch_array();

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido = $conn->real_escape_string($_POST['apellido']);
    $usuario = $conn->real_escape_string($_POST['usuario']);
    $contraseña = $conn->real_escape_string($_POST['contraseña']);
    $confirmar_contraseña = $conn->real_escape_string($_POST['ccontraseña']);
    $correo = $conn->real_escape_string($_POST['correo']);

    
    if ($contraseña === $confirmar_contraseña) {
        $contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

        
        $actualiza = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', usuario = '$usuario', contraseña = '$contraseña_encriptada', correo='$correo' WHERE id = '$id' ";
        $actualizar = $conn->query($actualiza);

        if ($actualizar) {
            echo "La actualización ha sido exitosa.";
            
        } else {
            echo "Error al actualizar los datos.";
        }
    } else {
        echo "Las contraseñas no coinciden.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Editar tus datos </title>
    <link rel="stylesheet" href="actualizar.css">

  
</head>
<body>


<nav class="nav"> 
  <a  class="btn"class="btn" href="index.php"> Inicio <i class="animation"></i>
  <i class="animation"></i></a>
  <a  class="btn" class="btn"href="cerrar_sesion.php"> Cerrar Sesión <i class="animation"></i>
  <i class="animation"></i></a>
</div>
</nav>
  
        

</div>
    <section class="style" >
        <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <p class="title"> Actualizacion</p>

        <div class="flex">  

        <input type="hidden" class="input" name="id" value="<?php echo $row['id'] ?>"/>
        <label for="nombre"> Nombre: 
        <input type="text" id="mnombree" class="input" name="nombre" required/> 
        </label>
        
        
        <label for="apellido" > <span>Apellido: </span> 
        <input type="text" id="mapelli" class="input" name="apellido" required/>
        </label>
        </div>

        <label for="correo" > <span> Correo Electrónico:</span> 
        <input type="email" id="mcorreoe" class="input" name="correo" required/>
        </label>
        
        
        <label for="contraseña"> <span>Contraseña Actual: </span>
          <input type="password" id="mcntrase" class="input" name="contraseña" required/>
        </label>

    
        <label for="contraseña_nueva"> <span>Contraseña Nueva: </span>
        <input type="password" id="mcntrase_nuev" class="input" name="nueva contraseña" required
        onkeyup='checkPassword()'/>
        </label>

        <span id='message'></span>
        <br />
   
        <button class="btn"><i class="animation"></i>Guadar Cambios<i class="animation"></i>
    </button>

        </form>
    </section>