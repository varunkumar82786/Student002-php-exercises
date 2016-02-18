<?php
/*this is an example on for each loop*/
$classes = array("A" => "30","B" => "20","C" => "50", "D" => "65");
foreach($classes as $x => $x_value){
	echo "The class ".$x." has ".$x_value." students.<br>";
}
/*Output:
The class A has 30 students.
The class B has 20 students.
The class C has 50 students.
The class D has 65 students.
*/
?>