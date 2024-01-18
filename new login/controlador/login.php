<?php

if(is_file("vista/".$pagina.".php")){
  require_once "modelo/login.php"; // nota:cambiar el login por usuario by Rijals

  $user = new persona;
  
  if (isset($_POST["iniciar"])) {
    $usuario = $_POST["usuario"];
	$clave = $_POST["contrasena"];

    $user->setUsuario($usuario);
	$user->setPassword($clave);

      if($user->validar()){
        $pagina="inicio";
      }
      else{
        echo '<script> alert("usuario o contraseña incorrecto");</script>';
      }


  }



  require_once("vista/".$pagina.".php");
}