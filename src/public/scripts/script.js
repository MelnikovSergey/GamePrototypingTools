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
		const interval = 1000;

		let position = 0;

		getItem('hero').style.transform = "translate(100px, -150px)";
		intervalHeroAttack = setInterval(() => {
			getItem('hero').style.backgroundPosition = `${position}, 0px`;
		}, interval);
	} 

	function updateStats() {
		getItem('hero-name').innerHTML = 'name: '     + hero.name;
		getItem('hero-level').innerHTML = 'level: '   + hero.level;
		getItem('hero-weapon').innerHTML = 'weapon: ' + hero.weapon;
		getItem('hero-armor').innerHTML = 'armor: '   + hero.armor;
		getItem('hero-hp').innerHTML = 'hp: '         + hero.hp;
		getItem('hero-dmg').innerHTML = 'dmg: '       + hero.dmg;
		getItem('hero-units').innerHTML = 'units: '   + hero.hp;
		getItem('hero-money').innerHTML = 'money: '   + hero.dmg;
	}

}(document));