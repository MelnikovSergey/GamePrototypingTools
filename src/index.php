<?php

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

include_once(ROOT . '/src/app/core/AbstractCharacter.php');
include_once(ROOT . '/src/app/flow/Session.php');

include_once(ROOT . '/src/app/debug.php');


use app\core\Game;
use app\core\Player;
use app\core\Bot;

spl_autoload_register(function($class) {
	$path = str_replace('\\', '/', $class . '.php');
	
	if(file_exists($path)) {
		include_once $path;
	}
});


/**
 * In search of use cases
 * Experiment: 1 
*/ 

$session = new Session();
$game = new Game();

$game->createCharacter('player', 'Leon');
$game->player['Leon']->setHp(100);
$game->player['Leon']->setDmg(50);
$game->player['Leon']->showCharacter();

$session->registerCharacter('Leon', $game->player['Leon']);

$game->createCharacter('bot', 'Boss');
$game->bot['Boss']->setHp(80);
$game->bot['Boss']->setDmg(150);
$game->bot['Boss']->showCharacter();

$session->registerCharacter('Boss', $game->bot['Boss']);

$game->player['Leon']->battle($game->bot['Boss']);
$game->player['Leon']->battle($game->bot['Boss']);

$session->getCharacter('Leon');
$session->showSession();

$leon = $session->getCharacter('Leon');
# print_r($leon);

$game->inportCharacter('Leon', $session->getCharacter('Leon'));
$game->inportCharacter('Boss', $session->getCharacter('Boss'));