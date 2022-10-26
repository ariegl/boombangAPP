<?php
    function createConnection(){
        $conexion = mysqli_connect("localhost","root","","boombangapp");
        if(!$conexion)
        {
            return null;
        }else{
            return $conexion;
        }
    }
?>