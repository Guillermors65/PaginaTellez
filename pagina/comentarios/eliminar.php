<?php
include ("cn.php");

$id = $_GET['id'];
$eliminar = "DELETE FROM comentarios1 WHERE id ='$id'";
$resultado = mysqli_query($conexion, $eliminar);

if ($resultado) {
    header("location:edicion.php");
} else{
    echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}