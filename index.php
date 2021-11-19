define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('CORE_DIR', ROOT . '/core');

include_once(CORE_DIR . '/Game.php');
include_once(CORE_DIR . '/Player.php');

$game = new Game();
$game->createPlayer('Leon');
$game->setPlayerHp(100);
$game->setPlayerDmg(50);
$game->showPlayer();
