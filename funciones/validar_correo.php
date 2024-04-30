<?php
require "./conecta.php";    //Funciones de conexion a 
$con = conecta();

$correo = $_POST["correo"];
$peticion = "SELECT correo FROM administrador WHERE correo='$correo'";

$res = $con->query($peticion);
if($res->fetch_array()){
    echo 1;

}else {
    echo 0;
}

?>