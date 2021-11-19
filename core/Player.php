<?php

class Player
{
	private $_name;
	private $_hp;
	private $_dmg;

	public function __construct(Game $game, $name)
	{	
		$this->_name = $name;
		echo "Player {$this->_name} was created <br>";
	}

	public function setHp($int)
	{	
		$this->_hp = (int) $int;
	}

	public function setDmg($int)
	{	
		$this->_dmg = (int) $int;
	}

	public function __toString()
	{	
		return "Name: {$this->_name} | HP: {$this->_hp} | DMG: {$this->_dmg}";
	}
}
