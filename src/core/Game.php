<?php

class Game
{
	public $player = array();
	public $bot = array();

	public function __construct()
	{	
		echo 'Game Started <br>';
	}

	public function inportCharacter($name, $object)
	{
		echo '<pre>';
		echo $name;
		echo $object;
		echo '</pre>';

		$object = (object) $object;

		$type = get_class($object);
		$playerOrBot = strtolower($type);

		# Statistic to build the object
		$name = $object->getName();
		$hp = $object->getHp();
		$dmg = $object->getDmg();

		$this->{$playerOrBot}[$name] = new $type($this, $name);
		$this->{$playerOrBot}[$name]->setHp($hp);
		$this->{$playerOrBot}[$name]->setDmg($dmg);
	}

	public function createCharacter($type, $name)
	{	
		$type = strtolower($type);
		$name = ucfirst(strtolower($name));

		if(isset($this->player[$name])) {
			echo 'This player' . $name . 'is taken';
			return false;
		}

		switch($type) 
		{
			case 'player':
				$this->player[$name] = new Player($this, $name);
				break;

			case 'bot':
				$this->bot[$name] = new Bot($this, $name);
				break;

			default:
				echo 'You are trying to create a character that is not intended by the framework.';
		}
	}
}
