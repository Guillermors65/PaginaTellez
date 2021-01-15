<?php
    include ("cn.php");
    $Nombre = $_POST["Nombre"];
    $Comentario = $_POST["Comentario"];
    $Correo = $_POST["Correo"];

$insertar = "INSERT INTO comentarios1(Nombre, Comentario, Correo) VALUES('$Nombre', '$Comentario', '$Correo')";

$resultado = mysqli_query($conexion,$insertar);

if($resultado) {
    echo "<script>alert('se ha registrado con exito');
        window.location='/phpmyadmin/pagina/comentarios/coment.php'</script>";
}

else {
    echo "<script>alert('no se pudo registrar'); window.history.go(-1);</script>";
}


?>