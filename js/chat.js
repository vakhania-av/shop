let chat = document.querySelector("#divMessages"); // Получаем элемент чата
let input = document.querySelector("#inputMessage"); // Получаем строку ввода сообщения
let btnSubmit = document.querySelector("#btnSend"); // Получаем кнопку отправки сообщения

const webSocket = new WebSocket('ws://shop:8080/ws'); // Подключаем WebSocket

// Получаем данные с сервера
WebSocket.onmessage = function(event) {
	const data = JSON.parse(event.data); // Парсим данные
	chat.innerHTML += '<div class="msg">' + data.message + '</div'; // Выводим в блог сообщение от сервера
};

// Отслеживаем нажатие мыши
btnSubmit.addEventListener("click", () => {
	message = input.value; // Получаем текст из формы для ввода сообщения
	webSocket.send(JSON.stringify({
		'message': message
	}));

	// Очищаем поле для ввода текста
	input.value = '';
})
debugger

