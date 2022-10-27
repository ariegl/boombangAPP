
<?php
require_once('functions.php');

$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$correo = $_POST['correo'];

//VALIDAMOS LA INFORMACION
$nombre_validado = validar_cadena_msg($nombre);
$mensaje_validado = validar_cadena_msg($mensaje);
$correo_validado = validar_cadena_msg($correo);

//Verificar que los campos no esten vacios
if (!empty($nombre_validado) && !empty($mensaje_validado) && !empty($correo_validado)) {
    require_once './dbConnection.php';
    $conexion = createConnection();

    $insertMsg = "INSERT INTO contacto (nombre,mensaje,correo) VALUES ('$nombre_validado','$mensaje_validado','$correo_validado');";
    $res = mysqli_query($conexion,$insertMsg);

    if($res){
        $response = array("response" => "Success", "message" => "Se ha enviado tu mensaje correctamente");
    }else{
        $response = array("response" => "Invalid", "message" => "No se pudo enviar el mensaje");
    }

    $conexion->close();
}else{
    $response = array("response" => "Invalid", "message" => "No puede haber campos vacios");
}

echo json_encode($response);

?>