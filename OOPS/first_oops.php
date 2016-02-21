<?php
require "classes/firstoops_class.php";

$intro = new Test();
$intro->name = "Rudra";
$intro->age = 24;
echo $intro->sentence();
?>