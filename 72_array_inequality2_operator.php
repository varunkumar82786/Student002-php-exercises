<?php
/*this is an example on array inequality operator method 2*/
$x = array("a" => 1,"b" => 2,"c" => 3);
$y = array("a" => 1,"b" => 2,"c" => 3);
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
var_dump($x<>$y);
/*Output:
array(3) { ["a"]=> int(1) ["b"]=> int(2) ["c"]=> int(3) } 
array(3) { ["a"]=> int(1) ["b"]=> int(2) ["c"]=> int(3) } 
bool(false)
 */
?>