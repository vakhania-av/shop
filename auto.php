<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Данные об автомобиле</title>
</head>
<body>
	<?php require "blocks/header.php" ?>
  <div class="container mt-5">
    <h3>Данные об автомобиле</h3>
    	<?php
	class Auto {

		// Объявляем глобальные переменные класса
		
		public $title;

		// Конструктор класса

		public function __construct ($title, $model, $manufacter, $engine_type, $engine_power, $year) {

			$this -> warning_message();
			$this -> title = $title;
			$this -> model = $model;
			$this -> manufacter = $manufacter;
			$this -> engine_power = $engine_power;
			$this -> engine_type = $engine_type;
			//$this -> get_engine_type($engine_type);
			//$this -> get_engine_power($engine_power);
			$this -> year = $year;
			$this -> show_data();
		}

		// Деструктор класса

		public function __destruct () {
			
		}

		public function warning_message() {
			echo "Пожалуйста, укажите данные об автомобиле в следующем порядке: " . "<br>" . "Марка, Модель, Страна-производитель, Тип двигателя, Мощность двигателя, Год выпуска!" . "<br>" . "<br>";
		}

		public function get_engine_type($engine_type) {
			if ($engine_type == 'B' || 'Б') {
				return 'Bensin (Бензиновый)';
			} elseif ($engine_type == 'D' || 'Д') {
				return 'Diesel (Дизельный)';
			} elseif ($engine_type == 'E' || 'Э') {
				return 'Electromotor (Электромотор)';
			} else {
				return 'Не указана аббревиатура типа двигателя!' . '<br>';
			}
		}

		public function get_engine_power($engine_power) {
			if (!$engine_power) {
				return 'Не указана мощность двигателя!';
			}
			return $engine_power . " л.с.";
		}

		public function show_data() {
			echo "Title (Марка): " . $this -> title . "<br>";
			echo "Model (Модель): " . $this -> model . "<br>";
			echo "Manufacter (Страна-производитель): " . $this -> manufacter . "<br>";
			echo "Engine type (Тип двигателя): " . $this -> get_engine_type($this->engine_type) . "<br>";
			echo "Engine power (Мощность двигателя): " . $this -> get_engine_power($this->engine_power) . "<br>";
			echo "Year (Год выпуска): " . $this -> year . "<br>";
		}
	}

	// Создаём объект класса Auto

	$car_1 = new Auto("Volskwagen", "Golf II", "Germany", "Б", 90, 1989);
	$car_1;

?>   
  </div> 
	<?php require "blocks/footer.php" ?>
</body>
</html>



