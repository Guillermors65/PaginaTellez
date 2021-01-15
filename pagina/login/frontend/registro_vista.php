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


    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
      <div class="welcome_form"><h1>Registro</h1>
      </div>
      <div class="correo linea-input">
          <label class="lnr lnr-lock"></label>
          <input type="text" placeholder="Escribe tu correo" name="correo">
      </div>
      <div class="usuario linea-input">
        <label class="lnr lnr-user"></label>
        <input type="text"  placeholder="Nombre o Usuario"name="Usuario">
      </div>
      <div class="password linea-input">
        <label class="lnr lnr-lock"></label>
        <input type="password" placeholder="Contraseña" name="clave">   
      </div>
      <div class="password linea-input">
            <label class="lnr lnr-lock"></label>
            <input type="password" placeholder="Confirma tu contraseña" name="clave2">
        </div>

      <?php if (!empty($error)): ?>
      <div class="mensaje">
        <?php  echo $error;?>
      </div>
      <?php endif;?>


      <button type="submit"> Enviar <label class="lnr lnr-chevron-right"></label></button>
    </div>   
    </form>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>
