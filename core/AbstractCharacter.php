<?php

abstract class Abstract_Character 
{
	protected $_name;
	protected $_hp;
	protected $_dmg;

	public function setHp($int)
	{	
		$this->_hp = (int) $int;
	}

	public function setDmg($int)
	{	
		$this->_dmg = (int) $int;
	}		

	public function showCharacter()
	{	
		echo $this;
	}

	public function __toString()
	{	
		return "Player name: {$this->_name} | HP: {$this->_hp} | DMG: {$this->_dmg}<br>";
	}
}
