<?php
/* this is an example on else if statement*/
$bal = 700;
if($bal<500){
	echo "Your balance is low.";
}
elseif(500<$bal && $bal<1000){
	echo "You have moderate balance.";
}
else{
	echo "You have enough balance.";
}
//Output: You have moderate balance.
?>