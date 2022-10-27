
<?php
require_once('functions.php');

$username = $_POST['username'];
$password = $_POST['password'];

//VALIDAMOS LA INFORMACION
$username_validado = validar_cadena($username);
$password_validado = validar_cadena($password);

//Verificar que los campos no esten vacios
if (!empty($username_validado) && !empty($password_validado)) {

    require_once './dbConnection.php';
    $conexion = createConnection();

    //VALIDAR USERNAME DISPONIBLE
    $searchUser = "SELECT * FROM usuarios WHERE username='$username_validado' AND pass='$password_validado';";
    $search = mysqli_query($conexion, $searchUser);
    $rows = $search->num_rows;

    if ($rows > 0) {
        //CREANDO SESION DE USUARIO
        session_start();
        $_SESSION['userBBApp'] = $username_validado;
        $response = array("response" => "Success", "message" => "Bienvenido " . $username_validado);
    }else{
        $response = array("response" => "Invalid", "message" => "El usuario o la contraseña ingresada no son correctos");
    }

    $conexion->close();
} else {
    $response = array("response" => "Invalid", "message" => "No puede haber campos vacios");
}

echo json_encode($response);
?>
