<?php 

  function headerLogin()
  {
    echo '<title>Título</title>
          <meta name="keywords" content="" />
          <meta name="description" content="" />
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
          <link href="View/css/font-awesome.min.css" rel="stylesheet" type="text/css">
          <link href="View/css/bootstrap.min.css" rel="stylesheet" type="text/css">
          <link href="View/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
          <link href="View/css/bootstrap-social.css" rel="stylesheet" type="text/css">	    
          <link href="View/css/templatemo_style.css" rel="stylesheet" type="text/css">
          <link href="View/css/templatemo_script.jss" rel="stylesheet" type="text/js">';
  }

  function headerSite()
  {
    echo '<title>Título</title>
          <meta name="keywords" content="" />
          <meta name="description" content="" />
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
          <link href="View/css/font-awesome.min.css" rel="stylesheet" type="text/css">
          <link href="View/css/bootstrap.min.css" rel="stylesheet" type="text/css">
          <link href="View/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
          <link href="View/css/bootstrap-social.css" rel="stylesheet" type="text/css">	    
          <link href="../View/css/templatemo_main.css" rel="stylesheet" type="text/css">'; 
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

  function menu()
  {
    echo '<div class="template-page-wrapper">
	  		  <div class="navbar-collapse collapse templatemo-sidebar">
					<ul class="templatemo-sidebar-menu">
					  <li><a href="A.php"><i class="fa fa-home"></i>Opción A</a></li>
					  <li><a href="B.php"><i class="fa fa-users"></i>Opción B</a></li>
					  <li><a href="C.php"><i class="fa fa-users"></i>Opción C</a></li>
					  <li><a href="" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Cerrar Sesión</a></li>
					</ul>
				  </div>';
	}

  function modal()
  {
    echo '<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>¿Está seguro que quiere cerrar sesión?</h4>
              </div>
              <div class="modal-footer">
                <a href="" class="btn btn-primary">Sí</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              </div>
            </div>
          </div>
        </div>';    
  }

  function footer()
  {
      echo '<footer class="templatemo-footer" >
            <div class="templatemo-copyright">
            <p>Derechos Reservados &copy;</p>
            </div>
            </footer>';
  }
    
?>