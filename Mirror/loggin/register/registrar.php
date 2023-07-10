<?php
include("../../conexion.php");

if(isset($_POST['boton-register'])){
    if(strlen($_POST['mail']) >= 1 && strlen($_POST['nickname']) >= 1&& strlen($_POST['contraseña']) >= 1&& strlen($_POST['confirContraseña']) >= 1){
        $mail = trim($_POST['mail']);
        $nickname = trim($_POST['nickname']);
        $contraseña = trim($_POST['contraseña']);
        $confirContraseña = trim($_POST["confirContraseña"]);
        if($confirContraseña==$contraseña){
            $consulta = "INSERT INTO usuario(mail, nickname, contraseña) VALUES ('$mail','$nickname','$contraseña')";
            $resultado = mysqli_query($conexion,$consulta);
            if ($resultado) {
                ?> 
                <h3 class="ok">¡Te has inscripto correctamente!</h3>
            <?php
            } else {
                ?> 
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
            }
        }else{
            ?>
            <h3 class="bad">Las contraseñas son incorrectas</h3>
            <?php
        }
    }else{
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>

