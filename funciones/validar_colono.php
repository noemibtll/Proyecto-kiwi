<?php
 //cualquier docuemento que necesite usar sesion va a necesitar esta funcion

require "./conecta.php"; 
$con = conecta();

$colono = $_POST["colono"];
$nip = $_POST["nip"];


$peticion = "SELECT * FROM usuarios WHERE placa='$colono' AND nip='$nip' AND eliminado=0 AND pago=1";


$res = $con->query($peticion);
$num = $res->num_rows; //verifica que haya un registro
$row = $res->fetch_assoc(); //convierte en un arreglo para poder leer el campo

echo $num;
?>

