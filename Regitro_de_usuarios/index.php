


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <marquee behavior="" direction="">
    <title>Bienvenido!</title>
  </marquee>

</head>

<body>

  <main>

  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family: "Times New Roman", Times, serif;
}

body {
  background-imagen: url(galaxia.jpeg);
  background-size: cover;
  background-repeat: no-repeat;
  background-color: aqua;
  background-position: center;
  background-attachment: scroll;
}

main {
  width: 100%;
  padding: 28px;
  margin: auto;
  margin-top: 100px;
}

.container {
  width: 100%;
  max-width: 800px;
  margin: auto;
  position: relative;
  
}

.caja-trasera {
  width: 100%;
  height: 20pc;
  padding: 10px 20px;
  border-radius: 20px;
  display: flex;
  justify-content: space-around;
  align-items: center;
  -webkit-backdrop-filter: blur(-9px);
  backdrop-filter: blur(10px);
  background-color: rgba(0, 128, 255, 0.5);
}

.caja-trasera div {
  margin: 100px, 40px;
  color: white;
  transition: all 505ms;
}

.caja-trasera div p,
.caja-trasera div button {
  margin-top: 30px;
}

.caja-trasera div h3 {
  font-weight: 400;
  font-size: 26px;
}

.caja-trasera button {
  padding: 10px 40px;
  border: 2px solid #ffff;
  background: transparent;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  color: #ffff;
  outline: none;
  transition: all 400ms;
}

.caja-trasera button:hover {
  background-color: #ffff;
  color: #46a2fd;
}

.container-formulario {
  display: flex;
  align-items: center;
  width: 100%;
  max-width: 380px;
  position: relative;
  top: -140px;
  left: 10px;
  transition: left 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275);

}

.container-formulario form {
  width: 100%;
  padding: 80px 29px;
  background: #fff;
  position: absolute;
  border-radius: 20px;
}

.container-formulario form h2 {
  font-size: 30px;
  text-align: center;
  margin-bottom: 20px;
  color: #46a2fd;
}

.container-formulario form input {
  width: 100%;
  margin-top: 20px;
  padding: 10px;
  border: none;
  background: #f2f2f2;
  font-size: 16px;
  outline: none;
}

.container-formulario form button {
  padding: 10px 40px;
  margin-top: 40px;
  border: none;
  font-size: 14px;
  background: #46a2fd;
  color: #fff;
  outline: none;
}

.formulario-login {
  opacity: 1;
  display: block;
}

.formulario-registro {
  display: none;
}

@media screen and (max-width: 850px) {
  main {
    margin-top: 50px;
  }

  .caja-trasera {
    max-width: 350px;
    height: 300px;
    flex-direction: column;
    margin: auto;
  }

  .caja-trasera div {
    margin: 0px;
    position: absolute;
  }
  .registro{
    display: block;
    
  }

  .login{
    display: none;
  }

  .container-formulario {
    top: -8px;
    margin-left: 50px;
    margin: auto;
  }

  .container-formulario form {
    margin-top: 80%;
  }
}
  </style>

    <div class="container">

      <div class="caja-trasera">

        <div class="login">
       
          <h3>¿Ya tienes una cuenta?</h3>
          <p>inicia session para entrar en la pagina</p>
          <button id="btn_iniciar">Iniciar Session</button>
        </div>

        <div class="registro">
          <h3>¿Aun no tienes cuenta?</h3>
          <p>Registrarte para que puedas iniciar sesion</p>
          <button id="btn_registro">Registrarse</button>
        </div>

      </div>
      <div class="container-formulario">

        <form action="sesion.php"   enctype="multipart/form-data"  method="post" class="formulario-login">
          <h2>Iniciar Sesion</h2>
          <input type="text" placeholder="Correo Electronico" name="correo">
          <input type="password" placeholder="Contraseña" name="contraseña">
          
          <button type="submit" name="login">Entrar </button>

        </form>

        <form action="registro_usuarios.php" method="post" class="formulario-registro">
          <h2>Registrarse</h2>
          <input type="text" for="id" placeholder="Nombre Completo" name="nombre">
          <input type="text" for="id"  placeholder="Apellido" name="apellido">
          <input type="text" for="id"  placeholder="Correo Electronico" name="email">
          <input type="password" for="id"  placeholder="Contraseña" name="contraseña">
          <input type="password" for="id"  placeholder=" Confirmar Contraseña" name="confirmacion">
          
          <button type="submit" name="registro" >Registrarse</button>
        </form>
      </div>

    </div>
  </main>



  <script>
  document.getElementById("btn_registro").addEventListener("click", register);
  document.getElementById("btn_iniciar").addEventListener("click", InicarSesicion);

  var container_formulario = document.querySelector(".container-formulario");
  var formulario_login = document.querySelector(".formulario-login");
  var formulario_registro = document.querySelector(".formulario-registro");
  var login = document.querySelector(".login");
  var registro = document.querySelector(".registro");

function register() {
  formulario_registro.style.display = "block";
  container_formulario.style.left = "410px";
  formulario_login.style.display = "none";
  registro.style.opacity = "0";
  login.style.opacity = "1";
}

function InicarSesicion() {
  formulario_registro.style.display = "none";
  container_formulario.style.left = "10px";
  formulario_login.style.display = "block";
  registro.style.opacity = "1";
  login.style.opacity = "0";
}
  </script>


</body>

</html>

