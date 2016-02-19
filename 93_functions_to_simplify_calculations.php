<?php
/*this example uses functions to simplify complex calculations*/
function add($x,$y){
	 $z = $x + $y;
	 return $z;
}
function subtract($x,$y){
	 $z = $x - $y;
	 return $z;
}
function multiply($x,$y){
	$z = $x * $y;
	return $z;
}

echo "(2 + 4) x (10 - 5) = ".multiply(add(2,4),subtract(10,5));
//Output: (2 + 4) x (10 - 5) = 30
?>