<?php
/*this example else if statement to determine dice*/
$dice = 3;
if($dice == 1){
	echo "Take one step.";
}
elseif($dice == 2){
	echo "Take two steps.";
}
elseif($dice == 3){
	echo "Take three steps.";
}
elseif($dice == 4){
	echo "Take four steps.";
}
elseif($dice == 5){
	echo "Take five steps.";
}
elseif($dice == 6){
	echo "Take six steps.";
}
else{
	echo "roll the dice again";
}
//Output: Take three steps.
?>