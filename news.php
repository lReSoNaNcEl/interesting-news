<?php
include 'db_connect.php';
session_start();
$SayHi = 'Вы авторизированы, '.$_SESSION['name'];
$name = $_SESSION['name'];
$authState = true;


$sqlStatus = "SELECT `status` FROM `users` WHERE `username` = "."'$name'"; 
$resStatus = mysqli_query($db, $sqlStatus);
while ($statusUser = mysqli_fetch_array($resStatus)) {
	$status = $statusUser['status'];
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>News</title>
	<link rel="stylesheet" href="css/news.css">
	<link rel="stylesheet" href="templates/header/header.css">
</head>
<body>
	<?php include 'templates/header/_header.php'; ?>
	<main class="main">
	<h3><?php
	 if (isset($_SESSION['name'])) {
	 	// echo $SayHi;
	 } else {
	 	echo 'Вы не авторизированы.';
	 }?>
	 </h3>
	 <div class="main__articles-wrapper">
	 <article class="main__articles-wrapper__new-item">
	 	<h3 class="main__articles-wrapper__new-item__title">Title-new</h3>
	 	<p class="main__articles-wrapper__new-item__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
	 </article>
	</div>
	</main>
<?php

switch ($status) {
	case 'admin': 
		echo 'Добро пожаловать, администратор';
		break;
	case 'user' : echo 'Добро пожаловать, пользователь';
		break;
	case 'banned' : echo 'Ваш аккаунт заблокирован';
		break;
	default : echo 'Вы не авторизованы';
}

if (isset($_GET['exit'])) {
	unset($_SESSION['name']);
	echo 'Привет';
}


?>
</body>
</html>