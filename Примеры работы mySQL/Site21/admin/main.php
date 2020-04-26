<?php

function ShowUsers()
{
	global $db;
	$SQL = "SELECT * FROM Users";
	
	if ($result = mysqli_query($db, $SQL)) 
	{
		print "<table border=1 cellpadding=5>"; 
		// Выборка результатов запроса 
		while( $row = mysqli_fetch_assoc($result) )
		{ 
			print "<tr>"; 
			printf("<td>%s</td><td>%d</td><td>%s</td>", $row['login'], $row['level'], $row['reg_time']); 
			print "<td><a href='delete.php?id=".$row['iduser']."'>Удалить</a></td>";
			print "</tr>"; 
		} 
		print "</table>"; 
		mysqli_free_result($result);
	}
	else
	{
		printf("Ошибка в запросе: %s\n", mysqli_error($db));
	}
	 
}	

// Проверка авторизации
function CheckAdmin()
{
	// Проверка логина
	if(isset($_SESSION['login']))
	{
		// Проверка пароля
		if(CheckAdminPassword())
		{
			ShowUsers(); 
			print "<a href='../index.php'><br>На главную</a>";
		}
		else
		{
			print "<br>Доступ запрещен";
			print "<a href='../login.php'><br>Введите логин и пароль повторно</a>";
		}
    }
	else
	{
		print "<a href='../login.php'>Для доступа введите логин и пароль</a>";
	}
}

function CheckAdminPassword() 
{
	global $db;
    // Составляем строку запроса
    $SQL = "SELECT * FROM `users` WHERE `login` LIKE '".$_SESSION['login']."'";

	if ($result = mysqli_query($db, $SQL)) 
	{
		// Если нет пользователя с таким логином, то завершаем функцию
		if(mysqli_num_rows($result)== 0) 
		{
			print "<br>Нет такого администратора";
			return FALSE;
		}
		$row = mysqli_fetch_assoc($result); 
		// Если логин есть, то проверяем статус
		if($row['level'] < 10)
		{
			print "Нет прав для доступа<br>";
			return FALSE;
		}
		// Если логин и статус есть, то проверяем пароль

		if (password_verify($_SESSION['password'], $row['password']))
		{
			//print "Пароль администратора совпадает<br>";
			return TRUE;
		}
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
    print "Нет такого пароля<br>";
    return FALSE;
}

function StartPage()
{	
?>	
	<div id="wrapper">
<div id="header">
</div> 


<div id="content">
<?php
	
}

function EndPage()
{	
?>	
</div>
<div id="footer">
</div>

</div>

<?php
	
}


?>




