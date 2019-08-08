<?php
if (!isset($_SESSION['token'])) {
	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
	<form class="form" method="POST" action="login.php">
		<input class="form__user form__input" name="login" type="text" placeholder="Логин">
		<input class="form_email form__input" name="pass" type="password" placeholder="email">
		<input class="form_pass form__input" name="pass" type="password" placeholder="Введите пароль">
		<input class="form_pass form__input" name="pass" type="password" placeholder="Подтвердите пароль">
		<input class="form__btn form__input" name="submit" type="submit" value="reg">

	</form>
	</body>
	</html>
	';

}
?>