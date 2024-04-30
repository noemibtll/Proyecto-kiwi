<?php
//empleados_salva.php
require "./conecta.php";
$con = conecta();

//Recibe variables
$nombre     = $_POST['nombre'];
$apellidos  = $_POST['apellidos'];
$correo     = $_POST['correo'];
$pass       = $_POST['contrasenia'];


$passEnc    = md5($pass);           //METODO DE SEGURIDAD 

//CAMPOS A SALVAR (DE LA BD)
$sql = "INSERT INTO administrador (nombre, apellidos,  correo, pass) VALUES ('$nombre', '$apellidos', '$correo', '$passEnc')";          //DECLARADO COMO VARCHAR 


$res = $con->query($sql);           //EJECU CONSULTA 

header("Location: ../empleados_lista.php");

?>
