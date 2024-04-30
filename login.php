<?php
session_start();

// si la sesión existe
if(!empty($_SESSION['id']))
{
    header("location: ./bienvenido.php");
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/diseño.css">
    <script src="./js/verificar_usuario.js"></script>
    <script src="./js/jquery-3.3.1.min.js"></script>
    
</head>
<body>
<div class="container mt-3 text-center"><!-- Limitar contenido -->
    <div class="row justify-content-center" style="height: 80%;">
        <div class="col-6 align-self-center">
            <img src="./imagenes/imagen_casa.jpg" class="rounded float-start img-fluid">
        </div>
        <div class="col-6 align-self-center">
            <form name="login" onsubmit="return verificar_usuario()">
                <h1>Login Administrador</h1>
                <hr>
                <div class="input-group mb-3">
                    <span class="input-group-text">Correo</span>
                    <input type="email" class="form-control" name="user">
                </div>  

                <div class="input-group mb-3">
                    <span class="input-group-text">Contraseña</span>
                    <input type="password" class="form-control" name="pass">
                </div>  
                <button type="submit" class="btn btn-info">Enviar</button><br><br>
                <a class="btn btn-warning mt-2" href="./index.php">Regresar al inicio</a>
                
            </form>
            <div class="alert alert-danger mt-2" role="alert" id="error_usuario" style="display:none;"></div>    
        </div>
    </div>
</div>
    
</body>
</html>