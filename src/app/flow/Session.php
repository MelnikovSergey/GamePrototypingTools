<?php

class Session
{
	public function __construct()
	{	
		session_start();
		echo "Session started <br>";
	}

	public function registerCharacter($name, $object)
	{	
		$_SESSION[$name] = serialize((object) $object);
		echo "Session started <br>";
	}

	public function getCharacter($name)
	{	
		return unserialize($_SESSION[$name]);
	}
	
	public function showSession()
	{	
		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
	}			
}
