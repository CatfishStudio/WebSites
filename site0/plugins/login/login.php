<?php
	echo "<img src='img/logo.png' alt='' />";
	echo "<form method='post' action='index.php?target=checkuser'>";
	echo "<label><h3>Введите имя:</h3><input type='text' class='textbox' id='systemUsersLogin' name='systemUsersLogin'></label><br /><br />";
	echo "<label><h3>Введите пароль:</h3><input type='password' class='textbox' id='systemUsersPass' name='systemUsersPass'></label><br /><br />";
	echo "<input class='button' type='submit' value='Отправить'>";
	echo "</form>";
?>