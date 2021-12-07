<?php

namespace app\core;

class Player extends Abstract_Character
{
	public function __construct(Game $game, $name)
	{	
		$this->_name = $name;
		echo "Player {$this->_name} was created <br>";
	}
}
