<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('components/headerDoc.php');
    ?>
    <link rel="stylesheet" href="css/SignUp.css">
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
                <div class="contenedor-info-user">
                    <h1 class="pt-2 pb-3 w-100">Ya casi terminas!</h1>
                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label fw-bold">Nombre de usuario</label>
                        <input type="text" class="form-control" id="FormControlInput1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label fw-bold">Contraseña</label>
                        <input type="text" class="form-control" id="FormControlInput1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label fw-bold">Repetir contraseña</label>
                        <input type="text" class="form-control" id="FormControlInput1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label fw-bold">Email</label>
                        <input type="text" class="form-control" id="FormControlInput1" placeholder="">
                    </div>
                    <div class="container-fluid">
                        <input type="button" value="Registrarme" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-arrow-up d-flex-all-center">
            <a class="link-primary" href="#personaje"><i class="bi bi-arrow-up-square-fill"></i></a>
        </div>
    </div>
    <script>
        var contenedorPersonajes = document.querySelector('.container-principal-personajes');
        var personajes = document.querySelectorAll('.personaje');
        var viewCharacter = document.querySelector('#viewCharacter');
        var arrPersonajes = [];
 
        for (var personaje of personajes) {
            arrPersonajes.push(personaje.id);
        }

        contenedorPersonajes.addEventListener('click', function(event) {
            if (arrPersonajes.find(element => element === event.target.parentNode.id)){

                //Deja todos los personajes en estado NO-seleccionado
                clearAllSelectedCharacter();

                event.target.parentNode.classList.add('personaje-seleccionado');
                event.target.parentNode.classList.remove('no-select');

                viewCharacter.src = "img/personajes/"+event.target.parentNode.id+"_body.png";
            } else {
                console.log("no permitido");
            }
        });
        
        function clearAllSelectedCharacter(){
            personajes.forEach(element => element.classList.remove('personaje-seleccionado'));
            personajes.forEach(element => element.classList.add('no-select'));
        }
    </script>
</body>

</html>