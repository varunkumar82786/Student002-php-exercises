<?php
require "classes/Animal.php";
require "classes/Lion.php";


$animal = new Lion ("mammal","lion","carnivore");
echo $animal->sentence();

?>