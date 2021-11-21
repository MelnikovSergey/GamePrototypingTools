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

	public function getHp()
	{	
		return $this->_hp;
	}

	public function getDmg()
	{	
		return $this->_dmg;
	}	

	public function battle($defender)
	{	
		$defender = (object) $defender;
		
		# First get the defenders statistic
		$hp = $defender->getHp();

		# Now get the attackers statistic
		$dmg = $this->getDmg();

		$defender->setHp($hp - $dmg);
		echo 'Defender is at' . $defender->getHp();
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
