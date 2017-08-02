<?php
class Game{
	
	public $players = array();
	
	public function welcome(Animal2 $player){
		$player->report();
		$this->players[] = $player;
	}
	
	public function racingStart(){
		
		//Preparing
		if(count($this->players)>0){
			foreach($this->players as $v){
				$v->run();
			}
		}
		
		//Comparing
		$ChampionSpeed = 0;
		$Champion = "";
		
		if(count($this->players)>0){
			foreach($this->players as $v){
				if($v->getSpeed() > $ChampionSpeed){
					$ChampionSpeed = $v->getSpeed();
					$Champion = $v->getName();
				}
			}
		}
		
		//Final Result
		echo 'The Champion is ~~~~ '.$Champion.' !!!';
		echo '<table border="1" width="100%"><thead><tr><th>Name</th><th>Speed</th></tr></thead><tbody>';
		foreach($this->players as $v){
			echo '<tr><td>'.$v->getName().'</td><td>'.$v->getSpeed().'</td></tr>';
		}
		echo '</tbody></table>';
	}
}
?>