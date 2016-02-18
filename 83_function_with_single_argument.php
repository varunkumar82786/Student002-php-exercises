<?php
/*this is an example on function with single argument*/
function actor($name){
	echo $name." is an actor.<br>";
}
function singer($name){
	echo $name." is a singer.<br>";
}
actor("Hugh Jackman");
actor("Arnold");
singer("Taylor Swift");
singer("Luciana Zogbi");

/*Output:
Hugh Jackman is an actor.
Arnold is an actor.
Taylor Swift is a singer.
Luciana Zogbi is a singer.
 */
 ?>