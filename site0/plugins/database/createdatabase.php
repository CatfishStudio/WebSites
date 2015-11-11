<?php
	/* Соединение с сервером баз данных */
	$db = mysql_connect($server, $uid, $pass);
	/* Запрос на создание базы данных  */
	$query = mysql_query("CREATE DATABASE ".$database, $db);
	/* Проверка успешности выполнения */
	if(!$query){
		echo "<br><br>Ошибка создания базы данных!";
		mysql_close();
		exit;
	}else{
		echo "<br><br>База данных успешно создана!";
		mysql_close();
	}
	echo "<br><br>";
	echo "<form action='index.php?target=checkdatabase' method='post'>";
	echo "<input class='button' type='submit' value='Обновить' id='back'>";
	echo "</form>";
?>