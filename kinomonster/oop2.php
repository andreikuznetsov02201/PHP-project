<?php
	//полиморфизм
	interface Say {			//шаблонный класс без реализации
		public function say();
	}

	abstract class Human implements Say {
		private $name;

		public function __construct($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}
	}



	class Man extends Human {
		public function __construct($name) {
			parent::__construct($name);			//родительский конструктор. Из дочернего класса передаём конструктор в род. класс
		}

		public function beard() {
			echo "у меня растёт борода";
		}


		public function say() {
			echo "У меня мужской голос, меня зовут ".$this->getName()." and ";
		}


	}

	class Woman extends Human {
		public function __construct($name) {
			parent::__construct($name);	
		}

		public function bearChild() {
			echo "я рожаю детей";
		}

		public function say() {
			echo "я говорю женсикм голосом, меня зовут ".$this->getName()." and ";
		}

	}

	$man = new Man("Sergey");
	$man->say();
	$man->beard();

	echo "<br>";

	$woman = new Woman("Анджела");
	$woman->say();
	$woman->bearChild();


?>