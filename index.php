<?php

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('CORE_DIR', ROOT . '/core');

include_once(CORE_DIR . '/AbstractCharacter.php');
include_once(CORE_DIR . '/Session.php');
include_once(CORE_DIR . '/Game.php');
include_once(CORE_DIR . '/Player.php');
include_once(CORE_DIR . '/Bot.php');

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
print_r($leon);

$game->inportCharacter('Leon', $session->getCharacter('Leon'));
$game->inportCharacter('Boss', $session->getCharacter('Boss'));
