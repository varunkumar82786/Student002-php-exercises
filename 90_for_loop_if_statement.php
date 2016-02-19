<?php
/*this is an example with if statement inside for loop*/
for($x=0;$x<30;$x++){
	$result =  $x*3;
	if($result>15){
		break;
	}
	echo $result."<br>";
	
}
/*Output:
0
3
6
9
12
15
*/
?>