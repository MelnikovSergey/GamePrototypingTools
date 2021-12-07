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
				<li>Name:</li>
				<li>Level:</li>
				<li>Weapon:</li>
				<li>Armor:</li>
				<li>Hp:</li>
				<li>Dmg:</li>
				<li>Units:</li>
				<li>Money:</li>
			</ul>
		</div>
		<div class="enemy-stats">
			<ul class="character-properties">
				<li>Name:</li>
				<li>Level:</li>
				<li>Weapon:</li>
				<li>Armor:</li>
				<li>Hp:</li>
				<li>Dmg:</li>
				<li>Units:</li>
				<li>Money:</li>
			</ul>
		</div>
		<div class="hero-container" id="hero"></div>
		<div class="enemy-container" id="enemy"></div>
	</div>
</main>

<?php include_once(VIEW . '/footer.php'); ?>