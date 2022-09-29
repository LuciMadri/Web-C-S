<?php
include 'View/generales.php';
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

            <form class="form-horizontal templatemo-login-form-2" role="form" action="View/inicio.php" method="post">

                <div class="row">
                    <div class="col-md-12">
                        <h2></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="templatemo-one-signin col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="txtMail" class="control-label">Correo</label>
                                <div class="templatemo-input-icon-container">
                                    <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" id="txtMail" name="txtMail" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="txtPass" class="control-label">Contraseña</label>
                                <div class="templatemo-input-icon-container">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" class="form-control" id="txtPass" name="txtPass" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Ingresar" id="btnIngresar" name="btnIngresar" class="btn btn-warning" onclick="Saludar()">


                            </div>
                        </div>
                    </div>

                </div>

            </form>

        </div>
    </div>


</body>

</html>