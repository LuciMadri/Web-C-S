<?php
include 'Controller/ConnBD.php';

function ValidarCredenciales(){
    
    $enlace = OpenBD();

    CloseBD($enlace);
}

?>