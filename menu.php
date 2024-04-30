<?php
session_start();

$nombre = $_SESSION["nombre"];
$correo = $_SESSION["correo"];

// si la sesión existe
if(empty($_SESSION['id']))
{
    header("location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/diseño.css">
    <title>Menu</title>
</head>
<body>

<div>
  
<div id="barra_menu">
<nav class="navbar navbar-expand-lg " >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bienvenido
    <?php echo $nombre?>
    </a>
    
    <div class="row justify-content-center">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="./empleados_lista.php">Administradores</a>
        <a class="nav-link" href="./usuarios_lista.php">Usuarios</a>
        
        
        <a class="nav-link" href="./funciones/cerrar_sesion.php">Cerrar Sesion</a>
      
      </div>
    </div>
    </div>   
</nav>
</div>

</div>
    
</body>
</html>

