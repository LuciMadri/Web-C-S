<?php
include_once 'ConnBD.php';

function ValidarCredenciales($cedula, $contrasenna)
{
    $enlace = OpenDB();
    $procedimiento = "CALL ValidarCredenciales('$cedula', '$contrasenna');";
    $datosUsuario = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosUsuario;
}

?>