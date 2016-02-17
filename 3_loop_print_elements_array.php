<?php
/*this example shows 
 how to print all the elements of an array using for loop*/
$fruits = array("orange","banana","grapes","apple","watermelon","blueberries");
for($x=0;$x<count($fruits);$x++){
	echo $fruits[$x];
	echo "<br>";
}
/* 
 * orange
 * banana
 * grapes
 * apple
 * watermelon
 * blueberries
 */
?>