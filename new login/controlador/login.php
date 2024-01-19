<?php

if(is_file("vista/".$pagina.".php")){
  require_once "modelo/login.php"; // nota:cambiar el login por usuario by Rijals

  $user = new persona;
  
  if (isset($_POST["iniciar"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["password"])){
      
  $usuario = $_POST["nombre"];
	$clave = $_POST["password"];

  $user->setNombre($usuario);
	$user->setPassword($clave);

  if($user->validar()){
      session_start();
      $algo=$user->validar();

      $_SESSION["usuario"]=$algo["nombre"];
      $_SESSION["apellido"]=$algo["apellido"];

    if($algo["perfil"]==2){
      $_SESSION["perfil"]="adminisrador";
    }else{
      $_SESSION["perfil"]="usuario";
    }

    $pagina="inicio";
    
  }else{
        echo '<div class="error"><h3>Nombre o contraseña incorrecto </h3></div>';
        
      }
    }else{
      echo '<div class="error"><h3>Los campos se encuentran vacios </h3></div>';
      
    }

  }



  require_once("vista/".$pagina.".php");
}