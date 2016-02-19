<?php
/*this is an example of multi-dimensional array*/
$movies = array(
		array("Titanic",1997,2.187),
		array("Godzilla",2009,2.788),
		array("The Avengers",2012,1.52)
);
echo "The movie ".$movies[0][0]." was released in the year ".$movies[0][1]." and collected ".$movies[0][2]." billion USD.<br>";
echo "The movie ".$movies[1][0]." was released in the year ".$movies[0][1]." and collected ".$movies[0][2]." billion USD.<br>";
echo "The movie ".$movies[2][0]." was released in the year ".$movies[0][1]." and collected ".$movies[0][2]." billion USD.<br>";
/*Output:
The movie Titanic was released in the year 1997 and collected 2.187 billion USD.
The movie Godzilla was released in the year 1997 and collected 2.187 billion USD.
The movie The Avengers was released in the year 1997 and collected 2.187 billion USD.
*/
?>