<?php

	function insert($name, $desc, $year, $rating, $poster, $category_id) {
		$mysqli = new mysqli('localhost', 'root', '', 'kinomonster');

		if(mysqli_connect_errno()) {
			print_f('Соединение не установлено');
			exit();
		}

		$mysqli->set_charset('utf8');

		$query = "INSERT INTO movie VALUES(null, '$name', '$desc', '$year', '$rating', '$poster', Now(), '$category_id')";

		$result = false;

		if($mysqli->query($query)) {
			$result = true;
		}
		

		return $result;
	}


	//Фильмы
	$xml = simplexml_load_file("xml_files/movies.xml") or die("ERROR: cannot create object:(");			//открываем xml файл с помощью библиотеки или ошибка

	//echo count($xml);		//смотрим скрлько всего фильмов

	$title = null;
	$title_orign = null;
	$post = null;
	$rating = null;
	$year = null;

	foreach ($xml as $movie_key => $movie) {
		$title = $movie->title_russian;			//объект
		$title_orign = $movie->title_original;
		$year = $movie->year;

		foreach ($movie->poster->big->attributes() as $poster_key => $poster) {
			$post = $poster;
		}

		if($movie->imdb) {
			$rating = $movie->imdb->attributes()['rating'];
		} else {
			$rating = null;
		}

		insert($title, $title_orign, $year, $rating, $post, 1);
	}

	echo "<pre>";
	print_r($xml);
	echo "</pre>";


	//Сериалы
	$xml = simplexml_load_file("xml_files/serials.xml") or die("ERROR: cannot create object:(");

	foreach ($xml as $serials_key => $serials) {
		$title = $serials->title_russian;			//объект
		$title_orign = $serials->title_original;
		$year = $serials->year;

		foreach ($serials->poster->big->attributes() as $poster_key_ser => $poster_ser) {
			$post = $poster_ser;
		}

		if($serials->imdb) {
			$rating = $serials->imdb->attributes()['rating'];
		} else {
			$rating = null;
		}

		insert($title, $title_orign, $year, $rating, $post, 2);
	}

	echo "<pre>";
	print_r($xml);
	echo "</pre>";	

?>
