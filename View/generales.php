<?php 

  function headerLogin()
  {
    echo '<title>Título</title>
          <meta name="keywords" content="" />
          <meta name="description" content="" />
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
          <link href="../View/css/font-awesome.min.css" rel="stylesheet" type="text/css">
          <link href="../View/css/bootstrap.min.css" rel="stylesheet" type="text/css">
          <link href="../View/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
          <link href="../View/css/bootstrap-social.css" rel="stylesheet" type="text/css">	    
          <link href="../View/css/templatemo_style.css" rel="stylesheet" type="text/css">';
  }

  function headerSite()
  {
    echo '<title>Título</title>
          <meta name="keywords" content="" />
          <meta name="description" content="" />
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
          <link href="../View/css/font-awesome.min.css" rel="stylesheet" type="text/css">
          <link href="../View/css/bootstrap.min.css" rel="stylesheet" type="text/css">
          <link href="../View/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
          <link href="../View/css/bootstrap-social.css" rel="stylesheet" type="text/css">	    
          <link href="../View/css/templatemo_main.css" rel="stylesheet" type="text/css">
          <link href="../View/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">'; 
  }

  function navBar()
  {
    echo '<div class="navbar navbar-inverse" role="navigation">
				  <div class="navbar-header">
					<div class="logo"><h1>Título</h1></div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button> 
				  </div>   
				  </div>';
  }

  function modal()
  {
    
    include_once __DIR__ . '\..\Controller\UtilitariosController.php';

    echo '<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>¿Está seguro que quiere cerrar sesión?</h4>
              </div>
              <div class="modal-footer">
                <form action="" method="post">
                  <input type="submit" value="Sí" id="btnCerrar" name="btnCerrar" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
        </div>';

  }

  function footerSite()
  {
      echo '<footer class="templatemo-footer" >
            <div class="templatemo-copyright">
            <p>Derechos Reservados &copy;</p>
            </div>
            </footer>
            <script src="../View/js/jquery.min.js"></script>
            <script src="../View/js/bootstrap.min.js"></script>
            <script src="../View/js/templatemo_script.js"></script>
            <script src="../View/js/jquery.dataTables.min.js"></script>
            <script src="../View/js/dataTables.bootstrap4.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>'; 
  }

  function footerLogin()
  {
      echo '<script src="../View/js/jquery.min.js"></script>
            <script src="../View/js/bootstrap.min.js"></script>'; 
  }

?>