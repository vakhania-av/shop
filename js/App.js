const WebSocket = require('ws'); // Подключаем библиотеку для работы с WebSocket

// Создаём подключение к WS
let wsServer = new WebSocket.Server({
	port: 8080
});

let users = []; // Создаём массив для хранения всех подключенных пользователей
debugger
// Проверяем подключение
wsServer.on('connection', function(ws) {
	// Создаём подключение пользователя
	let user = {
		connection: ws
	}
	// Добавляем нового пользователя ко всем остальным
	users.push(user);
	// Получаем сообщение от клиента
	ws.on('message', function(message) {
		// Перебираем всех подключенных клиентов
		for (let u of users) {
			// Отправляем им полученное сообщение
			u.connection.send(message);
		}
	})
	// Действие при выходе пользователя из чата
	ws.on('close', function() {
		// Получаем ID пользователя
		let id = users.indexOf(user);
		// Убираем этого пользователя
		users.splice(id, 1);
	})
})