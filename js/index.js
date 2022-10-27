$("#formContact").on("submit", function (e) {
    e.preventDefault();
    var nombre = $("#txtNombre").val();
    var mensaje = $("#txtMensaje").val();
    var correo = $("#txtCorreo").val();
  
    if (nombre != "" && mensaje != "" && correo != "") {
      $.ajax({
        type: "POST",
        url: "utils/spaContact.php",
        dataType: "JSON",
        data: {
          nombre: nombre,
          mensaje: mensaje,
          correo: correo
        },
        beforeSend: function (data) {

        },
        success: function (data) {
          if (data.response == "Success") {
            clearForm("formContact");
            alertNotification("successMessage",data.message);
          } else if (data.response == "Invalid") {
            alertNotification(data.response, data.message);
          }
        },
        error: function (xhr, exception) {

        },
      });
    } else {
      alertNotification("Invalid", "No has llenado los campos");
    }
  });