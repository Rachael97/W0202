<?php
class Zoo{
	
	private $queue = array();
	
	public function animalIn(Animal $animal){
		$this->queue[] = $animal;
	}
	
	public function performanceStart(){
		if(count($this->queue)>0){
			foreach($this->queue as $v){
				$v->speak();
				$v->walk();
			}
		}
	}
}
?>