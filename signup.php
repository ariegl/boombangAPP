<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('components/headerDoc.php');
    ?>
    <link rel="stylesheet" href="css/SignUp.css">
    <link rel="stylesheet" href="css/alertify.css">
    <link rel="stylesheet" href="css/themes/default.css">
    <title>Document</title>
</head>

<body>
    <div id="personaje" class="d-flex-all-center container-inicial">
        <div class="container-fluid">
            <h1 class="text-center p-3 user-select-none">Seleccionar personaje</h1>
        </div>
        <div class="row container-principal-personajes">
            <div id="gata" class="col no-select personaje">
                <img src="img/personajes/gata.png" alt="Personaje gata">
            </div>
            <div id="rasta" class="col no-select personaje">
                <img src="img/personajes/rasta.png" alt="Personaje rasta">
            </div>
            <div id="lilian" class="col no-select personaje">
                <img src="img/personajes/lilian.png" alt="Personaje lilian">
            </div>
            <div id="yayo" class="col no-select personaje">
                <img src="img/personajes/yayo.png" alt="Personaje yayo">
            </div>
            <div id="mafi" class="col no-select personaje">
                <img src="img/personajes/mafi.png" alt="Personaje mafi">
            </div>
            <div id="seta" class="col no-select personaje">
                <img src="img/personajes/setaa.png" alt="Personaje seta">
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <a href="#informacion"><input type="button" value="Continuar" class="btn btn-primary pt-2 pb-2 ps-4 pe-4"></a>
        </div>
    </div>
    <div id="informacion" class="container-inicial d-flex justify-content-center align-items-center flex-wrap">
        <div class="row container-fluid">
            <div class="col d-flex justify-content-center align-items-center">
                <img id="viewCharacter" height="400px" src="img/personajes/gata_body.png" alt="">
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <form id="signUpForm" class="contenedor-info-user">
                    <h1 class="pt-2 pb-3 ps-3 w-100 bg-primary text-white">Ya casi terminas!</h1>
                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label fw-bold">Nombre de usuario</label>
                        <input id="txtUsername" type="text" class="form-control" id="FormControlInput1" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label fw-bold">Contraseña</label>
                        <input id="txtPass" type="password" class="form-control" id="FormControlInput1" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label fw-bold">Repetir contraseña</label>
                        <input id="txtRPass" type="password" class="form-control" id="FormControlInput1" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label fw-bold">Email</label>
                        <input id="txtEmail" type="text" class="form-control" id="FormControlInput1" placeholder="" required>
                    </div>
                    <div class="container-fluid mb-3 d-flex-all-center">
                        <input type="submit" value="Registrarme" class="btn btn-primary">
                    </div>
                </form>
                <div id="container-spinner" class="d-flex justify-content-center visually-hidden w-75 flex-wrap">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="w-100 text-center text-primary fw-bold pt-3">Validando</p>
                </div>
            </div>
        </div>
        <div class="container-arrow-up d-flex-all-center">
            <a class="link-primary" href="#personaje"><i class="bi bi-arrow-up-square-fill"></i></a>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/alertify.js"></script>
    <script>
        var contenedorPersonajes = document.querySelector('.container-principal-personajes');
        var personajes = document.querySelectorAll('.personaje');
        var viewCharacter = document.querySelector('#viewCharacter');
        var arrPersonajes = [];
        var selectedCharacter = 1;

        for (var personaje of personajes) {
            arrPersonajes.push(personaje.id);
        }

        contenedorPersonajes.addEventListener('click', function(event) {
            if (arrPersonajes.find(element => element === event.target.parentNode.id)) {

                //Deja todos los personajes en estado NO-seleccionado
                clearAllSelectedCharacter();

                //MOSTRANDO PERSONAJE SELECCIONADO
                event.target.parentNode.classList.add('personaje-seleccionado');
                event.target.parentNode.classList.remove('no-select');

                viewCharacter.src = "img/personajes/" + event.target.parentNode.id + "_body.png";
            } else {
                console.log("no permitido");
            }
        });

        function clearAllSelectedCharacter() {
            personajes.forEach(element => element.classList.remove('personaje-seleccionado'));
            personajes.forEach(element => element.classList.add('no-select'));
        }

        function signupShowMessages(type, message) {
            if (type == "Invalid") {
                if (!alertify.errorAlert) {
                    //define a new errorAlert base on alert
                    alertify.dialog('errorAlert', function factory() {
                        return {
                            build: function() {
                                var errorHeader = '<span class="fa fa-times-circle fa-2x" ' +
                                    'style="vertical-align:middle;color:#e10000;">' +
                                    '</span> Uhh Oh.';
                                this.setHeader(errorHeader);
                            }
                        };
                    }, true, 'alert');
                }

                alertify.errorAlert(message+"<br/><br/><br/>");
            }
        }

        $('#signUpForm').on('submit', function(e) {
            e.preventDefault();
            var username = $('#txtUsername').val();
            var password = $('#txtPass').val();
            var rpassword = $('#txtRPass').val();
            var correo = $('#txtEmail').val();

            if (username != "" && password != "" && rpassword != "" && correo != "") {
                if (password == rpassword) {
                    $.ajax({
                        type: 'POST',
                        url: 'utils/signup.php',
                        dataType: 'JSON',
                        data: {
                            username: username,
                            password: password,
                            rpassword: rpassword,
                            email: correo,
                            personaje: selectedCharacter
                        },
                        beforeSend: function(data) {
                            $('.contenedor-info-user').addClass('visually-hidden');
                            $('#container-spinner').removeClass('visually-hidden');
                        },
                        success: function(data) {
                            if (data.response == "Success") {
                                window.location="home.php";
                            } else if (data.response == "Invalid") {
                                setTimeout(function(){
                                    signupShowMessages(data.response,data.message);
                                    $('.contenedor-info-user').removeClass('visually-hidden');
                                    $('#container-spinner').addClass('visually-hidden');
                                },800);
                            }
                        },
                        error: function(xhr, exception) {
                            console.log(xhr);
                        }
                    });
                } else {
                    signupShowMessages("Invalid","Las contraseñas no coinciden");
                }
            } else {
                signupShowMessages("Invalid","No puedes dejar campos vacios");
            }
        });
    </script>
</body>

</html>