<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>

	<h1>Hellow, world</h1>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita rerum dignissimos tenetur excepturi quibusdam
		reprehenderit voluptatem hic asperiores assumenda iusto neque obcaecati natus ullam, architecto nulla ipsa eius
		officiis placeat!</p>
	<script>
	// 111111111111111111111111111111111111111111111111111111111111111111


	// let posts = {
	// 	id: '5',
	// 	title: 'Проверка2',
	// 	description: 'Проверка запроса по запросу',
	// 	status: '1'
	// }
	// var formData = new FormData();

	// formData.append('title', 'Проверка2');

	// fetch("check.php", {
	// 		method: "post",
	// 		// credentials: 'same-origin',  // параметр определяющий передвать ли разные сессионные данные вместе с запросом
	// 		headers: {
	// 			"Content-Type": "application/json;charset=utf-8"
	// 		},
	// 		body: formData,
	// 		// body: JSON.stringify({
	// 		// 	action: 'dsfsdf'
	// 		// })
	// 	})
	// 	.then(response => response.json()) // возвращаем промис
	// 	.catch(error => {
	// 		console.log(error);
	// 	});



	// 222222222222222222222222222222222222222222222222222222222222222222222222222
	// let posts = {
	// 	id: '5',
	// 	title: 'Проверка2',
	// 	description: 'Проверка запроса по запросу',
	// 	status: '1'
	// }

	var formData = new FormData();

	formData.append('0', 'значение');
	// formData.append('ключ', 'значение');

	fetch("check.php", {
			method: "POST",
			body: formData,

		})
		.then((response) => {
			if (response.status !== 200) {
				return Promise.reject(); // Причина по которой Promise был отклонен.
			}
			return response.text()
		})
		.then(i => console.log(i))
		.catch((err) => console.log(err));



	function post(url, data) {
		return fetch(url, {
				method: 'POST', // метод POST
				body: JSON.stringify(data), // типа запрашиаемого документа
				headers: new Headers({
					'Content-Type': 'application/json'
				}),
			})
			.then(response => response.json()) // возвращаем промис
	}

	post('check.php', {
			user: 'Krunal'
		})
		.then(data => console.log(data)) // обрабатываем результат вызова response.json()
		.catch(error => console.error(error))



	// 4444444444444444444444444444444444444444444444444444444444444444444444444444444444

	// 	<form id="formElem">
	//   <input type="text" name="name" value="John">
	//   <input type="text" name="surname" value="Smith">
	//   <input type="submit">
	// </form>

	// <script>
	//   formElem.onsubmit = async (e) => {
	//     e.preventDefault();

	//     let response = await fetch('/article/formdata/post/user', {
	//       method: 'POST',
	//       body: new FormData(formElem)
	//     });

	//     let result = await response.json();

	//     alert(result.message);
	//   };
	</script>
</body>

</html>