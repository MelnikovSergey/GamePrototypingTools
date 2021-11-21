<?php

define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('CORE_DIR', ROOT . '/core');

include_once(CORE_DIR . '/AbstractCharacter.php');
include_once(CORE_DIR . '/Game.php');
include_once(CORE_DIR . '/Player.php');
include_once(CORE_DIR . '/Bot.php');

$game = new Game();

$game->createCharacter('player', 'Leon');
$game->player->setHp(100);
$game->player->setDmg(50);
$game->player->showCharacter();

$game->createCharacter('bot', 'Boss');
$game->bot->setHp(80);
$game->bot->setDmg(150);
$game->bot->showCharacter();

$game->createCharacter('fairy', 'the good fairy Sophia');
