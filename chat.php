<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Онлайн чат</title>
</head>
<body>
	<?php require "blocks/header.php" ?>
	<div class="container mt-5">
		<h3 class="mb-5">Онлайн-чат</h3>
		<div id="divMessages" class="message border rounded container">
            	<div id="blockSendMessage" class="row">
                	<input id="inputMessage" class="form-control col-8 col-sm-9 col-md-8" type="text" placeholder="Сообщение">
                	<button id="btnSend" type="button" class="btn btn-secondary col-4 col-sm-3 col-md-4">Отправить</button>
            	</div>
        </div>
	</div>
	<script src="js/chat.js"></script>
	<?php require "blocks/footer.php" ?>
</body>
</html>