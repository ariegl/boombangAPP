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
            <h1 class="text-center p-3">Seleccionar personaje</h1>
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
            <a href="#informacion"><input type="button" value="continuar" class="btn btn-primary pt-2 pb-2 ps-4 pe-4"></a>
        </div>
    </div>
    <div id="informacion" class="container-inicial d-flex justify-content-between align-items-center flex-wrap">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <img height="400px" src="img/personajes/gata_body.png" alt="">
            </div>
            <div class="col d-flex justify-content-center align-items-center"></div>
        </div>
    </div>
    <script>
        var personajes = document.querySelectorAll('.personajes');
        var tabla = document.querySelector('.container-principal-personajes');

        tabla.addEventListener('click', function(event) {
            event.target.parentNode.classList.remove('no-select');
            event.target.parentNode.classList.add('personaje-seleccionado');
            var id = event.target.parentNode.id;
            console.log(id);

        });
    </script>
</body>

</html>