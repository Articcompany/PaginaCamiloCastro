<?php

//captura de las variables
$correo= $_POST["email"];
$opc= $_POST["opcion"];
$men= $_POST["mensaje"];

//estructura del correo
$destino="articcompanyud@gmail.com";//Correo al que llegará
$asunto=$_POST["opcion"];//asunto que aparecerá
$bodyemail="Hola señor Camilo Castro estoy interesado en $opc , mi correo electrónico es $correo y este es mi mensaje $men";//cuerpo del mensaje

//encabezado para que se pueda enviar el correo
$headers =  'From: '.$destino."\r\n".
            'Reply-To:'.$destino."\r\n".
            'X-Mailer: PHP/'.phpversion();

//Funcion mail
mail($destino,$asunto,$bodyemail,$headers);
echo"Mensaje enviado";
?>