<?php
session_start();

if (isset($_SESSION['userBBApp'])) {
    $username = $_SESSION['userBBApp'];
} else {
    $username = "No has iniciado sesion";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('components/headerDoc.php'); ?>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/alertify.css">
    <link rel="stylesheet" href="css/themes/default.css">
    <title>BoomBang - Home</title>
</head>

<body>
    <section id="main">
        <div class=" row container-header">
            <div class="col-6 container-header-usuario">
                <div class="row h-100 d-flex justify-content-start align-items-center">
                    <div class="col-6 container-avatar d-flex-all-center">
                        <img src="img/personajes/gata.png" alt="Personaje gata">
                    </div>
                    <div class="col-6">
                        <h2><?php print($username);?></h2>
                        <p>Description</p>
                    </div>
                </div>
            </div>
            <div class="col-6 container-header-options d-flex-all-center">
                <div class="container-header-option ms-2 me-2"></div>
                <div class="container-header-option ms-2 me-2"></div>
                <div class="container-header-option ms-2 me-2"></div>
            </div>
        </div>
        <div class="row container-body">
            <div id="navegationMenu" class="col-6 d-flex justify-content-start align-items-center flex-wrap">
                <div id="btnJugar" class="container-body-btn d-flex-all-center">
                    <h2>Jugar</h2>
                </div>
                <div id="btnVisitar" class="container-body-btn d-flex-all-center">
                    <h2>Visitar</h2>
                </div> 
                <div id="btnTienda" class="container-body-btn d-flex-all-center">
                    <h2>Tienda</h2>
                </div>
                <div id="btnPerfil" class="container-body-btn d-flex-all-center">
                    <h2>Perfil</h2>
                </div>
            </div>
            <div class="col-6 d-flex-all-center">
                <h2 class="">News</h2>
                <div class="container-body-slider">
                    <div id="carouselNews" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/spa/cienega.png" class="d-block h-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/spa/iceberg.png" class="d-block h-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/spa/tarantula.png" class="d-block h-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselNews" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselNews" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/alertify.js"></script>
    <script src="js/functionality/alerts.js"></script>
    <script src="js/functionality/functions.js"></script>
</body>

</html>