<?php
include("cn.php");
$id = $_GET["id"];
$comentarios1 = "SELECT *FROM comentarios1 WHERE id = '$id'";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="shortcut icon" href="img1/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css1/estilos3.css">
    <body background="img1/full-bloom.png">
</head>
<body>
    <form class="contenedor_tabla" action="procesar.php" method="post">
        <div class="tabla_titulo">Comentarios </div>
        <div class="tabla_header">Nombre</div>
        <div class="tabla_header">Comentario</div>
        <div class="tabla_header">Correo</div>
        <div class="tabla_header">Operacion</div>
     
        <?php $resultado = mysqli_query($conexion, $comentarios1);
        
        while($row=mysqli_fetch_assoc($resultado)) { ?>
        <input type="hidden" class="tabla_input" value="<?php echo $row["id"];?>" name="id">
        <input type="text" class="tabla_input" value="<?php echo $row["Nombre"];?>" name="Nombre">
        <input type="text" class="tabla_input" value="<?php echo $row["Comentario"];?>" name="Comentario">
        <input type="text" class="tabla_input" value="<?php echo $row["Correo"];?>" name="Correo">
        <?php } mysqli_free_result($resultado);?>
        <input type="submit" value="Actuailizar" class="contenedor_submit">
    </form>
</body>
</html>