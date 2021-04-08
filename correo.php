<?php
    //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
    $destino = 'luiswischo@gmail.com';
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];
    $header = "Enviado desde la pagina de Inmoviliaria";
    $contenido = $mensaje . "\nAtentamente " . $nombre;
    mail($destino, $asunto, $contenido,$header);
    echo "<script>alert('correo enviado exitosamente')</script>"; 
?>
