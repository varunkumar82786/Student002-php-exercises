<?php
/* this example shows how to pront all the elements of an
 * associative array using foreach funciton
 */
$class_strength = array("A"=>"30","B"=>"40","C"=>"35","D"=>"25");

foreach($class_strength as $x => $x_value){
	echo "the strength of class ".$x." is ".$x_value.".<br>";
}
/*Output:
the strength of class A is 30.
the strength of class B is 40.
the strength of class C is 35.
the strength of class D is 25.
*/
?>