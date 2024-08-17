<?php 

//Manejamos el caso de que la casilla del buscador este vacia para que no devuelva nada.

if(strlen($_POST["buscar"]) > 1 ){
/*if($_POST["buscar"] != ""){*/

    require_once "main.php";

    $buscador = ("SELECT * FROM directorio_peliculas WHERE pelicula_nombre LIKE LOWER('%".$_POST["buscar"]."%')");

    
    $BD_conection2 = conexion();
    $datos_query2 = $BD_conection2->query($buscador);
    $datos2=$datos_query2->fetchall();
    $contador=1;
    $num_elementos_datos2 = count($datos2);
    ?>
    
    
    
    <?php if($datos_query2->rowCount()>0){?> 
        

        <ul class="ListResult">
        
        <?php foreach($datos2 as $row){ 
            
            if($contador === $num_elementos_datos2){ ?>

                <li>
                        
            <?php } else{ ?>

                <li style="border-bottom: 1px solid #f3f3f3;">

            <?php } ?>  

                    <a href="index.php?vista=video_player&pelicula_id=<?php echo $row['peliculas_id']?>">
                        
                        <figure>
                                <img src="./img/movies_img/<?php echo $row["pelicula_nombre"]?>.webp">
                        </figure>

                    
                        <span class="title"><?php echo $row["pelicula_nombre"]?></span>
                    </a>
                
                </li>

            
            <?php $contador++;  } ?>

        </div>

    <?php } 

} ?>




   


