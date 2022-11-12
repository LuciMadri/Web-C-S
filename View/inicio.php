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
                <li> <?php echo $_SESSION["sesionNombre"]; ?> <a href="inicio.php"> / Inicio</a></li>
            </ol>

            <div class="templatemo-panels">

                <div class="row">
                    <div class="col-md-3 margin-bottom-15">

                    </div>

                    <div class="col-md-3 margin-bottom-15">

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