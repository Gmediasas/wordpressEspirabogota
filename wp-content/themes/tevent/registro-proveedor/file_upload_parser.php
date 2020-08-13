<?php
 
$file = fopen("dataRegistros.txt", "a");
 
$cadena= $_POST['data'];
$array = explode(",", $cadena);

$value=str_replace(",", ";", $cadena);
fwrite($file,$value. PHP_EOL);
 

fclose($file);

 
?>