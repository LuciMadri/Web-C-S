<?php
include 'Model/UsuariosModel.php';

// Si alguien hizo un post a ese btn 
if(isset($_POST["btnIngresar"]))
{

    ValidarCredenciales();
}

?>