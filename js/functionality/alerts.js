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
}
