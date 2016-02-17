<?php
/*this example shows how to set up a custom
 * error handler function that handles all types of errors
 */
function customError($errorno,$errorstr){
	echo "ERROR: [$errorno] $errorstr";
}

set_error_handler("customError");

echo($test);
/*Output:
ERROR: [8] Undefined variable: test
*/
?>