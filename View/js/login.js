// Vamos a consumir un API
// Hay dos formas, una con JS y otra con JQuery
// Ajax permite consumir un API pero con JQuery
$(document).ready(function () {
  HabilitarBoton(true);
});

function ValidarDatos() {

  // Trim elimina los espacion en blanco/vacios
  // El # es para las variables
  let identificacion = $("#txtIdentificacion").val().trim();

  if (identificacion != "") {

    // Estos es una Ajax
    $.ajax({
      // Optenemos datos con get
      type: "GET",
      // Aqui ponemos la ruta de donde vamos a obtener esos datos
      // Obtenemos info de la variable
      url: "https://apis.gometa.org/cedulas/" + identificacion,

      // Data sirve para pasar datos en un body
      data: {},

      // Tipo de la respuesta del llamado 
      datatype: "json",

      success: function (response) {

        //Si no existe desahibilitar el btn ingresar
        if (response.resultcount == undefined || response.resultcount == 0) {
          HabilitarBoton(true);
        } else {
          HabilitarBoton(false);
        }
      },
    });
  }
}

function HabilitarBoton(flag) {
  $("#btnIngresar").prop("disabled", flag);
}
