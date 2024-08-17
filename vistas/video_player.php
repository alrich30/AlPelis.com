<div class="background-cover"></div>
<div class="video_info">
    <div class="frontpage">
        
        <?php 
            require_once "./php/main.php";

            $id_pelicula = $_GET['pelicula_id'];
            $consulta_datos= "SELECT pelicula_nombre, pelicula_año, actor_1, actor_2, actor_3, director, pais, calificacion_imdb, descripcion FROM `directorio_peliculas` WHERE peliculas_id = '$id_pelicula';";

            $BD_conection = conexion();
            $datos_query = $BD_conection->query($consulta_datos);
            $datos=$datos_query->fetch();

            echo '<img class="posters-img2" src="./img/movies_img/'.$datos['pelicula_nombre'].'.webp" alt="poster-img">
    </div>
        
        
        <div class="about_movie">
            

                <h1>'.reemplazar_simbolo($datos['pelicula_nombre']).'</h1>

                <div class="movie_description">
                    <p> 
                        '.$datos['descripcion'].'
                    </p>
                </div>
                <ul class="movie_info">
                    <li>Actores:    <a href="#">'.$datos['actor_1'].'</a>, <a href="#">'.$datos['actor_2'].'</a>, <a href="#">'.$datos['actor_3'].'</a></li>
                    <li>Director:   <a href="#">'.$datos['director'].'</a></li>
                    <li>Pais:   <a href="#">'.$datos['pais'].'</a></li>
                    <li>Fecha de estreno:   <a href="#">'.$datos['pelicula_año'].'</a></li>
                    <li>Calificacion IMDB:  <a href="#">'.$datos['calificacion_imdb'].'</a></li>
                </ul>
            
    </div>
    
    <div class="video_container">
        <!--<img class="video_border" src="./img/video_border.jpg" alt="caca">-->
        <iframe class="video" src="https://filemoon.sx/e/yg0uxy3bia5z" frameborder="0"></iframe>
    </div>
    ';?>
     
    