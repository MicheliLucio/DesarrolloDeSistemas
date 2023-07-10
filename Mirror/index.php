<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel = "icon" href="imagenes-HUD/logo.svg">
    <link rel ="stylesheet" href="estilos/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700;900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirror</title>
</head>
<body>
    <div id="homepage">
        <div id="barra-superior">
            <div id = "logoMirror">
                <a href="index.php"><img src="imagenes-HUD/logo.svg" alt=""></a>
            </div>
            <div id="barraBusqueda">
                <div id="lupita">
                    <img src="imagenes-HUD/Vector.svg" alt="">

                </div>
                <div id="textocaja">
                    <input id="busquedatexto" placeholder = "Buscá juegos, géneros..." type="text">
                </div>

            </div>
            
        </div>
        <div id ="barra-lateral">
                <?php
                    if (!empty($_SESSION["foto"])) {
                        $rutaFoto = $_SESSION["foto"];
                        echo '<a id = "boton-salir" href="loggin/unlog.php">SALIR</a>';
                    }else{
                        $rutaFoto = 'imagenes-HUD/foto.svg';
                    }
                    echo '<a href="loggin/loggin.php"><img id="foto-usuario" src="'.$rutaFoto.'" alt=""></a>'
                ?>
                
                <img id="linea-divisoria" src="imagenes-HUD/linea.png" alt="">
                <img id="juego-logo" src="imagenes-HUD/logo juegos.svg" alt="">
                <img id="herramienta-logo" src="imagenes-HUD/logo config.svg" alt="">
                <img id="nube-logo" src="imagenes-HUD/logo subir.svg" alt="">
                <img id="interrogacion-logo" src="imagenes-HUD/abt us.svg" alt="">
        </div>
        <a href = "links-juegos/DOOM.php" id="noticias">
            <img id = "imagenNoticia" src="imagenes-Noticias/imagen-juego.png" alt="">
            <div id="datosNoticia">
                <div id="perfilNoticia"> 
                    <img id = "ppNoticia" src="imagenes-Noticias/foto-usuario.png" alt="">
                    <h1 id = "tituloNoticia">DOOM</h1>
                    <h4 id = "usuarioNoticia">Aporte de Ernesto Mate</h4>
                    <h4 id = "pesoDelJuego">2.250KB...→</h4>


                </div>
                    <p id= "descNoticia">Estás aquí por una razón. La enorme instalación de investigación de la UAC en Marte ha sido arrasada por poderosos y agresivos demonios, y solo una persona se interpone entre su mundo y el nuestro. Eres un marine de DOOM, estás solo y te han movilizado con un único fin: matarlos a todos.</p> 
            </div>
                
        </a>
        <h1 id = "tituloDeJuego1"> CLÁSICOS DE MIRROR · · · → </h1>
        <a href = "links-juegos/half-life.php" id = "contenedorJuego">
            <img id = "imagen-juego" src="imagenes-juegos/bm 1.png" alt="">
            <h2 id = "tituloJuego"> HALF LIFE</h2>
        </a>
        <h1 id = "tituloDeJuego2">DE LUTO POR FLASH PLAYER · · · →</h1>
        <a  href = "links-juegos/papas.php" id = "contenedorJuego2">
            <img id = "imagen-juego2"src="imagenes-juegos/foto papas.png" alt="">
            <h2 id = "tituloJuego2">PAPA LOUIE (COMPLETE EDITION)</h2>
        </a>
        <h1 id = "tituloDeJuego3">RPGs · · · →</h1>
        <a href = "links-juegos/isaac.php" id = "contenedorJuego3">
            <img id = "imagen-juego3"src="imagenes-juegos/isaac portada.png" alt="">
            <h2 id = "tituloJuego3">THE BINDING OF ISAAC (REPENTANCE)</h2>
        </a>
    </div>
</body>
</html>