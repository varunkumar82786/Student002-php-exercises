<?php
/*this example shows how to use die function inside a for loop*/
for($x=0;$x<10;$x++){
	$square = $x*$x;
	if($square>50){
		die("value exceeded limit");
	}
	else{
		echo $square."<br>";
	}
}
/*
0
1
4
9
16
25
36
49
value exceeded limit
*/
?>