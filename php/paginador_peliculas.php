<?php

if(!isset($_GET['page'])){
    $pagina=1;
}else{
    $pagina=(int) $_GET['page'];
    if($pagina<=1){
        $pagina=1;
    }
}

//$pagina= strval($pagina);
$url="index.php?vista=main-content&page=";
$registros=12;
$busqueda="";
$num_botones=2;



$inicio = ($pagina>0) ? (($pagina * $registros)-$registros) : 0;
$tabla="";
