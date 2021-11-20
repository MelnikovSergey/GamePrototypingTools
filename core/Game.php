<?php

class Game
{
	public $player;
	public $bot;

	public function __construct()
	{	
		echo 'Game Started <br>';
	}

	public function createCharacter($type, $name)
	{	
		$type = strtolower($type);

		switch($type) 
		{
			case 'player':
				$this->player = new Player($this, $name);
				break;

			case 'bot':
				$this->bot = new Bot($this, $name);
				break;

			default:
				echo 'You are trying to create a character that is not intended by the framework.';							
		}
	}
}
