<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
// include "db.php";

// $q = DB::run("SELECT * FROM list") -> fetchAll();
// $q = DB::run("SELECT id FROM list") -> fetchAll(PDO::FETCH_COLUMN);  // Получение колонки.
// $q = DB::run("SELECT id, title FROM list") -> fetchAll(PDO::FETCH_KEY_PAIR);  // Получение пар ключ-значение.

// print_r (json_encode($q, JSON_UNESCAPED_UNICODE));


// $full_name = $_POST['full_name'];
// $login = $_POST['login'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $password_confirm = $_POST['password_confirm'];

// $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
// if (mysqli_num_rows($check_login) > 0) {
	//     $response = [
		//         "status" => false,
		//         "type" => 1,
		//         "message" => "Такой логин уже существует",
//         "fields" => ['login']
//     ];

//     echo json_encode($response);
//     die();
// }


// $server = "localhost"; /* имя хоста (уточняется у провайдера), если работаем на локальном сервере, то указываем localhost */
// $server_username = "root"; /* Имя пользователя БД */
// $server_password = ""; /* Пароль пользователя БД, если у пользователя нет пароля то, оставляем пустым */
// $server_database = "notes"; /* Имя базы данных, которую создали */

// $id = $_POST['id'];
// $title = $_POST['title'];
// $description = $_POST['description'];
// $status = $_POST['status'];

// $connect = new mysqli($server, $server_username, $server_password, $server_database);

// mysqli_query($connect, "INSERT INTO `list` (`id`, `title`, `description`, `status`) VALUES ($id, $title, $description, $status)");
// mysqli_query($connect, "INSERT INTO `list` (`id`, `title`, `description`, `status`) VALUES ('4', 'Проверка', 'Проверить FETCH запрос', '1')");

// echo ($_POST['body']);
print_r ($_POST);
// $out = json_decode($_POST, true);
// print_r (json_encode($_POST, JSON_UNESCAPED_UNICODE));