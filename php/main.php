<?php

# Conexión a la base de datos #
function conexion(){
    
    // Intentar crear una instancia de PDO
    $pdo = new PDO('mysql:host=localhost;dbname=alpelis', 'root', '');
    return $pdo;
}

# Reemplazar "_" por ":" en las portadas de las peliculas

function reemplazar_simbolo($cadena){
    $cadena = str_ireplace("_",":", $cadena);
    return $cadena;
}


# Funcion paginador de tablas #
function paginador_tablas($pagina,$Npaginas,$url,$num_botones){
    
    $tabla= '<nav class="pagination">';

    if($pagina<=1){ // Si nos encontramos en la pagina 1, se creara el boton "Anterior" pero estara desactivado.
        $tabla.=
        '<a class="pagination-previous is-disabled" disabled>Anterior</a>
        <div>';

    } else { //En caso contrario hacemos que se muestre el boton "Anterior" y hacemos que al pulsarlo nos lleve a la pagina anterior.
            // Tambien crearemos un boton que nos lleve a la pagina 1.
        $tabla.='
        <a href="'.$url.($pagina-1).'" class="pagination-previous">Anterior</a>
            <div class="pagination-numbers">
                <a class="pagination-link" href="'.$url.'1">1</a><a>...</a>';
    }

    $cb=0;
    for($i=$pagina; $i<=$Npaginas; $i++){ //Este bucle sirve para generar la numeracion de las paginas que tenga la pagina. tambien para mostrar la cantidad de botones que queramos que 
        //se muestren en el centro 

        if($cb==$num_botones){ // Si el creador de botones pasa a ser igual al numero de botones que querramos, salimos del bucle.
            break;
        }
        elseif($pagina==$i){ //Si el contador "$i" y un numero de pagina coinciden, el boton que indica el numero de pagina tendra un color azul, indicando que nos encontramos en esa pagina
            $tabla.='<a class="pagination-link is-current">'.$i.'</a>';

        }else{ //este boton os llevara a la pagina que le sigue a la actual.
            $tabla.='<a class="pagination-link" href="'.$url.$i.'">'.$i.'</a>'; 
        }
        $cb++;
    }

    
    // Condicionales para manejar el caso en que el usuario se encuentre en la ultima pagina, habilitaremos el boton que nos lleve a la primera pagina, seguido de 
    // "...".

    if(($pagina+1) != $Npaginas && $cb != 1){
        $tabla.=
        '<a>...</a><a class="pagination-link" href="'.$url.$Npaginas.'">'.$Npaginas.'</a>';
    } 

    if($pagina==$Npaginas){ //Si nos encontramos en la ultima pagina, ingresamos el botón "Siguiente" pero deshabilitado.
        $tabla.='
        </div>
            <a class="pagination-next is-disabled" disabled>Siguiente</a>
        ';
    } else { // Si no nos encontramos en la ultima pagina ingresamos el botón "Siguiente"
        $tabla.='
        </div>
            <a class="pagination-next" href="'.$url.($pagina+1).'">Siguiente</a>
        ';
    }

    return $tabla;
}

