/*Logica botón*/

//Atributos

let generoSeleccionado;
let añoSeleccionado;
const socket = io();

//funciones


//function enviarResultados() {

    generoSeleccionado = $("#genero").val();
    añoSeleccionado = $("#año").val();

     // Realizar la solicitud AJAX al servidor para obtener las películas del género seleccionado
     $.ajax({
        type: "GET",
        url: "./php/movie_filter.php", // Reemplaza esto con la ruta correcta a tu script PHP
        data: { 
                genero: generoSeleccionado,
                año: añoSeleccionado},
        success: function(response) {
            // Manejar la respuesta del servidor
            console.log(response);
        },
        error: function(error) {
            console.error("Error en la solicitud AJAX: ", error);
        }
    });
//}

