<?php

//captura de las variables
$correo = $_POST["email"];
$opc = $_POST["opcion"];
$men = $_POST["mensaje"];

//estructura del correo
$destino = 'articcompanyud@gmail.com';//Correo al que llegará
$asunto = $opc;//asunto que aparecerá
//$bodyemail = "Hola señor Camilo Castro estoy interesado en '$_POST["opcion"]', mi correo electrónico es '$_POST["email"]' y este es mi mensaje: '$_POST["mensaje"]'";//cuerpo del mensaje

//encabezado para que se pueda enviar el correo
$headers = 'From:'.$destino."\r\n".
'Reply-To:'.$destino."\r\n".
'X-Mailer: PHP/'.phpversion();

//Funcion mail
if(mail($destino,$asunto,$men,$headers)){
    echo"Mensaje enviado";
}
 else {
    echo"Ha ocurrido algo inesperado";
 };

?>