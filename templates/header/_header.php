<header class="header">
	<p id="name" class="header__name"><?php echo $_SESSION['name']; ?></p>
	<h1 class="header__title">News Page</h1>
	<div class="header__container_links">
	<?php
	if ($status === 'admin') {
		echo '
			<a class="header__link header__link_admin-panel" href="/admin.php">Add news</a>
		';
	}
	if (!isset($_SESSION['name'])) {
		echo '
			<a class="header__link header__link_login" href="/login.php">Log In</a>
			<a class="header__link header__link_signin" href="#">Sign In</a>
		';
	}
	else {
		echo '
			<a class="header__link header__link_exit" name="exit" href="/login.php?exit">Exit</a>
		';
	}
	if ($_GET['exit']) {
		session_unset();
		session_destroy();
		setcookie(session_name(), '', time()-3600, '');
	}
	?>
	</div>
</header>