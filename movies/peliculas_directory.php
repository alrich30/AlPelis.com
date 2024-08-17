<div id="posters">
    <?php 


        //Cargamos los recursos del archivo main con todas sus funciones y variables a la vez que cargamos el paginador.
        require_once "./php/main.php";
        include "./php/paginador_peliculas.php";

        //Creamos un array de $_POST solo con las varialbes que tengan caracteres/letras en ellas
        foreach ($_POST as $clave => $valor) {

            if ($valor !== "") {
                $nuevo_array[$clave] = $valor;

            }
        }

        //Si el array filtrado esta vacio o si no se ha enviado ninguna informacion a traves del selector, mostraremos todas las pelicuulas por orden alfabetico.
        if(!isset($nuevo_array) || $_SERVER["REQUEST_METHOD"] !== "POST"){

            
            $consulta_datos = "SELECT * FROM directorio_peliculas ORDER BY pelicula_nombre ASC LIMIT $inicio,$registros";
            $consulta_total = "SELECT COUNT(peliculas_id) FROM directorio_peliculas";
        }

        //Verificamos si  el formulario se realizó mediante el metodo POST  
        else {


            //Encapsulamos los valores de variable global $_POST en variables para hacer operaciones con ellas
            $datos;
            $generoSeleccionado = $_POST['pelicula_genero'];
            $añoSeleccionado = $_POST['pelicula_año'];
            $imdb_rating = $_POST['calificacion_imdb'];


            //Si los valores que fueron enviados a traves de el formulario coinciden con esta condicional, procederemos con elodigo
            if (in_array($generoSeleccionado, ['','comedia', 'romance', 'acción']) && (in_array($añoSeleccionado, ['','2015', '2016', '2017'])) && (in_array($imdb_rating, ['','6', '7','8','9']))){


                //Si el usuario envió el formulario pero sin ninguna opcion seleccionada ejecutaremos unas consultas SQL que no devuelvan nada
                if($generoSeleccionado == "" && $añoSeleccionado == "" && $imdb_rating == ""){

                    $consulta_datos = "SELECT * FROM directorio_peliculas WHERE 1 = 0";
                    $consulta_total = "SELECT COUNT(*) FROM directorio_peliculas WHERE 1 = 0";
            
                //Por el contrario si se envian consultas con las opciones presentes en el formulario crearemos consultas SQL que devuelvan las
                //carteleras de las peliculas de la base de datos, tambien crearemos una consulta que nos provea la informacion del numero de peliculas
                // que estan siendo enviadas por la base de datos
                } else {
                    
                    $consulta_datos = "SELECT * FROM directorio_peliculas WHERE";
                    $consulta_total = "SELECT COUNT(peliculas_id) FROM directorio_peliculas WHERE";
                    $numeroElementos = count($nuevo_array);
                    $contador = 0;
                    $lastDance = false;
                    

                    foreach($nuevo_array as $clave => $valor){


                        if($contador == ($numeroElementos-1)){
                            $lastDance = true;

                        }

                            if($lastDance == false && strlen($valor) > 3){         

                            
                                $consulta_datos.= " $clave = '$valor' AND"; 
                                $consulta_total.= " $clave = '$valor' AND";
                                $contador++;
                                continue;

            
                            }elseif(strlen($valor) > 3){

                                $consulta_datos.= " $clave = '$valor'"; 
                                $consulta_total.= " $clave = '$valor'";
                                $contador++;
                                continue;
                            }


                            if($lastDance == false && strlen($valor) == 1){

                                $consulta_datos.= " calificacion_imdb BETWEEN $valor AND $valor.9 AND";
                                $consulta_total.= " calificacion_imdb BETWEEN $valor AND $valor.9 AND";
                                
        
                            } elseif(strlen($valor) == 1) {

                                $consulta_datos.= " calificacion_imdb BETWEEN $valor AND $valor.9";
                                $consulta_total.= " calificacion_imdb BETWEEN $valor AND $valor.9";
                                
                            }
                            
                            $contador++;
                        }
                    } 
                } 
        }

        //Incluimos la conexión a la base de datos
        include "./php/DB_conection.php";
                

        if($datos_query->rowCount()>0){


            //Creamos un bucle que se encargue de crear cada una de las carteleras 
            foreach($datos as $row){
                
                
                echo
                '<div class="poster">
                    <a class="posters-links" href="#">
                        <img class="posters-img" src="./img/movies_img/'.$row['pelicula_nombre'].'.webp" alt="poster-img">
                        <p>'.reemplazar_simbolo($row['pelicula_nombre']).'</p>
                    </a>
                </div>
                ';
            }
        }
                
        ?>
    </div>
    
    <!-- Si el formulario se realizó mediante el metodo POST imprimiremos el resultado de nuestra funcion paginador_tablas() con los datos que hemos
    obtenido a traves del archivo main.php --> 
    <?php 
        if($total>=1 && $pagina<=$Npaginas){
            echo paginador_tablas($pagina,$Npaginas,$url,$num_botones);
        } 
          
    ?>