<?php
/*this example show how to trigger a custom error with
 * error level warning
 */
function customError($errorno,$errorstr){
	echo "ERROR: [$errorno] $errorstr <br>";
	die("Ending script");
}

set_error_handler("customError",E_USER_WARNING);

$x=5;
if($x>3){
	trigger_error("Value must be 3 or below",E_USER_WARNING);
}
/*Output:
ERROR: [512] Value must be 3 or below 
Ending script
 */
?>