<html>
<head><title>PHP Mail Sender</title></head>
<body>
<?php

/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */
$email = $HTTP_POST_VARS['email'];
$subject = $HTTP_POST_VARS['subject'];
$message = $HTTP_POST_VARS['name'] + $HTTP_POST_VARS['message'] + $HTTP_POST_VARS['email'];


/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
elseif (mail("cahupa99@hotmail.com",$subject,$message)) {
  echo "<h4>Gracias, muy pronto estaremos en contacto con usted</h4>";
} else {
  echo "<h4>No se pudo enviar el correo, intente de nuevo</h4>";
}
?>
</body>
</html>











