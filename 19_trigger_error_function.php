<?php
/*this example shows how to trigger error using
 * trigger_error function in response to the input data
 */
$x=7;
if($x>5){
	trigger_error("Value must be 5 or below");
}
else{
	echo $x;
}
/*
Notice: Value must be 5 or below in 
C:\MAMP\htdocs\DrupalStudent\Student002-php-exercises\Student002-php-exercises\19_trigger_error_function.php on line 4*/
?>