<?php
include("../class/funciones.php");

$total_cobrar   = filter_input(INPUT_POST,'total_cobrar',FILTER_SANITIZE_SPECIAL_CHARS);
$descripcion    = filter_input(INPUT_POST,'descripcion',FILTER_SANITIZE_SPECIAL_CHARS);
$fch_expiracion = filter_input(INPUT_POST,'fch_expiracion',FILTER_SANITIZE_SPECIAL_CHARS);

$pago = $encriptar($total_cobrar);
$descrip = $encriptar($descripcion);
$fch = $encriptar($fch_expiracion);

$url = "https://tripspremier.com/formato-pago.php?total=".$pago."&description=".$descrip."&fchexp=".$fch;
echo $url;
?>