<?php
include 'db_connect.php';
session_start();
if (isset($_POST['submit'])) {
	$username = htmlspecialchars(trim($_POST['user']));
	$password = htmlspecialchars(trim($_POST['pass']));

	$sqlUser = "SELECT `username`, `password` FROM `users` WHERE `username` = "."'$username'"." AND `password` = "."'$password'";

	$resData = mysqli_query($db, $sqlUser);



	if ($username === '' and $password === '') {echo 'Заполните пустые поля!';}
	elseif ($username === '') {echo 'Введите логин';}
	elseif ($password === '') {echo 'Введите пароль';}
	elseif (($username !== '') and ($password !== '')) {
		while ($usersData = mysqli_fetch_array($resData)) {
			if ($usersData['username'] === $username and $usersData['password'] === $password) {
				header('refresh: 3; url=news.php');
				setcookie('name', $usersData['username'], time() + 3600, '/');
				setcookie('auth', 'online', time() + (-3600*24*30), '/');
				$_SESSION['name'] = $usersData['username'];
				echo $notice = 'Вы успешно авторизированы!';
			}
		}
	}
	else {echo 'Введены некорректные данные!';}
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Log in</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<form class="form" method="POST" action="login.php">
		<input class="form__input form_input_user" type="text" name="user" placeholder="Логин" value="<?php if (isset($username)) {echo $username;} ?>">
		<input class="form__input form__input_pass" type="text" name="pass" placeholder="Пароль" value="<?php if (isset($password)) {echo $password;} ?>">
		<input class="form__input form__input_btn" type="submit" name="submit" value="Войти">
	</form>	
</body>
</html>
