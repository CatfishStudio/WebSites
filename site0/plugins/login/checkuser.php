<?php
	include "config.php";
	
	$db = mysql_connect($server, $uid, $pass);
	mysql_select_db($database,$db);
	$query = mysql_query("SELECT * FROM system_users WHERE (system_users_login = '$systemUsersLogin' AND system_users_pass = '$systemUsersPass')", $db);
	
	if(!$query) 
	{
		echo "Ошибка чтения данных из таблицы [system_users]: <br />Описание ошибки: ".mysql_error();
		mysql_close();
		exit;
	}
	else
	{
		$row = mysql_fetch_array($query);
		if($row['system_users_login'] === null)
		{
			echo "<h2>Вы ввели не верный логин или пароль!</h2>";
		}else{
			echo "<form method='post' action='application.php'>";
			echo "<h3>Вы успешно вошли в систему.</h3><br /><br />";
			echo "<input class='button' type='submit' value='Продолжить'>";
			echo "</form>";
		}
		
	}
?>