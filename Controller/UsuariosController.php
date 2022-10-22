<?php
session_start();
include_once 'Model/UsuariosModel.php';

if(isset($_POST["btnIngresar"]))
{
    $cedula = $_POST["txtIdentificacion"];
    $contrasenna = $_POST["txtPass"];

    $datosUsuario = ValidarCredenciales($cedula, $contrasenna);

    if($datosUsuario -> num_rows > 0)
    {
        $_SESSION["sesionNombre"] = "Eduardo";
        header("Location: View\inicio.php");
    }
    else
    {
        header("Location: index.php");
    }
}

?>