$("#boton-usuarios").on("click", obtenerUsuarios);

function obtenerUsuarios() {
  $.ajax({
    url: "http://localhost/programacionweb2/roberto-rossa/archivosdemo/users.json",
    success: function(respuesta) {

      var listaUsuarios = $("#lista-usuarios");
      $.each(respuesta.data, function(index, elemento) {
        listaUsuarios.append(
            '<div>'
          +     '<p>' + elemento.firstname + ' ' +'</p>'
          + '</div>'
        );    
      });
    },
    error: function() {
      console.log("No se ha podido obtener la información");
    }
  });
}

