<?php
// Le message
$message = "ALERTE\r\nVotre distributeur de croquette est vide.\r\";

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Envoi du mail
mail('silmerest.ghost@gmail.com', 'ALERTE', $message);
?>
