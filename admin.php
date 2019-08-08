<?php include 'session.php'?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Add news</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" href="templates/header/header.css">
</head>
<body>
	<?php include 'templates/header/_header.php';?>
	<main class="admin-panel">
		<form class="admin-panel__form" action="admin.php" method="POST">
			<input class="admin-panel__form__input admin-panel__form__input_data-title" type="text" placeholder="Введите заголовок новости">
			<textarea class=" admin-panel__form__input admin-panel__form__input_data-news" name="" cols="30" rows="10" placeholder="Введите текст статьи"></textarea>
			<input class="admin-panel__form__input admin-panel__form__btn" type="submit" value="Add">
		</form>
	</main>
</body>
</html>