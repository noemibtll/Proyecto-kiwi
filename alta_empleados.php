<?php
include("menu.php");
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta empleados</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/diseño.css">
    <script src="./js/verificar_datos_empleado.js"></script>
    <script src="./js/validar_correo.js"></script>
    <script src="./js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<div class="container mt-3 text-center"><!-- Limitar contenido -->
        <div class="row justify-content-center">
            <div class="col-6">
                
    <form name="formulario" action="./funciones/empleados_salva.php" method="POST" onsubmit="return verificar_datos_empleado()">
                    <h3>Registro de nuevo usuario</h3>
                    <hr>
                    <!-- NOMBRE Y APELLIDOS -->
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nombre</span>
                                <input type="text" class="form-control" name="nombre" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Apellidos</span>
                                <input type="text" class="form-control" name="apellidos" >
                            </div>  
                        </div>
                    </div>
                    
                    <!-- CONTRASEÑA -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">contraseña</span>
                            <input type="password" class="form-control" name="contrasenia" >
                        </div>  
                    </div>

                     <!-- CORREO -->
                     <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Correo</span>
                            <input type="text" class="form-control" onblur="validar_correo()" type="email" name="correo" placeholder="@udg.mx">
                        </div>   
                        <div class="column" id="correo_error" style="display:none;"></div>                         
                    </div>
                    
                    <!-- BOTONES -->
                    <button class="btn btn-outline-success" type="submit">Enviar</button><br>
                    <a class="btn btn-outline-warning mt-2" href="./empleados_lista.php">Regresar a Listado de empleados</a>
                    <div class="alert alert-danger mt-2" role="alert" id="error_campos" style="display:none;">
                        Faltan campos por llenar!
                    </div>    
            </div>
        </div>
    </div>
</form>
</body>
                    
</html>