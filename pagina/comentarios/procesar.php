<?php
    include ("cn.php");
    $id = $_POST["id"];
    $Nombre = $_POST["Nombre"];
    $Comentario = $_POST["Comentario"];
    $Correo = $_POST["Correo"];

$actualizar = "UPDATE comentarios1 SET Nombre='$Nombre', Comentario='$Comentario', Correo='$Correo' WHERE id='$id'";


$resultado = mysqli_query($conexion,$actualizar);

if($resultado) {
    echo "<script>alert('se ha actualizado correctamente');
        window.location='/phpmyadmin/pagina/comentarios/edicion.php'</script>";
}

else {
    echo "<script>alert('no se pudo actualizar'); window.history.go(-1);</script>";
}


?>