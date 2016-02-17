<?php
/*this example shows how to print the elements of an
 * associative array in ascending order according to key.
 */

$sides = array("triangle" => "3","hexagon" => "6","rectangle" => "4","pentagon" => "5");
ksort($sides);
foreach($sides as $x => $x_value){
	echo $x." = ".$x_value."<br>";
}
/*Output:
hexagon = 6
pentagon = 5
rectangle = 4
triangle = 3
 */

?>