<?php
class Animal2 {
	
	private $speed = 0;
	protected $name = '';
	
	public function report(){
		echo "I'm ".$this->name."<br/>";
	}
	
	public function run(){
		$this->speed = rand(1,10);
	}
	
	public function getSpeed(){
		return $this->speed;
	}
	
	public function getName(){
		return $this->name;
	}
}
?>