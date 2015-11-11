<!DOCTYPE html>
<html>
<head>
	<title>Catfish QA</title>
	<meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="window">
		<?php
			$server = $_POST['server'];
			$uid = $_POST['uid'];
			$pass = $_POST['pass'];
			$database = $_POST['database'];
			
			$systemUsersLogin = $_POST['systemUsersLogin'];
			$systemUsersPass = $_POST['systemUsersPass'];
	
			$target = $_GET["target"];
			
			if($target === null || $target === "checkdatabase") /* Загрузка */
			{
				include "plugins/database/checkdatabase.php"; /* проверка созданной базы данных */
			}
			elseif($target === "createdatabase")
			{
				include "plugins/database/createdatabase.php"; /* Создание базы данных */
			}
			elseif($target === "createtables")
			{
				include "plugins/database/cteatetables.php"; /* Создание таблиц в базе данных */
			}
			elseif($target === "enter")
			{
				include "plugins/login/login.php"; /* Вход в систему */
			}
			elseif($target === "checkuser")
			{
				include "plugins/login/checkuser.php"; /* Вход в систему */
			}
			
			
			
		?>
	</div>
</body>
</html>