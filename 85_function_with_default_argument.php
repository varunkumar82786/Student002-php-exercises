<?php
/*this is an example on function with default argument*/
function age($defaultAge = 21){
	echo $defaultAge.".<br>";
}
echo "Age of Mark is ";
age(32);
echo "Age of Diana is ";
age();
echo "Age of Megan is ";
age(23);
/*Output:
Age of Mark is 32.
Age of Diana is 21.
Age of Megan is 23.
 */
?>