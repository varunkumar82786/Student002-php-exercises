<?php
/*this example shows how to 
  arrange an array in ascending array and printing them.*/
$pcgames = array("Devil May Cry","Prince Of Persia","Assassin's Creed","Gears Of War");
sort($pcgames);
for($x=0;$x<count($pcgames);$x++){
	echo $pcgames[$x]."<br>";
}
/*Output:
Assassin's Creed
Devil May Cry
Gears Of War
Prince Of Persia
 */

?>