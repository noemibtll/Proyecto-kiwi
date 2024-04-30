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
    <script src="./js/funcion.js"></script>
    <script src="./js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<div class="container mt-3 text-center"><!-- Limitar contenido -->
        <div class="row justify-content-center">
            <div class="col-6">
                
    <form name="formulario" action="./funciones/usuarios_salva.php" method="POST" onsubmit="return verificar_datos_usuario()">
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
                    <!-- TELEFONO Y PLACAS -->
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Telefono</span>
                                <input type="text" class="form-control" name="telefono" maxlength="10" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Placas</span>
                                <input type="text" class="form-control" name="placa" >
                            </div>  
                        </div>
                    </div>
                    <!-- DOMICILIO Y NIP -->
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Domicilio</span>
                                <input type="text" class="form-control" name="domicilio" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nip</span>
                                <input type="text" class="form-control" name="nip" maxlength="4" placeholder="Ingrese nip de 4 digitos" >
                            </div>  
                        </div>
                    </div>
                    <!-- PAGO -->
                    <div class="row">
                        <div class="col">
                        <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Pago</label>
                        <select name="pago" class="form-select" id="inputGroupSelect01">
                            <option value="1" selected>Si</option>
                            <option value="0">No</option>
                            
                        </select>
                        </div>
                        
                        </div>
                        
                    </div>
                    
                    <!-- BOTONES -->
                    <button class="btn btn-success" type="submit">Enviar</button><br>
                    <a class="btn btn-warning mt-2" href="./usuarios_lista.php">Regresar a Listado de usuarios</a>
                    <div class="alert alert-danger mt-2" role="alert" id="error_campos" style="display:none;">
                        Faltan campos por llenar!
                    </div>    
            </div>
        </div>
    </div>
</form>
</body>
                    
</html>