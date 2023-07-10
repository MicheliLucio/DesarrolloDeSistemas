<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "icon" href="../../imagenes-HUD/logo.svg">
    <link rel ="stylesheet" href="estilos register/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700;900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirror Loggin</title>
</head>
<body>
    <div id = "caja-loggin">
        <img id = "logo" src="../imagenes-loggin/logo.svg" alt="">
        <p id = "registrate">Registrate</p>
        <form id = "caja-interactiva" method ="POST" >
            <input id = "mail" type="mail" name = "mail" placeholder = "  Ingrese su dirección de correo electrónico...">
            <input id = "nickname" type="text" name = "nickname" placeholder = "  Ingrese un nombre de usuario...">
            <input id = "contraseña" type="password" name = "contraseña" placeholder = " Invéntese una contraseña...">
            <input id = "confirContraseña" type="password" name = "confirContraseña" placeholder = " Confirme esa contraseña...">
            <button id = "boton-register" type = "submit" name = "boton-register">Registrarse</button>
        </form>
        <?php
        include("registrar.php")
        ?>
    </div>
</body>
</html>