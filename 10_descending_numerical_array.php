<?php
/*this example shows how to print the elements of an array in 
 * ascending numerical order.
 */
$numbers = array(5,95,32,1,65,4);
rsort($numbers);
for($x=0;$x<count($numbers);$x++){
	echo $numbers[$x]."<br>";
}
/*Output:
95
65
32
5
4
1
 */
?>