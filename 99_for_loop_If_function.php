<?php
/*this is an example to combine for loop if statement and a function*/
function content(){
	echo "<b>THIS IS IT.</b><br>";
}
for($x=0;$x<=5;$x++){
	echo "this is not it.<br>";
	if($x==3){
		content();
		
	}
}
/*Output:
this is not it.
this is not it.
this is not it.
this is not it.
THIS IS IT.
this is not it.
this is not it.
 */
?>