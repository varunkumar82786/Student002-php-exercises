<?php
/*this is an example on string concatenation operator*/

$a = "Welcome ";
$b = "to my house.";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $a.$b;
echo "<br>";
$a .=$b;
echo $a;
echo "<br>";
echo $b;
/*Output:
Welcome 
to my house.
Welcome to my house.
Welcome to my house.
to my house.
*/
?>