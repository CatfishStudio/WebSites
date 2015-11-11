<?php
	include "config.php";
	$db = mysql_connect($server, $uid, $pass);
	mysql_select_db($database,$db);
	$query = mysql_query("SELECT * FROM system_users", $db);
	
	if(!$query) 
	{
		echo "<h1>Создание информационной системы Catfish QA</h1><br />";
		echo "<h2>Создание базы данных:</h2><br />";
		echo "<form action='index.php?target=createdatabase' method='post'>";
		echo "<label>Server:<br /><input class='textbox' type='text' name='server' id='server' value='$server'></label><br /><br />";
		echo "<label>Database:<br /><input class='textbox' type='text' name='database' id='database' value='$database'></label><br /><br />";
		echo "<label>Uid:<br /><input class='textbox' type='text' name='uid' id='uid' value='$uid'></label><br /><br />";
		echo "<label>Pass:<br /><input class='textbox' type='password' name='pass' id='pass' value='$pass'></label>";
		echo "<br /><input class='button' type='submit' value='Create database'>";
		echo "</form>";
		echo "<br /><br />";
		echo "<h2>Создание таблиц:</h2><br />";
		echo "<form action='index.php?target=createtables' method='post'>";
		echo "<label>Server:<br><input class='textbox' type='text' name='server' id='server' value='$server'></label><br /><br />";
		echo "<label>Database:<br><input class='textbox' type='text' name='database' id='database' value='$database'></label><br /><br />";
		echo "<label>uid:<br><input class='textbox' type='text' name='uid' id='uid' value='$uid'></label><br /><br />";
		echo "<label>Pass:<br><input class='textbox' type='password' name='pass' id='pass' value='$pass'></label>";
		echo "<br><input class='button' type='submit' value='Create tables'>";
		echo "</form>";
		mysql_close();
		exit;
	}else{
		include "plugins/login/login.php";	
	}
?>