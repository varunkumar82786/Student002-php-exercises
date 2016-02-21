<?php
class Lion extends Animal{
	public function sentence(){
		return $this->species." is a ".$this->class." and it is a ".$this->foodtype.".";
	}
}
?>