<?php
/*this is example on object datatype*/
class Phones {
	function __construct() {
		$this->model = "S5-edge";
	}
}

$Samsung = new Phones();

// show object properties
echo $Samsung->model;
/*Output: S5-edge */
?>