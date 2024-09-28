<?php


	class Human {
		private $name;

		public function __construct($name) {		//спец. метод позволяющий инициировать начальное состояние класса при создания экземпляра
			$this->name = $name;
		}

		/*public function setName($name) {
			$this->name = $name;
		}*/

		public function say() {
			echo "Меня зовут ".$this->name." и ";
		}
	}

	/*$human = new Human("Andrey");		//дочерний класс
	//$human->setName("Андрей");	//использовать без конструктора
	$human->say();*/


	//Наследование
	class Man extends Human {			//создаём класс и передаём через который будет наследование
		
		public function beard() {
			echo "У меня растёт борода";
		}

	}

	class Woman extends Human {

		public function bearChild() {
			echo "Я рожаю детей";
		}
	}

	$man = new Man("Andrusha");
	$man->say();
	$man->beard();

	echo "<br>";

	$woman = new Woman("Мария");
	$woman->say();
	$woman->bearChild();

?>