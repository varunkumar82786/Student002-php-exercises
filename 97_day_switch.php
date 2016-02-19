<?php
/*this is an example to determine day using the switch statement*/
$day ="monday";
switch($day){
	case "monday":
		echo "Today is monday.";
		break;
	case "tuesday":
		echo "Today is tuesday.";
		break;
	case "wednesday":
		echo "Today is wednesday.";
		break;
	case "thursday":
		echo "Today is thursday.";
		break;
	case "friday":
		echo "Today is friday.";
		break;
	case "saturday":
		echo "Today is saturday.";
		break;
	case "sunday":
		echo "Today is sunday.";
		break;
	default:
		echo "Don't know";
		break;
}
//Output: Today is monday.
?>