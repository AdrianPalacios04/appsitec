<?php
$destination = "adrianpalaciosmedrano@gmail.com";
$name = $_POST["name"];
$email = $_POST["email"];
//$subject = $_POST["subject"];
$mensaje = $_POST["mensaje"];
$content = "Nombre: ". $name . "\nCorreo: " . $email . "\nMensaje: " . $mensaje;
mail($destination, $content, $header);
//header("Location:index.html");
$header = "Envio desde la pagina appsitweb";
//$mensajeCompleto = $mensaje . "\nAtentamente: " . $name;
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000 )</script>";
