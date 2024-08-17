function buscar_ahora(buscar){
    var parametros = {"buscar":buscar};
    $.ajax({
        data: parametros,
        type: "POST",
        url: "./php/buscador.php",
        success: function(data){
        document.getElementById("card-body").innerHTML = data;
        
        }
    });
}
