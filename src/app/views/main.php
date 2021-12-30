<?php 
	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	define('VIEW', ROOT . '/src/app/views/includes');

	$title = 'Battle scene'; 
?>

# Extends (need to do (include in the to do list))
<?php include_once(VIEW . '/header.php'); ?>

<main>
	<div class="container">
		<div class="hero-stats">
			<ul class="character-properties">
				<li id="hero-name">Name:</li>
				<li id="hero-level">Level:</li>
				<li id="hero-weapon">Weapon:</li>
				<li id="hero-armor">Armor:</li>
				<li id="hero-hp">Hp:</li>
				<li id="hero-dmg">Dmg:</li>
				<li id="hero-units">Units:</li>
				<li id="hero-money">Money:</li>
			</ul>
		</div>
		<div class="enemy-stats">
			<ul class="character-properties">
				<li id="enemy-name">Name:</li>
				<li id="enemy-level">Level:</li>
				<li id="enemy-weapon">Weapon:</li>
				<li id="enemy-armor">Armor:</li>
				<li id="enemy-hp">Hp:</li>
				<li id="enemy-dmg">Dmg:</li>
				<li id="enemy-units">Units:</li>
				<li id="enemy-money">Money:</li>
			</ul>
		</div>

		<div class="hero-container" id="hero"></div>
		<div class="enemy-container" id="enemy"></div>

		<div class="controls">
			<button id="attack">Attack</button>
		</div> 
	</div>
</main>

<?php include_once(VIEW . '/footer.php'); ?>