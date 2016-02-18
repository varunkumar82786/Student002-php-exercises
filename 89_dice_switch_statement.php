<?php
/*this example uses switch statement to determine dice*/
$dice = 3;
switch($dice){
case "1":
	echo "Take one step.";
	break;

case "2":
	echo "Take two steps.";
	break;

case "3":
	echo "Take three steps.";
	break;
	
case "4":
	echo "Take four steps.";
	break;

case "5":
	echo "Take five steps.";
	break;

case "6":
	echo "Take six steps.";
	break;

default:
	echo "roll the dice again";
	break;
}
//Output: Take three steps.
?>