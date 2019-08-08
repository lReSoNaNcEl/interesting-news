<?php
	$db = mysqli_connect('localhost', 'root', '', 'News_Page');
	if (!$db) {
		echo 'Ошибка подключения к базе';
	}
?>