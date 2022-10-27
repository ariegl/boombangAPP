function alertNotification(type, message) {
  if (type == "Invalid") {
    if (!alertify.errorAlert) {
      //define a new errorAlert base on alert
      alertify.dialog(
        "errorAlert",
        function factory() {
          return {
            build: function () {
              var errorHeader =
                '<span class="fa fa-times-circle fa-2x" ' +
                'style="vertical-align:middle;color:#e10000;">' +
                "</span> Uhh Oh.";
              this.setHeader(errorHeader);
            },
          };
        },
        true,
        "alert"
      );
    }

    alertify.errorAlert(message + "<br/><br/><br/>");
  }

  if (type == "successMessage") {
    if (!alertify.successAlert) {
      //define a new errorAlert base on alert
      alertify.dialog(
        "successAlert",
        function factory() {
          return {
            build: function () {
              var successHeader =
                '<span class="" ' + '</span> Completo';
              this.setHeader(successHeader);
            },
          };
        },
        true,
        "alert"
      );
    }

    alertify.successAlert(message + "<br/><br/><br/>  Gracias por tus sugerencias!!");
  }
}
