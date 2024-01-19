



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
</head
<body>
 
    <div class="containers">
    <div id="caja" ><center><h1>Bienvenido <?php echo $_SESSION["usuario"]." ".$_SESSION["apellido"]." eres un ".$_SESSION["perfil"];?></h1></center></div>
        <div class="navigation">
        
            <ul>
               
                <li>
                    <a href="?pagina=inicio">
                        <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                            
                        </span>
                        <span class="title">Inicio</span>
                    </a>
                </li>

                <li>
                    <a href="?pagina=inicio">
                        <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Usuarios</span>
                    </a>
                </li>
                <?php if($_SESSION["perfil"] == "administrador"){?>
                <li>
                    <a href="?pagina=usuario">
                        <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Administrador</span>
                    </a>
                </li>
                <?php }?>
                <li>
                    <a href="?pagina=cerrarsesion">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Salir</span>
                    </a>
                </li>
            </ul>
        </div>

</body>
</html>