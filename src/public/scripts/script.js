(function(object) {
   'use strict';

	let heroGuy = {
		name: "Leon",
		level: "",
		weapon: "Antiquity Laser",
		armor: 0.1,
		hp: 100,
		dmg: 50,
		units: 10,
		money: 500,
		imageUrl = ""
	};

	let enemyBoss = {
		name: "Boss",
		level: "",
		weapon: "Antiquity Grenade Launcher",
		armor: 0.1,
		hp: 80,
		dmg: 500,
		units: 10,
		money: 'infinity',
		imageUrl = ""
	};

	let archer = {
		name: "Veng",
		level: "",
		weapon: "Arbalest",
		armor: 0.1,
		hp: 80,
		dmg: 500,
		units: 10,
		money: '350',
		imageUrl = ""
	};

	let knight = {
		name: "Artur",
		level: "",
		weapon: "Sword",
		armor: 0.1,
		hp: 80,
		dmg: 500,
		units: 10,
		money: '850',
		imageUrl = ""
	};

	// Global arrays
	let heroesArray;
	let enemiesArray;

	let intervalHeroAttack;
	let intervalEnemyAttack;
	let intervalHit;

	function init() {
		heroesArray = [heroGuy, knight];
		enemiesArray = [enemyBoss, archer];

		let heroIndex = prompt("Выберите героя: 0 - heroGuy, 1 - enemyBoss");
		let hero = heroesArray[heroIndex];

		document.getElementById('hero').style.backgroundImage = 'url(${hero.imageUrl})';
		
		getItem('attack').onclick = function(){
			animateHeroAttack();
		};
	}

	function getItem(item) {
		document.getElementById(item); 
	}

	function randomNumber(min, max) {
		let randomNum = min + Math.random() * (max + 1 - min);
		return Math.round(randomNum);
	} 

	function animateHeroAttack() {
		const diff = 100;
		const interval = 100;

		let position = 0;

		getItem('hero').style.transform = "translate(100px, -150px)";
		intervalHeroAttack = setInterval(() => {
			getItem('hero').style.backgroundPosition = `${position}px 0px`;
			
			if(position < 2000) {
				position = position + diff;
			} else {
				position = 0;
				getItem('hero').style.backgroundPosition = `${position}px 0px`;
				getItem('hero').style.transform = "translate(0, 0)";
				
				setTimeout(() => {
					animateEnemyAttack();
				}, 2000);

				animationHit('enemy', 'dmg-enemy-container', dmg);
				stopAnimations(intervalHeroAttack);
			}

		}, interval);
	}

	function animateEnemyAttack() {
		const diff = 100;
		const interval = 100;

		let position = 0;

		getItem('enemy').style.transform = "translate(100px, -150px)";
		intervalEnemyAttack = setInterval(() => {
			getItem('enemy').style.backgroundPosition = `${position}px 0px`;
			
			if(position < 2000) {
				position = position + diff;
			} else {
				position = 0;
				getItem('enemy').style.backgroundPosition = `${position}px 0px`;
				getItem('enemy').style.transform = "translate(0, 0)";

				animationHit('hero', 'dmg-hero-container', dmg);
				stopAnimations(intervalEnemyAttack);
			}

		}, interval);
	}

	function animationHit(character, dmgContainer, dmg) {
		const diff = 10;
		const interval = 100;

		let position = 0;

		intervalHit = setInterval(() => {
			getItem(character).style.transform = `translate(0px, ${position}px)`;

			getItem('dmg-container').innerHTML = dmg;
			getItem('dmg-container').style.display = "block";
			getItem('dmg-container').style.transform = `translate(0px, ${position}px)`;
			
			if(position < 50) {
				position = position + diff;
			} else {
				position = 0;
				getItem(character).style.transform = `translate(0px, 0px)`;

				getItem('dmg-container').style.transform = `translate(0px, 0px)`;
				getItem('dmg-container').style.display = "none";

				stopAnimations(intervalHit);
			}

		}, interval);	
	} 

	function stopAnimations(item) {
		clearInterval(item);	
	} 

	function battle() {
		//...
	}

	function checkHp() {
		//...
	}

	function balanceHero() {
		hero.level  += hero.level++;
		hero.weapon += hero.weapon + 'val';
		hero.armor  += hero.armor + 'val';
		hero.hp     += hero.hp * 10;
		hero.dmg    += hero.dmg * hero.hp / 2;
		hero.units  += hero.units;
		hero.money  += hero.money;
	}

	function endGame() {
		alert("Game Over!");
		let reload = confirm('Start Again?');

		if(reload) {
			location.reload();
		}


	}

	function updateStats() {
		if(hero.hp <= 0) {
			endGame();
		} else {
			getItem('hero-name').innerHTML = 'name: '     + hero.name;
			getItem('hero-level').innerHTML = 'level: '   + hero.level;
			getItem('hero-weapon').innerHTML = 'weapon: ' + hero.weapon;
			getItem('hero-armor').innerHTML = 'armor: '   + hero.armor;
			getItem('hero-hp').innerHTML = 'hp: '         + hero.hp;
			getItem('hero-dmg').innerHTML = 'dmg: '       + hero.dmg;
			getItem('hero-units').innerHTML = 'units: '   + hero.units;
			getItem('hero-money').innerHTML = 'money: '   + hero.money;
		}
	}

}(document));