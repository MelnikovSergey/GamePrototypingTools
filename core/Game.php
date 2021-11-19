<?php

class Game
{
	public function __construct()
	{	
		echo 'Game Started <br>';
	}

	public function createPlayer($name)
	{	
		$this->player = new Player($this, $name);
	}

	public function createBot($name)
	{	
		$this->bot = new Bot($this, $name);
	}	

	public function setPlayerHp($int)
	{	
		$this->player->setHp($int);
	}

	public function setPlayerDmg($int)
	{	
		$this->player->setDmg($int);
	}		

	public function showPlayer()
	{	
		echo $this->player;
	}
}
