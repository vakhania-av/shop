<?php
	//print_r($_POST);
	$email = $_POST['email'];
	$message = $_POST['message'];

	$error = '';

	if (trim($email) == '') {
		$error = 'Введите Ваш email!';
	} elseif (trim($message) == '') {
		$error = 'Введите текст сообщения!';
	} elseif (strlen($message) <= 10) {
		$error = 'Сообщение должно содержать более 10 символов!';
	}

	if ($error != '') {
		echo $error;
		exit;
	}

	$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";

	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

	// Отправка данных формы

	mail('antonvakhania@mail.ru', $subject, $message, $headers);

	// Переадресация

	header('Location: /about.php')
?>
