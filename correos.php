<?php   
    $destinatario = 'leadshhv@bolsarosa.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $compañia = $_POST['compañia'];
    $posicion = $_POST['posicion'];
    $estado = $_POST['estado'];

    $asunto = 'Lead landing HeadHunter';
    $mensaje = "La información puede ser consultada en: https://docs.google.com/spreadsheets/d/1uKD3-fk5qtQZEb1VjJn8hIV6PccOBGzvh4ig-ohlfHQ/edit#gid=0";

    $header = "Enviado desde la página de Landing page HeadHunter";
    $contenido = "Email: " . $email ."\nTelefono: " . $telefono . "\nCompañia: " . $compañia . "\nPosición: " . $posicion . "\nEstado: " . $estado . "\nAtentamente: " . $nombre . "\n" . $mensaje;

    mail($destinatario, $asunto, $contenido, $header);
    echo "<script>alert('Solicitud de contacto enviada exitosamente, nos pondremos en contacto contigo muy pronto ya puedes cerrar esta página.')</script>";
    echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";

?>