<?php
session_start();
session_unset();
session_destroy();
$pagina="login";
if(is_file("controlador/".$pagina.".php")){
    
    require_once("controlador/".$pagina.".php");
    
}


?>