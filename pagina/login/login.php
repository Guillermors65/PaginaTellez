<?php

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    $error ='';
    
    if($SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $clave = hash('sha512', $clave);
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=basephp', 'root', '');
        }catch(PDOException $prueba_error){
            echo "Error:" . $prueba_error->getMessage();
        }
        
        $statement = $conexion->prepare('SELECT * FROM login WHERE usuario = :usuario AND clave = :clave');
        
        $statement->excecute(array(
            ':usuario' => $usuario,
            ':clave' => $clave
        ));
        
        $resultado = $statement->fetch();
        
        if($resultado !== false){
            $_SESSION['usuario'] = $usuario;
            header('location: principal.php');
        }else{
            $error .= '<i>Este usuario no existe</i>';
        }
    }

require 'frontend/login-vista.php';

?>