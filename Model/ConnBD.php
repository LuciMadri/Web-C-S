<?php

function OpenBD(){
    return mysqli_connect("127.0.0.1:3308", "root", "", "dbviernes");
}

function CloseBD($enlace){
    
    mysqli_close($enlace);
}

?>