<?php
/*this example uses continue statement inside for loop*/
for($x=0;$x<10;$x++){
	$result =  $x*3;
	if($result == 15){
		continue;
	}
		echo $result."<br>";

}
/*Output:
 0
3
6
9
12
18
21
24
27
 */
?>