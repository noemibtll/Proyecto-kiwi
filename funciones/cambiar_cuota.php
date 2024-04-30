<?php

require "./conecta.php";    
$con = conecta();
$id = $_POST["id"];

$sql = "UPDATE usuarios SET pago = IF(pago=1, 0, 1) WHERE id=$id";
$res = $con->query($sql);

echo 1;
?>