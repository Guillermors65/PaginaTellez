<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="css/estilo1.css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <style>
        body
        {
            background-image: url("/phpmyadmin/usuarios_login/img/2.png");
            background-size:cover;
            background-repeat: no-repeat;
            background-attachment: fixed;        
            background-position: relative;
        
            }                          
            h2{
                width:1000px;
                height:400px;
                line-height:50px;
                text-align:center;
                background-color: rgba(4, 78, 60, 0.548);
                color:white;
                border-radius: 20px 20px 20px 20px;  
                position:absolute;
                font-family: 'Calibri';
                margin-left: 15%;
            }
            form input{
                padding:10px;
                margin-top:40px ;
                width:250px;
                border-radius: 20px 20px 20px 20px;
                margin:30px auto auto 40%;
            }
    
            form input[type="text"]{
                margin-top: 130px;
                background-repeat:no-repeat;
                background-position:cover;
                background-size:contain;
                background:rgb(255, 255, 255);
                position:relative;
    
                }
                
            form input[type="password"]{
    
                background-repeat:no-repeat;
                background-position:cover;
                background-size:contain;
                background:rgb(255, 255, 255);
                position:relative;
    
                }
                
            form input[type="submit"]{
                width:275px;
                height: 40px;
                background: rgb(4, 78, 60);
                border-radius: 20px 20px 20px 20px;  
                position:relative;
                font-family: 'Kaushan Script';
                font-size:medium;
                text-align: center;
                color:white;
    
                }
            form input[type="submit"]:hover{
                background:rgba(255, 255, 255, 0.945);   
                border-radius: 20px 20px 20px 20px;
                color:rgb(0, 0, 0);         
                }
                
            form input[type="submit"]:active{
                background:rgb(0, 0, 0);                    
                border-radius: 20px 20px 20px 20px;
                color:rgb(255, 255, 255);
                }
            form a{
                position: relative;
                color: white;
                margin:auto auto auto 44%;
                text-decoration: none;
                }
            #logout{
                font-weight: bold;
                font-size: 1.9em;
                text-align: center;
                font-family: 'Kaushan Script';
                color: white;
                text-decoration: none;
            }
    </style>
</head>
<body>
    <a id="logout"href="html/index.html">Atras</a>

   <form action="validar.php" method="post">
       <h2>INICIA SESION</h2>
       <input id="usu" type="text" placeholder="&#128100; Usuario" name="usuario">
       <input id="pass" type="password" placeholder="&#128273; Contraseña" name="clave">
       <input type="submit" value="Ingresar" id="but">
       
   </form>
    
    
</body>
</html>
