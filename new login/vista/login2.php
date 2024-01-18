<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
      
      <form method="post" >
        <h2>Hola</h2>
        <p>Incia tu registro</p>

        <div class="input-wrapper"> 
            <input type="text" name="name" placeholder="Nombre">
            <img  class="input-icon" src="name.svg" alt="">
        </div>

        <div class="input-wrapper"> 
            <input type="email" name="email" placeholder="Email">
            <img  class="input-icon" src="images/email.svg" alt="">
        </div>

        <div class="input-wrapper"> 
            <input type="text" name="direction" placeholder="Direccion">
            <img  class="input-icon" src="images/direction.svg" alt="">
        </div>

        <div class="input-wrapper"> 
            <input type="tel" name="phone" placeholder="Telefono">
            <img  class="input-icon" src="images/phone.svg" alt="">
        </div>

        <div class="input-wrapper"> 
            <input type="password" name="password" placeholder="Contraseña">
            <img  class="input-icon" src="images/password.svg" alt="">
        </div>

        <input  type="submit" class="btn" name="register" value="Enviar">
      </form>
    
     
</body>
</html>