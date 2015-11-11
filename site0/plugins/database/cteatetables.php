<?php
	/* Соединение с сервером баз данных */
	$db = mysql_connect($server, $uid, $pass);
	/*Соединение с базой данных*/
	mysql_select_db($database, $db);
		
	/*Создание таблицы Системные пользователи (system_users) ========= */
	$query = mysql_query("CREATE TABLE system_users (
		system_users_id int(3) NOT NULL AUTO_INCREMENT,
		system_users_name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
		system_users_login varchar(255) COLLATE utf8_unicode_ci NOT NULL,
		system_users_pass varchar(255) COLLATE utf8_unicode_ci NOT NULL,
		system_users_admin int(1) NOT NULL DEFAULT '0',
		PRIMARY KEY (system_users_id),
		UNIQUE KEY system_users_login (system_users_login)
	)", $db);
	/* Проверка успешности выполнения */
	if(!$query){
		echo "<br><br>Ошибка!!! Таблица \"system_users\" - не создана! ";
		echo "<br><br>Подробное описание ошибки: ", mysql_error();
		$query = mysql_query("DROP DATABASE ".$database, $db);
		exit;
	}else{
		echo "<br><br>Таблица \"system_users\" - успешно создана!";
	}
	
	$query = mysql_query("INSERT INTO system_users (system_users_id, system_users_name, system_users_login, system_users_pass, system_users_admin) VALUES
		(1, 'Администратор', 'admin', 'admin', 1),
		(2, 'Пользователь', 'user', 'user', 0)", $db);
	/* Проверка успешности выполнения */
	if(!$query){
		echo "<br><br>Ошибка!!! Добавление данных в табоицу \"system_users\" - произошла ошибка! ";
		echo "<br><br>Подробное описание ошибки: ", mysql_error();
		$query = mysql_query("DROP DATABASE ".$database, $db);
		exit;
	}else{
		echo "<br><br>Информация добавлена в таблицу \"system_users\" - успешно!";
	}
	/*==================================================================*/
	
	echo "<br><br>";
	echo "<form action='index.php?target=enter' method='post'>";
	echo "<input class='button' type='submit' value='Обновить' id='back'>";
	echo "</form>";
?>