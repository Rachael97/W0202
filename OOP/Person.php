<?php
class Person{
	
	//define properties
	public $race = "Chinese";
	public $firstname = "Joey";
	public $lastname = "Chong";
	
		//private $lastname = "Chong"; 
		//Cannot access private property Person::$lastname, other cannot access if set PRIVATE, 衹可以内部使用
	
	public $age = "38";
	public $feeling = "Happy";
	//public $friend = null;
	
	//define method
	public function walk(){
		echo "I'm walking ;)";
	}
	
	public function shout(){
		echo "Aaaaaaaaaaaaaaaa~~~~~~";
	}
	
	public function jump(){
		echo "I am JUMPING!";
	}
	
	//Type Hinting
	public function makeFriend(Person $friend){
		
		$this->friend = $friend;
		
		echo '<br/>'.$this->friend->firstname.' AND '.$this->firstname.' became friends!!!';
		
	}
}

?>