
<div class="background-cover"></div>


    <div class="directory">
        
        <div id="directory-title">
            <img src="./img/iconos/scream-icon.png"><h2> Lista de peliculas</h2>
        </div>
        
        
        <form action="" method="post">

            <div id="directory-categories">
            


                <select id="genero" name="pelicula_genero">
                    <option value="">Genero</option>
                    <option value="comedia">Comedia</option>
                    <option value="romance">Romance</option>
                    <option value="acción">Acción</option>
                </select>

                <select id="año" name="pelicula_año">
                    <option value="">Año</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                </select>


                <select id="año" name="calificacion_imdb">
                    <option value="">Rating</option>
                    <option value="6">6.0 a 6.9</option>        
                    <option value="7">7.0 a 7.9</option>
                    <option value="8">8.0 a 8.9</option>
                    <option value="9">9.0 a 9.9</option>
                </select>

                
                    
                <button type="submit">
                    elija
                    
                </button>
            </div>
            
        </form>

        
        <hr/>

        <div class="main-content">

            <?php include "./movies/peliculas_directory.php"?>

        </div>

    </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.2/socket.io.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="./js/fixed.js"></script>
<script src="./js/formularioAjax.js"></script>
</body>
</html>