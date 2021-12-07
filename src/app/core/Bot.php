<?php

namespace app\core;

class Bot extends Abstract_Character
{
	public function __construct(Game $game, $name)
	{	
		$this->_name = $name;
		echo "Bot {$this->_name} was created <br>";
	}
}
