!<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sision Iniciada</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial.scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="css/estilos.css">

    <style media="screen">
      body{
        background-image: url(../frontend/img/bienvenidos.jpg);
      }
      .welcome{
        width: 100%;
        max-width: 600px;
        margin:auto;
        margin-top: 100px;
        background: rgba(0,0,0,0.6);
        text-align: center;
        padding: 20px;
      }

      .welcome img{
        width: 100%;
        height: 120px;
        text-align: center;
      }

      .welcome h1{
        font-size: 50px;
        color: white;
        font-weight: 100;
        margin-top: 20px;
      }

      .wolcome a{
        display: block;
        margin-top: 40px;
        font-size: 20px;
        padding: 10px;
        border: 1px solid white;
      }

      .welcome a:hover{
      	color: black;
      	background: white;
      }
    </style>
  </head>
  <body>

    <div class="welcome">
      <img src="img/guitarra.jpg">
      <h1>Has logrado Iniciar Sesion</h1>
      <a href="../cerrar.php">Cerrar Sesion</a>

    </div>
  </body>
</html>
