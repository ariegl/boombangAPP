
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
    date_default_timezone_set("America/Tijuana");
    require_once './dbConnection.php';
    $conexion = createConnection();

    $fecha =  date("Y-m-d H:i:sa");

    $buscaComentario = "SELECT * FROM `contacto` WHERE correo='$correo_validado' AND fechahora > DATE_ADD('$fecha', INTERVAL -3 HOUR);";
    $search = mysqli_query($conexion,$buscaComentario);
    $coincidencias = $search->num_rows;

    if($coincidencias >= 1){
        $response = array("response" => "Invalid", "message" => "Solo puedes enviar comentarios cada 3 horas");
    }else{
        $insertMsg = "INSERT INTO contacto (nombre,mensaje,correo,fechahora) VALUES ('$nombre_validado','$mensaje_validado','$correo_validado','$fecha');";
        $res = mysqli_query($conexion,$insertMsg);
    
        if($res){
            $response = array("response" => "Success", "message" => "Se ha enviado tu mensaje correctamente");
        }else{
            $response = array("response" => "Invalid", "message" => "No se pudo enviar el mensaje");
        }
    }

    $conexion->close();
}else{
    $response = array("response" => "Invalid", "message" => "No puede haber campos vacios");
}

echo json_encode($response);

?>