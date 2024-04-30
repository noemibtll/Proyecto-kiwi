<?php
include("menu.php");
require "./funciones/conecta.php";
$con = conecta();
//selecciona todos los campos de empleados
//muestra los que esten activos que es 1 y eliminados 0
$sql = "SELECT * FROM administrador WHERE status = 1 AND eliminado = 0";
$res = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios registrados</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/diseño.css">
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/eliminar.js"></script>
</head>
<body>
    <div class="container mt-4">
        <table class="table">
        <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Correo</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            
                <?php while ($row = $res->fetch_array()) { ?>
                    <tr id="<?php echo $row['id']?>">
                        <td>
                            <?php echo $row["id"] ?>
                        </td>
                        <td>
                            <?php echo $row["nombre"] ?>
                        </td>
                        <td>
                            <?php echo $row["apellidos"] ?>
                        </td>
                        <td>
                            <?php echo $row["correo"] ?>
                        </td>
                        <td>
                          <button type="button" class="btn btn-light" onclick="eliminar(<?php echo $row['id'] ?>)">Eliminar</button>
                        </td>
                    </tr>
                <?php } ?>
          </tbody>
        </table>
        <a class="btn btn-secondary" href="./alta_empleados.php">Nuevo registro</a>
    </div>

</div>
    
</body>
</html>