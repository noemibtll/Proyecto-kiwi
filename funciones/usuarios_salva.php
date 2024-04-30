<?php
//empleados_salva.php
require "./conecta.php";
$con = conecta();

//Recibe variables
$nombre     = $_POST['nombre'];
$apellidos  = $_POST['apellidos'];
$telefono   = $_POST['telefono'];
$placa      = $_POST['placa'];
$domicilio  = $_POST['domicilio'];
$nip        = $_POST['nip'];
$pago       = $_POST['pago'];


//$passEnc    = md5($pass);           //METODO DE SEGURIDAD 

//CAMPOS A SALVAR (DE LA BD)
var_dump($pago);
$sql = "INSERT INTO usuarios (nombre, apellidos, telefono, placa, domicilio, nip, pago) VALUES ('$nombre', '$apellidos','$telefono','$placa', '$domicilio','$nip',$pago)";          //DECLARADO COMO VARCHAR 


$res = $con->query($sql);           //EJECU CONSULTA 

header("Location: ../usuarios_lista.php");

?>
