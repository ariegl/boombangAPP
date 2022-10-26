
<?php
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $escuela = $_POST['escuela'];
    $carrera = $_POST['carrera'];
    $tipoServicio = $_POST['tipoServicio'];
    $turno = $_POST['turno'];
    $totalHoras = $_POST['totalHoras'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaFin = $_POST['fechaFin'];

    function validar_cadena($cadena){
        $caracteres_especiales = array("'",'"',"+","-","?","¿","[","]","{","}"," ","!","¡","%","#","=",":",";");
        $cadena_validada = str_replace($caracteres_especiales,"",$cadena);
        return $cadena_validada;
    }

    //VALIDAMOS LA INFORMACION
    $nombre_validado = validar_cadena($nombre);
    $ap_paterno_validado = validar_cadena($apellidoPaterno);
    $ap_materno_validado = validar_cadena($apellidoMaterno);
    $edad_validado = validar_cadena($edad);
    $escuela_validado = validar_cadena($escuela);
    $carrera_validado = validar_cadena($carrera);
    $tipoServicio_validado = validar_cadena($tipoServicio);
    $turno_validado = validar_cadena($turno);
    $totalHoras_validado = validar_cadena($totalHoras);

    $nombre_completo = "" . $nombre_validado . " " . $ap_paterno_validado . " " . $ap_materno_validado;

    //Verificar que los campos no esten vacios
    if(!empty($nombre))
    {
        include 'dbConnection.php';
        $conexion = createConnection();

        $registrarPrestador =  "CALL RegistrarNuevoPrestador('$nombre_completo', '$genero','$edad_validado','$turno_validado', '$tipoServicio_validado', '$totalHoras_validado', '$fechaInicio', '$fechaFin', '$escuela_validado', '$carrera_validado')";
        $registro = mysqli_query($mysqli,$registrarPrestador);

        if($registrarPrestador){
            $response = array("response" => "Success");
        }else{
            $response = array("response" => "Invalid","message" => "ERROR AL REGISTRAR");
        }
        
        echo json_encode($response);
    }
    
?>