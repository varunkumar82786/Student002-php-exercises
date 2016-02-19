<?php
/*this is an example on global variable*/
$x = 5;
$y = 10;
function multiply($x,$y){
	echo $GLOBALS['x'] * $y;
}
multiply(3,3);
//Output: 15
?>