<?php
include("cn.php");
$comentarios1 = "SELECT *FROM comentarios1";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="shortcut icon" href="img1/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css1/estilos1.css">
    
     
   
</head>
<body>
   <div class="contenedor_agregar">
       <h2 class="contenedor_titulo1">Registrar comentario</h2>
       <form action="insertar.php" method="post" class="contenedor_form">
           <label for="" class="contenedor_label">Nombre:</label>
           <input name="Nombre" type="text" class="contenedor_input">
           <label for="" class="contenedor_label">Comentario:</label>
           <input name="Comentario" type="text" class="contenedor_input">
           <label for="" class="contenedor_label">Correo:</label>
           <input name="Correo" type="text" class="contenedor_input">
           <input class="contenedor_submit" type="submit" value="Registrar">
           
       </form>
   </div>
   
    <div class="contenedor_tabla">
        <div class="tabla_titulo">Comentarios <a href="edicion.php" style="color: white">Editar</a></div>
        <div class="tabla_header">Nombre</div>
        <div class="tabla_header">Comentario</div>
        <div class="tabla_header">Correo</div>
        <?php $resultado = mysqli_query($conexion, $comentarios1);
        
        while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="tabla_item"><?php echo $row["Nombre"];?></div>
        <div class="tabla_item"><?php echo $row["Comentario"];?></div>
        <div class="tabla_item"><?php echo $row["Correo"];?></div>
        <?php } mysqli_free_result($resultado);?>
    </div>
    
</body>
</html>