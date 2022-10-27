
<?php
    require_once('functions.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    $email = $_POST['email'];
    $personaje = $_POST['personaje'];


    //VALIDAMOS LA INFORMACION
    $username_validado = validar_cadena($username);
    $password_validado = validar_cadena($password);
    $email_validado = validar_cadena($email);
    $personaje_validado = validar_cadena($personaje);

    //Verificar que los campos no esten vacios
    if(!empty($username_validado) && !empty($password_validado) && !empty($email_validado) && !empty($personaje_validado))
    {
        if($password_validado == $rpassword){
            require_once './dbConnection.php';
            $conexion = createConnection();

            //VALIDAR USERNAME DISPONIBLE
            $searchUser = "SELECT * FROM usuarios WHERE username='$username_validado';";
            $search = mysqli_query($conexion,$searchUser);
            $rows = $search->num_rows;

            if($rows == 0){

                //VALIDAMOS Y BUSCAMOS EL ID DEL PERSONAJE QUE SELECCIONO EL USUARIO
                $characterSql = "SELECT id FROM personajes WHERE name='$personaje_validado';";
                $res = mysqli_query($conexion,$characterSql);
                $idPersonaje = mysqli_fetch_array($res);

                if($res){
                    //REGISTRAMOS AL USUARIO
                    $sql = "INSERT INTO usuarios (username,pass,email,personaje) VALUES ('$username_validado','$password_validado','$email_validado','$idPersonaje[0]');";
                    $registro = mysqli_query($conexion,$sql);
            
                    if($registro){
                        //CREANDO SESION DE USUARIO
                        session_start();
                        $_SESSION['userBBApp'] = $username_validado;
                        $_SESSION['characterBBApp'] = $personaje_validado;
                        $response = array("response" => "Success","message" => "Bienvenido ".$username_validado);
                    }else{
                        $response = array("response" => "Invalid","message" => "ERROR AL REGISTRAR");
                    }
                }else{
                    $response = array("response" => "Invalid","message" => "Error");
                }
            }else{
                $response = array("response" => "Invalid","message" => "El nombre de usuario no se encuentra disponible");
            }

            $conexion->close();
        }else{
            $response = array("response" => "Invalid","message" => "Las contraseñas no coinciden");
        }
    }else{
        $response = array("response" => "Invalid","message" => "No puede haber campos vacios");
    }
    
    echo json_encode($response);
?>