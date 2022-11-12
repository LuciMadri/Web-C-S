<?php
include_once __DIR__ . '\ConnBD.php';

function ValidarCredenciales($cedula, $contrasenna)
{
    $enlace = OpenDB();
    $procedimiento = "CALL ValidarCredenciales('$cedula', '$contrasenna');";
    $datosUsuario = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosUsuario;
}

function ListarUsuarios()
{
    $enlace = OpenDB();
    $procedimiento = "CALL ListarUsuarios();";
    $datosUsuario = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosUsuario;
}

function pConsultarMenu($tipoUsuario)
{
    $enlace = OpenDB();
    $procedimiento = "CALL pConsultarMenu($tipoUsuario);";
    $datosMenu = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datosMenu;
}

function ConsultarDatosUsuarioModel($id)
{
    $enlace = OpenDB();

    $procedimiento = "call ConsultarUsuarioId($id);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function ListarTiposUsuarioModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarTiposUsuario();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function ActualizarUsuarioModel($Nombre,$Contrasenna,$TipoUsuario,$Id,$correo)
{
    $enlace = OpenDB();

    $procedimiento = "call ActualizarUsuario('$Nombre','$Contrasenna',$TipoUsuario,$Id,'$correo');";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}

function CrearUsuarioModel($Cedula, $Contrasenna, $Correo, $Nombre, $TipoUsuario)
{
    $enlace = OpenDB();

    $procedimiento = "call CrearUsuario('$Cedula', '$Contrasenna', '$Correo', '$Nombre', $TipoUsuario);";
    $enlace -> query($procedimiento);

    CloseDB($enlace);
}


?>