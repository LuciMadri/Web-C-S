<?php 
  include_once 'View/generales.php';
  include_once 'Controller/UsuariosController.php';
?>

<!DOCTYPE html>

<head>
    <?php 
        headerLogin();
    ?>
</head>

<body class="templatemo-bg-image-1">
    <div class="container">
        <div class="col-md-12">

            <form class="form-horizontal templatemo-login-form-2" role="form" action="" method="post">

                <div class="row">
                    <div class="col-md-12">
                        <h2></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="templatemo-one-signin col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="lblIdentificacion" class="control-label">Identificación</label>
                                <div class="templatemo-input-icon-container">
                                    <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" 
                                    placeholder="" onblur="ValidarDatos();">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="lblPass" class="control-label">Contraseña</label>
                                <div class="templatemo-input-icon-container">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" class="form-control" id="txtPass" name="txtPass"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Ingresar" id="btnIngresar" name="btnIngresar"
                                    class="btn btn-warning">
                            </div>
                        </div>
                    </div>

                </div>

            </form>

        </div>
    </div>

    <?php 
        footerLogin();
    ?>
    <script src="../View/js/login.js"></script>

</body>

</html>
