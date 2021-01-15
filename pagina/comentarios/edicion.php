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
    <link rel="stylesheet" href="css1/estilos2.css">
    <body background="img1/full-bloom.png">
</head>
<body>
    <div class="contenedor_tabla">
        <div class="tabla_titulo">Comentarios </div>
        <div class="tabla_header">Nombre</div>
        <div class="tabla_header">Comentario</div>
        <div class="tabla_header">Correo</div>
        <div class="tabla_header">Operación</div>
        <?php $resultado = mysqli_query($conexion, $comentarios1);
        
        while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="tabla_item"><?php echo $row["Nombre"];?></div>
        <div class="tabla_item"><?php echo $row["Comentario"];?></div>
        <div class="tabla_item"><?php echo $row["Correo"];?></div>
        <div class="tabla_item">
        <a href="actualizar.php?id=<?php echo $row["id"];?>" class="tabla_item_link">Editar</a> /
        <a href="eliminar.php?id=<?php echo $row["id"];?>" class="tabla_item_link">Eliminar</a>
        </div>
        <?php } mysqli_free_result($resultado);?>
    </div>
    
    <script src="confirmacion.js"></script>
</body>
</html>