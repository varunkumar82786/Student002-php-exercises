<?php
/*this example shows how to use die function when error occurs*/

if(!file_exists("test.php","r")){
	die("File Not Found");
}
else{
$file = fopen("test.php","r");
}
/*Output:File Not Found
 */
?>