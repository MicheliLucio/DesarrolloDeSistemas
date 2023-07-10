<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "icon" href="../imagenes-HUD/logo.svg">
    <link rel ="stylesheet" href="estilos loggin/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700;900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirror Loggin</title>
</head>
<body>
    <div id = "caja-loggin">
        <a href="../index.php"><img id = "logo" src="imagenes-loggin/logo.svg" alt=""></a>
        <p id = "ingresa">INGRESÁ</p>
        <?php
        include("loguearse.php");
        ?>
        <form id = "caja-interactiva" action = "loggin.php" method ="POST" >
            <input id = "mail" type="mail" name = "mail" placeholder = "  Ingrese su dirección de correo electrónico...">
            <input id = "contraseña" type="password" name = "contraseña" placeholder = " Ingrese su contraseña...">
            <button id = "boton-loggin" name = "boton-loggin" type = "submit">Ingresar</button>
            <a id= "boton-registrarse" href="register/register.php">Registrarse...</a>
        </form>
    </div>
</body>
</html>