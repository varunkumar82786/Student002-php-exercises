<?php
/*this example shows how to 
  alphabetically arrange an array in descending array and printing them.*/
$pcgames = array("Devil May Cry","Prince Of Persia","Assassin's Creed","Gears Of War");
rsort($pcgames);
for($x=0;$x<count($pcgames);$x++){
	echo $pcgames[$x]."<br>";
}
/*Output:
Prince Of Persia
Gears Of War
Devil May Cry
Assassin's Creed
 */

?>