<?php
/*this is an example on switch statement*/

$distance =500;
switch ($distance){
	case "0":
		echo "You have one mile to go.";
		break;
	case "250":
		echo "You have three-quarter of mile to go.";
		break;
	case "500":
		echo "You have half a mile to go.";
		break;
	case "750":
		echo "You have quarter of mile to go.";
		break;
	case "1000":
		echo "you have covered a mile.";
		break;
	default:
		echo "data insufficient.";
}
//Output: You have half a mile to go.
?>