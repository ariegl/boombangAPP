var contenedorPersonajes = document.querySelector(".container-principal-personajes");
var personajes = document.querySelectorAll(".personaje");
var viewCharacter = document.querySelector("#viewCharacter");
var arrPersonajes = [];
var selectedCharacter = "";

for (var personaje of personajes) {
  arrPersonajes.push(personaje.id);
}

contenedorPersonajes.addEventListener("click", function (event) {
  if (arrPersonajes.find((element) => element === event.target.parentNode.id)) {
    //Deja todos los personajes en estado NO-seleccionado
    clearAllSelectedCharacter();

    //MOSTRANDO PERSONAJE SELECCIONADO
    event.target.parentNode.classList.add("personaje-seleccionado");
    event.target.parentNode.classList.remove("no-select");
    selectedCharacter = event.target.parentNode.id;

    viewCharacter.src =
      "img/personajes/" + event.target.parentNode.id + "_body.png";
  } else {
    console.log("no permitido");
  }
});

function clearAllSelectedCharacter() {
  personajes.forEach((element) =>
    element.classList.remove("personaje-seleccionado")
  );
  personajes.forEach((element) => element.classList.add("no-select"));
}

function signupShowMessages(type, message) {
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

$("#signUpForm").on("submit", function (e) {
  e.preventDefault();
  var username = $("#txtUsername").val();
  var password = $("#txtPass").val();
  var rpassword = $("#txtRPass").val();
  var correo = $("#txtEmail").val();

  if (username != "" && password != "" && rpassword != "" && correo != "") {
    if (password == rpassword) {
      $.ajax({
        type: "POST",
        url: "utils/signup.php",
        dataType: "JSON",
        data: {
          username: username,
          password: password,
          rpassword: rpassword,
          email: correo,
          personaje: selectedCharacter,
        },
        beforeSend: function (data) {
          $(".contenedor-info-user").addClass("visually-hidden");
          $("#container-spinner").removeClass("visually-hidden");
        },
        success: function (data) {
          if (data.response == "Success") {
            window.location = "home.php";
          } else if (data.response == "Invalid") {
            setTimeout(function () {
              signupShowMessages(data.response, data.message);
              $(".contenedor-info-user").removeClass("visually-hidden");
              $("#container-spinner").addClass("visually-hidden");
            }, 800);
          }
        },
        error: function (xhr, exception) {
          console.log(xhr);
        },
      });
    } else {
      signupShowMessages("Invalid", "Las contraseñas no coinciden");
    }
  } else {
    signupShowMessages("Invalid", "No puedes dejar campos vacios");
  }
});
