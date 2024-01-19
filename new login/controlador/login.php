<?php

if(is_file("vista/".$pagina.".php")){
  require_once "modelo/login.php"; // nota:cambiar el login por usuario by Rijals

  $user = new persona;
  
  if (isset($_POST["iniciar"])) {
  $usuario = $_POST["nombre"];
	$clave = $_POST["password"];

  $user->setNombre($usuario);
	$user->setPassword($clave);

      if($user->validar()){
      session_start();
      $_SESSION["usuario"]=$user->getNombre();
      $_SESSION["clave"]=$user->getPassword();
      $pagina="inicio";
      }
      else{
        echo '<script> alert("usuario o contraseña incorrecto");</script>';
        require_once("vista/".$pagina.".php");
      }


  }



  require_once("vista/".$pagina.".php");
}