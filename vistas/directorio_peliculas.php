
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

                <select id="año" name="a_z">
                    <option value="">a-z</option>
                    <option value="a">a</option>        
                    <option value="b">b</option>
                    <option value="c">c</option>
                    <option value="d">d</option>
                    <option value="e">e</option>
                    <option value="f">f</option>
                    <option value="g">g</option>
                    <option value="h">h</option>
                    <option value="i">i</option>
                    <option value="j">j</option>
                    <option value="k">k</option>
                    <option value="l">l</option>
                    <option value="m">m</option>
                    <option value="n">n</option>
                    <option value="ñ">ñ</option>
                    <option value="o">o</option>
                    <option value="p">p</option>
                    <option value="q">q</option>
                    <option value="r">r</option>
                    <option value="s">s</option>
                    <option value="t">t</option>
                    <option value="u">u</option>
                    <option value="v">v</option>
                    <option value="w">w</option>
                    <option value="x">x</option>
                    <option value="y">y</option>
                    <option value="z">z</option>
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