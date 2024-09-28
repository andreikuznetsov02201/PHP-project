<?php

//$value = 'hi';
//echo $value;


class Human {		//создали класс(набор полей и методов программы)

	private $words;			//модификатор доступа

	public function setWords($words) {
		$this->words = $words;			//образщаемся к полю класса
	}

	public function getWords() {
		return $this->words;
	}

	public function sayIt() {
		return $this->getWords();
	}
}


$human = new Human();		//экзкмпляр класса Human(получаем данные)
$human->setWords("Hi Andrey");			//задаёмс значение setWords а дальше идут другие циклы
echo $human->sayIt();			//а потом передаём в послед. фун.


//publick --- используется для определения членов класса (свойств и методов), которые могут быть доступны из любой части кода, включая внешние части приложения.
//private --- поле,  ограничивает область видимости так, что только класс, где объявлен сам элемент, имеет к нему доступ



?>