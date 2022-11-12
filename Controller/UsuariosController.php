<?php

if (session_status() == PHP_SESSION_NONE)
    session_start();

include_once __DIR__ . '\..\Model\UsuariosModel.php';
include_once __DIR__ . '\UtilitariosController.php';

if(isset($_POST["btnIngresar"]))
{
    $cedula = $_POST["txtIdentificacion"];
    $contrasenna = $_POST["txtPass"];

    $datosUsuario = ValidarCredenciales($cedula, $contrasenna);

    if($datosUsuario -> num_rows > 0)
    {
        $resultado = mysqli_fetch_array($datosUsuario);

        $_SESSION["sesionNombre"] = $resultado["nombre"];
        $_SESSION["sesionTipoUsuario"] = $resultado["tipoUsuario"];
        header("Location: View\inicio.php");
    }
    else
    {
        header("Location: ..\index.php");
    }
}

function CargarUsuarios()
{
    $datosUsuarios = ListarUsuarios();

    if($datosUsuarios -> num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($datosUsuarios))
        {
            echo "<tr>";
            echo "<td>" . $resultado["cedula"] . "</td>";
            echo "<td>" . $resultado["nombre"] . "</td>";
            echo "<td>" . $resultado["correo"] . "</td>";
            echo "<td>" . $resultado["descripcion"] . "</td>";
            echo "<td>" . $resultado["descripcionEstado"] . "</td>";
            echo '<td>
                    <a class="btn btn-primary" href="mantUsuariosEditar.php?q=' . $resultado["id"] . '">Editar<a/>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#confirmDelete" data-backdrop="static" data-keyboard="false">Inactivar</a>
                 </td>';
            echo "</tr>";
        }
    }
}

function CargarMenu()
{
    if($_SESSION["sesionTipoUsuario"] == null)
        header("Location: ..\index.php");

    $datosMenu = pConsultarMenu($_SESSION["sesionTipoUsuario"]);

    if($datosMenu -> num_rows > 0)
    {
        echo '<div class="template-page-wrapper">
              <div class="navbar-collapse collapse templatemo-sidebar">
              <ul class="templatemo-sidebar-menu">';

        while($resultado = mysqli_fetch_array($datosMenu))
        {
            echo '<li><a href="' . $resultado["redireccion"] . '"><i class="' . $resultado["icono"] . '"></i>' . $resultado["texto"] . '</a></li>';
        }

        echo '<li><a href="" data-toggle="modal" data-target="#confirmModal" data-backdrop="static" data-keyboard="false"><i class="fa fa-sign-out"></i>Cerrar Sesión</a></li>
              </ul>
              </div>';
    }
}

function ConsultarDatosUsuario($id)
{
    $datos = ConsultarDatosUsuarioModel($id);   
    return mysqli_fetch_array($datos);
}

function ListarTiposUsuario($tipo)
{
    $datos = ListarTiposUsuarioModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione... </option>';

        while($fila = mysqli_fetch_array($datos))
        {
            if($tipo == $fila["tipoUsuario"])
                echo '<option selected value="' . $fila["tipoUsuario"] . '">' . $fila["descripcion"] . '</option>';
            else
                echo '<option value="' . $fila["tipoUsuario"] . '">' . $fila["descripcion"] . '</option>';
        }
    }
}

if(isset($_POST["btnActualizar"]))
{
    $Nombre = $_POST["txtNombre"];
    $Contrasenna = $_POST["txtContrasenna"];
    $TipoUsuario = $_POST["cboTipoUsuario"];
    $Id = $_POST["txtId"];
    $Correo = $_POST["txtCorreo"];

    ActualizarUsuarioModel($Nombre, $Contrasenna, $TipoUsuario, $Id, $Correo); 
    EnviarCorreo($Correo, 'Actualización de Datos', 'Estimad@ ' . $Nombre . '. Sus datos han sido actualizados correctamente'); 
    header("Location: MantUsuarios.php");  
}

if(isset($_POST["btnAgregar"]))
{
    $Cedula = $_POST["txtIdentificacion"];
    $Nombre = $_POST["txtNombre"];
    $TipoUsuario = $_POST["cboTipoUsuario"];
    $Correo = $_POST["txtCorreo"];
    $Contrasenna = $_POST["txtContrasenna"];

    CrearUsuarioModel($Cedula, $Contrasenna, $Correo, $Nombre, $TipoUsuario); 

}
?>