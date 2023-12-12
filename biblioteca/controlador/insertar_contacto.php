<?php 
if(!empty($_POST["enviar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["fecha"]) and !empty($_POST["email"]) and !empty($_POST["asunto"]) and !empty($_POST["comentario"])){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $fecha = $_POST["fecha"];
        $asunto = $_POST["asunto"];
        $comentario = $_POST["comentario"];

        $sql = $conexion->query("insert into contacto(nombre,fecha, correo, asunto, comentario) values('$nombre','$fecha', '$email', '$asunto', '$comentario')");
        if(!empty($sql)){
            echo '<div class="alert alert-success">Se envio correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">No se pudo enviar</div>';
        }
    }
   
    else{
        echo '<div class="alert alert-danger">Algunos campos estan vacios</div>';
    }

}

?>