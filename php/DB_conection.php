<?php 

$BD_conection = conexion();
$datos_query = $BD_conection->query($consulta_datos);
$total = $BD_conection->query($consulta_total);
$datos=$datos_query->fetchAll();
$total = (int) $total->fetchColumn();
$Npaginas =ceil($total/$registros);


