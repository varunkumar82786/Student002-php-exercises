<?php
/*this example shows how to use exit function when error occurs*/

if(!file_exists("test.php","r")){
	exit("File Not Found");
}
else{
$file = fopen("test.php","r");
}
/*Output:File Not Found
 */
?>