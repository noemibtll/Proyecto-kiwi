<?php
include("menu.php");
require "./funciones/conecta.php";
$con = conecta();
//selecciona todos los campos de empleados
//muestra los que esten activos que es 1 y eliminados 0
$sql = "SELECT * FROM usuarios WHERE status = 1 AND eliminado = 0";
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
    <script src="./js/eliminar_usuario.js"></script>
    <script src="./js/cambiar_cuota.js"></script>
</head>
<body>
    <div class="container mt-4">
        <table class="table">
        <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Telefono</th>
              <th scope="col">Domicilio</th>
              <th scope="col">Placa</th>
              <th scope="col">Pagado</th>
              <th scope="col">Nip</th>
              <th scope="col">Cuota semestral</th>
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
                            <?php echo $row["telefono"] ?>
                        </td>
                        <td>
                            <?php echo $row["domicilio"] ?>
                        </td>
                        <td>
                            <?php echo $row["placa"] ?>
                        </td>
                        <td>
                            <?php
                                $estado = ($row ["pago"] == "1") ? "Si" : "No";
                                $color = ($estado == "Si") ? "success" : "danger";
                            ?>
                            <span class="badge bg-<?php echo $color ?>">
                                <?php echo $estado ?>
                            </span>
                        </td>
                        <td>
                            <?php echo $row["nip"] ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-light" onclick="cambiar_cuota(<?php echo $row['id'] ?>)">
                            <?php
                                if ($row["pago"] == 1) echo "Cancelar";
                                else echo "Activar";
                            ?>
                            </button>
                        </td>
                        <td>
                          <button type="button" class="btn btn-danger" onclick="eliminar_usuario(<?php echo $row['id'] ?>)">Eliminar</button>
                        </td>
                    </tr>
                <?php } ?>
          </tbody>
        </table>
        <a class="btn btn-success" href="./alta_usuarios.php">Nuevo registro</a>
    </div>

</div>
    
</body>
</html>