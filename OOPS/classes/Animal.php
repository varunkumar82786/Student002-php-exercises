<?php
class Animal{
	public $class;
	public $species;
	public $foodtype;
	
	public function __construct($class,$species,$foodtype){
		$this->class = $class;
		$this->species = $species;
		$this->foodtype = $foodtype;
	}
	public function clss(){
		return $this ->class;
	}
	public function species(){
		return $this->species;
	}
	public function foodtype(){
		return $this->foodtype;
	}
}
?>