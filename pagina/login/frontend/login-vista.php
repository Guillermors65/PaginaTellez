<!DOCTYPE html>
<html lang="es"
   <head>
    <meta charset="utf-8">
    <title>Login / Registro</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial.scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">

    </head>
  <body>
    <div class="contenedor-form">
      <div class="header">
        <div class="logo-titulo">
          <img src="img/umb.jpg" alt="">
          <h2>San José del Rincón</h2>
        </div>
        <div class="menu">
          <a href="login-vista.php"><li class="modulo-login-activo">Login</li></a>
          <a href="registro_vista.php"><li class="modulo-registro">Registro</li></a>
        </div>
      </div>


    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
      <div class="welcome_form"><h1>Bienvenido</h1>
      </div>
      <div class="linea-input">
        <label class="lnr lnr-user"></label>
        <input type="text"  placeholder="Nombre o Usuario"name="Usuario">
      </div>
      <div class="linea-input">
        <label class="lnr lnr-lock"></label>
        <input type="password" placeholder="Contraseña" name="clave">
        
      </div>

      <?php if (!empty($error)): ?>
      <div class="mensaje">
        <?php  echo $error;?>
      </div>
      <?php endif;?>


      <button type="submit"> Entrar <label class="lnr lnr-chevron-right"></label></button>
    </div>   
    </form>
    <script src="js/script.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>
