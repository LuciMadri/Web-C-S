<?php 
  include 'generales.php';
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
        menu();
    ?>

    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
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
        footer();
    ?>

    <script src="../View/js/jquery.min.js"></script>
    <script src="../View/js/bootstrap.min.js"></script>
    <script src="../View/js/templatemo_script.js"></script>
</body>

</html>