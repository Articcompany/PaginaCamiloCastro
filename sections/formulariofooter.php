<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "djcienduaa@gmail.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}
$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Email: " . $_POST['email'] . "\n";
$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";

// Ahora se envía el e-mail usando la función mail() de PHP

@mail($email_to, $email_subject, $email_message);

echo "¡El formulario se ha enviado con éxito!";
}
?>