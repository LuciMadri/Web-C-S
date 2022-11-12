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

<body>

    <?php
    navBar();
    ?>

    <?php
    CargarMenu();
    ?>

    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <ol class="breadcrumb">
                <li> <?php echo $_SESSION["sesionNombre"]; ?> / <a href="inicio.php"> Inicio</a></li>
            </ol>

            <div class="templatemo-panels">

                <div class="pull-right">
                    <a href="MantUsuariosAgregar.php"><button type="button" class="btn btn-info">Añadir Usuario</button></a>
                </div>

                <br /><br /><br />

                <div class="row">
                    <div class="col-md-12 margin-bottom-15">

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Cédula</th>
                                    <th>Nombre</th>
                                    <th>Correo Electrónico</th>
                                    <th>Tipo Usuario</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                CargarUsuarios();
                                ?>

                            </tbody>
                        </table>

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

</body>

</html>

<!-- Modal -->
<div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>¿Está seguro que quiere inactivar el usuario?</h4>
            </div>
            <div class="modal-footer">

                <input type="submit" value="Sí" id="btnCerrar" name="btnCerrar" class="btn btn-primary">

            </div>
        </div>
    </div>
</div>