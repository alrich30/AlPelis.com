<div id="posters">

    <?php require_once "./php/main.php";

    include "./php/paginador_peliculas.php";                

    $consulta_datos= "SELECT * FROM `directorio_peliculas` LIMIT $inicio,$registros";
    $consulta_total= "SELECT COUNT(peliculas_id) FROM directorio_peliculas";

    //$peliculas = $BD_conection->query("SELECT * FROM directorio_peliculas ORDER BY pelicula_nombre");

    include "./php/DB_conection.php";

    if($datos_query->rowCount()>0){

        foreach($datos as $row){

            $id_pelicula = $row['peliculas_id'];

            echo
            '<div class="poster">
            <a class="posters-links" href="index.php?vista=video_player&pelicula_id='.$row['peliculas_id'].'">
                <img class="posters-img" src="./img/movies_img/'.$row['pelicula_nombre'].'.webp" alt="poster-img">
                <p>'.reemplazar_simbolo($row['pelicula_nombre']).'</p>
            </a>
            </div>';
        }
    }
    ?>
</div>
        
<?php if($total>=1 && $pagina<=$Npaginas){
    echo paginador_tablas($pagina,$Npaginas,$url,$num_botones);
} ?>