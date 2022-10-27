$("#formLogin").on("submit", function (e) {
  e.preventDefault();
  var username = $("#inputUser").val();
  var password = $("#inputPassword").val();

  if (username != "" && password != "") {
    $.ajax({
      type: "POST",
      url: "utils/login.php",
      dataType: "JSON",
      data: {
        username: username,
        password: password
      },
      beforeSend: function (data) {
        $("#formLogin").addClass("visually-hidden");
        $("#container-spinner").removeClass("visually-hidden");
      },
      success: function (data) {
        if (data.response == "Success") {
          window.location = "home.php";
        } else if (data.response == "Invalid") {
          setTimeout(function () {
            alertNotification(data.response, data.message);
            $("#formLogin").removeClass("visually-hidden");
            $("#container-spinner").addClass("visually-hidden");
          }, 500);
        }
      },
      error: function (xhr, exception) {
        console.log(xhr);
      },
    });
  } else {
    alertNotification("Invalid", "No puedes dejar campos vacios");
  }
});
