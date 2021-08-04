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
	<div class="weather">
		<div class="container mt-5">
			<?php
				// API ключ
				$apiKey = ed594d315935d32f1121b6bf7d5ede6c;
				// Город, для которого берём погоду
				$city = "Tver";
				//Ссылка для отправки
				$url = "api.openweathermap.org/data/2.5/weather?q=${city}&lang=ru&units=metric&appid=${apiKey}";

				//Создаём запрос
				$ch = curl_init();

				// Настройка запроса
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_URL, $url);

				// Отправляем запрос и получаем ответ
				$data = json_decode(curl_exec($ch));

				// Закрываем запрос
				curl_close($ch);
			?>
    	<h2>Погода на <?php 
    		$months = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
    		$month = date('n') - 1;
    		echo date('d') . ' ' .$months[$month] . ' ' .date('Y H:i');
    	?></h2>
    	<h3 class="mt-5">Текущее местоположение: город <?=$data->name;?>, <?php if($data->sys->country == "RU") { echo "Россия";}; ?></h3><br>
    	<p>Погода: <?=ceil($data->main->temp);?>°C</p>	
    	<p>Влажность: <?= $data->main->humidity;?>%</p>
    	<p>Ветер: <?= $data->wind->speed;?> км/ч</p>
	</div> 
</div>
	<?php require "blocks/footer.php" ?>
</body>
</html>