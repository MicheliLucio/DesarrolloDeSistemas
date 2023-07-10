<?php
    include("../conexion.php");
    session_start();
    if(isset($_POST["boton-loggin"])){
        if(empty($_POST["mail"])and empty($_POST["contraseña"])){
            echo '<div class = "alert alert-danger">LOS CAMPOS ESTAN VACIOS<>';
        }else{
            $mail = $_POST["mail"];
            $contraseña = $_POST["contraseña"];
            $sql=$conexion->query("select idUsuario, nickname, mail, foto, contraseña from usuario where mail = '$mail' and contraseña='$contraseña'");
            if($datos=$sql->fetch_object()){
                $_SESSION["id"]=$datos->id;
                $_SESSION["nickname"]=$datos->nickname;
                $_SESSION["foto"]=$datos->foto;
                $url = "../index.php";
                header("Location: $url");
            }else{
                echo '<div class = "alert alert-danger">ACCESS DENIED</div>';
            }
        }
    }
?>