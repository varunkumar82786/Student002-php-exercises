<?php
/*this example shows how to print the elements of an array in 
 * ascending numerical order.
 */
$numbers = array(5,95,32,1,65,4);
sort($numbers);
for($x=0;$x<count($numbers);$x++){
	echo $numbers[$x]."<br>";
}
/*Output:
1
4
5
32
65
95
 */
?>