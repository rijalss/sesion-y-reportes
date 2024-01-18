<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio de session</title>
</head>
<body>
    
<form  method="post">

    <h1>Bienvenido</h1>
    <div class="input-wrapper"> 
            <input type="text" name="nombre" placeholder="Nombre"> 
            <img  class="input-icon" src="name.svg" alt="">
    </div>
    <div class="input-wrapper"> 
            <input type="password" name="password" placeholder="Contraseña">
            <img  class="input-icon" src="images/password.svg" alt="">
     </div>
     <button class="btn" name="iniciar" value="Enviar">Iniciar session</button>
</form>
</body>
</html>