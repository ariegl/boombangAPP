<?php
function validar_cadena($cadena)
{
    $caracteres_especiales = array("'", '"', "+", "?", "¿", "[", "]", "{", "}", " ", "!", "¡", "%", "#", "=", ":", ";");
    $cadena_validada = str_replace($caracteres_especiales, "", $cadena);
    return $cadena_validada;
}
?>