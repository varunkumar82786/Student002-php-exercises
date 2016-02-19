<?php
/*this example uses functions inside if else statement*/

function sell(){
	echo "I will sell Alcohol to you.";
}
function nosell(){
	echo "I will not sell Alcohol to you.";
}

$age =23;
if($age>21){
	sell();
}
else{
	nosell();
}
//Output: I will sell Alcohol to you.
?>