<?php
/*this example shows how to use custom error with 
 *error level warning and trigger it inside a for loop 
 */
function customError($errorno, $errorstr){
	echo "<b>ERROR:</b> [$errorno] $errorstr <br>";
	die("Ending the script");
}

set_error_handler("customError",E_USER_WARNING);

for($x=0;$x<10;$x++){
	$square = $x*$x;
	if($square>50){
		trigger_error("Value has exceeded the limit",E_USER_WARNING);
	}
	else{
			echo $square."<br>";
		}
	}
/*Output:
0
1
4
9
16
25
36
49
ERROR: [512] Value has exceeded the limit 
Ending the script
*/
?>
