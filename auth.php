<?php

	// Проверяем, установлены ли куки
	if ($_COOKIE['user'] == 'Да') {
		setcookie('user', 'Да', time() - 3600, '/');
	} else {
		// Устанавливаем куки
		setcookie('user', 'Да', time() + 3600, '/');
	}
	
	// Переадресация на главную страницу
	header('Location: /');
?>