<?php
    require_once("modelo/conexion.php");

        if(isset($_POST['register'])){
            if(
                strlen($_POST['name']) >= 1 &&
                strlen($_POST['email']) >= 1 &&
                strlen($_POST['direction']) >= 1 &&
                strlen($_POST['phone']) >= 1 &&
                strlen($_POST['password']) >= 1   
                ){ 
                    $name = trim($_POST['name']);
                    $email = trim($_POST['email']);
                    $direction = trim($_POST['direction']);
                    $phone = trim($_POST['phone']);
                    $password = trim($_POST['password']);
                    $fecha = date("d/m/y");
                    $consulta = "INSERT INTO user(nombre, email, direccion, telefono, contraseña, fecha) VALUES ('$name','$email','$direction','$phone','$password','$fecha')";
                    $resultado = mysqli_query($conexion, $consulta);
                    if ($resultado) {
                        ?>
                        <h3 class="sucess" >Tu registro se a completado</h3>
                        <?php
                    } else{
                        ?>
                        <h3 class="error" >UPS! Ocurrio un error</h3>
                        <?php
                    }     
                    
            } else {
                ?>
                   <h3 class="error" >Llena todos los campos</h3>
                <?php
            }
        
     }else{
        require_once "vista/login.php";
     }
          ?>