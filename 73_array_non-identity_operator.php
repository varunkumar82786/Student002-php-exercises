<?php
/*this is an example on array non identity operator*/
$x = array("a" => 1,"b" => 2,"c" => 3);
$y = array("d" => 4,"e" => 5,"f" => 6);
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
var_dump($x!==$y);
/*Output:
array(3) { ["a"]=> int(1) ["b"]=> int(2) ["c"]=> int(3) } 
array(3) { ["d"]=> int(4) ["e"]=> int(5) ["f"]=> int(6) } 
bool(true)
 */
?>