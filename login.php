<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('components/headerDoc.php');
    ?>
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/alertify.css">
    <link rel="stylesheet" href="css/themes/default.css">
    <title>BoomBangAPP - Login</title>
</head>

<body>
    <div class="container-fluid contenedor-principal d-flex-all-center">
        <div class="row main-container d-flex-all-center">
            <div class="col-lg-6 col-md-5 col-sm-12 col-12 d-flex-all-center">
                <img src="img/team.png" class="img-personajes" alt="imagen de boombang">
            </div>
            <div id="info-section" class="col-lg-6 col-md-7 col-sm-12 col-12 d-flex-all-left">
                <div class="card-login d-flex-all-center">
                    <div class="card-login-header">
                        <h1 class="text-white ps-4 pe-4 pt-3 pb-3 text-center card-login-header-title">Iniciar sesion</h1>
                    </div>
                    <form id="formLogin" class="card-login-body-container d-flex-all-center">
                        <div class="card-login-body-info d-flex-all-center">
                            <label for="inputUser" class="form-label mt-3 fw-bold">Usuario</label>
                            <input type="text" id="inputUser" class="form-control mb-3">
                            <label for="inputPassword" class="form-label mt-1 fw-bold">Contraseña</label>
                            <input type="password" id="inputPassword" class="form-control mb-3">
                            
                        </div>
                        <div class="card-login-body-action row d-flex-all-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 card-login-body-action-signup d-flex-all-center">
                                <span class="text-center">¿Aun no tienes cuenta?<br><a href="signup.php">Crear una cuenta</a></span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 container-login-body-action-login d-flex-all-right">
                                <input class="btn btn-primary mt-3 mb-4 btnEntrar" type="submit" value="Entrar">
                            </div>
                        </div>
                    </form>
                    <?php
                        include('components/spinner.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/alertify.js"></script>
    <script src="js/functionality/alerts.js"></script>
    <script src="js/login.js"></script>
</body>

</html>