<?php 

if (session_status() == PHP_SESSION_NONE)
    session_start();

include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\..\Controller\UsuariosController.php';
?>

<!DOCTYPE html>

<head>
    <?php 
        headerSite();
    ?>
</head>

<body onsubmit="return CompararClaves();">
<form action="" method="post">

    <?php 
        navBar();
    ?>

    <?php 
        CargarMenu();
    ?>

    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <ol class="breadcrumb">
                <li> <?php echo $_SESSION["sesionNombre"]; ?> <a href="MantUsuarios.php"> / Usuarios</a></li>
            </ol>

            <div class="templatemo-panels">

                <br/><br/>

                <div class="row">
                    <div class="col-md-1 margin-bottom-15">
                    </div>
                    <div class="col-md-3 margin-bottom-15">
                        <label for="lblCedula" class="control-label">Identificación</label>
                        <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion">
                    </div>

                    <div class="col-md-3 margin-bottom-15">
                        <label for="lblNombre" class="control-label">Nombre</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                    </div>

                    <div class="col-md-3 margin-bottom-15">
                        <label for="lblCorreo" class="control-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="txtCorreo" name="txtCorreo">
                    </div>

                    <div class="col-md-1 margin-bottom-15">
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-1 margin-bottom-15">
                    </div>
                    <div class="col-md-3 margin-bottom-15">
                        <label for="lblTipoUsuario" class="control-label">Tipo de Usuario</label>
                        <select class="form-control" id="cboTipoUsuario" name="cboTipoUsuario" required>
                                <?php 
                                ListarTiposUsuario($datos["tipoUsuario"]); 
                                ?>
                            </select>
                    </div>
                

                    <div class="col-md-3 margin-bottom-15">
                        <label for="lblContrasenna" class="control-label">Contraseña</label>
                        <input type="password" class="form-control" id="txtContrasenna" name="txtContrasenna">
                    </div>

                    <div class="col-md-3 margin-bottom-15">
                        <label for="lblConfirmarContrasenna" class="control-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="txtConfirmarContrasenna" name="txtConfirmarContrasennna">
                    </div>
                    <div class="col-md-1 margin-bottom-15">
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-8 margin-bottom-15">
                    </div>

                    <div class="col-md-3 margin-bottom-15">
                        <input type="submit" href="MantUsuarios.php" class="btn btn-info" value="Procesar" id="btnAgregar" name="btnAgregar">

                        <a href="MantUsuarios.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                    </div>

                    <div class="col-md-1 margin-bottom-15">
                    </div>
                </div>


            </div>
        </div>
    </div>

    <?php 
        modal();
    ?>

    <?php 
        footerSite();
    ?>

    <script src="js/usuarios.js"></script>


</form>
</body>
</html>