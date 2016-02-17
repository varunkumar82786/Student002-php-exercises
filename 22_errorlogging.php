<?php
/*this example shows how to log error and sen it by mail*/
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Webmaster has been notified";
  error_log("Error: [$errno] $errstr",1,
  "varunkumarmopidevi@gmail.com","From: me@example.com");
}


set_error_handler("customError",E_USER_WARNING);


$x=5;
if ($x>3) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}
/*Output:
Error: [512] Value must be 1 or below
Webmaster has been notified
Warning: error_log(): Failed to connect to mailserver at "localhost" port 25, 
verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() in C:\MAMP\htdocs\DrupalStudent\Student002-php-exercises\Student002-php-exercises\22_errorlogging.php on line 7
*/
?>