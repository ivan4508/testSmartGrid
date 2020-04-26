<?php


function InitDB()
{
	global $db;

	// Создание таблицы Users
	if (mysqli_query($db, "DROP TABLE IF EXISTS Users;") === TRUE)
	{
		print "Таблица Users удалена<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	
	$SQL = "CREATE TABLE Users 
	( 
	`iduser` INT NOT NULL  AUTO_INCREMENT PRIMARY KEY, 
	`login` VARCHAR(50) NOT NULL, 
	`password` VARCHAR(255) NOT NULL,
	`reg_time` TIMESTAMP NOT NULL
	);";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		print "Таблица Users создана<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}


	// Создание таблицы Товары 
	if (mysqli_query($db, "DROP TABLE IF EXISTS Товары;") === TRUE)
	{
		//print "Таблица Товары удалена<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	
	
	
	$SQL = "CREATE TABLE Товары ( 
	`Код товара` INT NOT NULL  AUTO_INCREMENT PRIMARY KEY, 
	`Товар` VARCHAR(50) NOT NULL, 
	`Цена` INT NOT NULL
	);";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		//print "Таблица Товары создана<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}

	// Создание таблицы Группы 
	if (mysqli_query($db, "DROP TABLE IF EXISTS Группы;")  === TRUE)
	{
		//print "Таблица Группы удалена<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}


	
	$SQL = "CREATE TABLE Группы ( 
	`Код группы` INT NOT NULL  AUTO_INCREMENT PRIMARY KEY, 
	`Группа` VARCHAR(50) NOT NULL, 
	`Менеджер` VARCHAR(50) NOT NULL);";
	
	if (mysqli_query($db, $SQL) === TRUE)
	{
		//print "Таблица Группы создана<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
}

function PutDB()
{
	global $db;

	$SQL = "INSERT INTO Товары
					(`Товар`, `Цена`) 
			VALUES 	('Телевизор', '20000'), 
					('Холодильник', '45000'),
					('Диктофон', '5000')
		";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		//print "Записи в таблицу Товары добавлены.<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	
	$SQL = "INSERT INTO Группы
					(`Группа`, `Менеджер`) 
			VALUES 	('Электроника', 'Иванов'), 
					('Бытовая техника', 'Петров')
		";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		//print "Записи в таблицу Группы добавлены.<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}

}

function GetDB()
{
	global $db;
	$SQL = "SELECT * FROM Товары";
	
	if ($result = mysqli_query($db, $SQL)) 
	{
		print "<table border=1 cellpadding=5>"; 
		// Выборка результатов запроса 
		while( $row = mysqli_fetch_assoc($result) )
		{ 
			print "<tr>"; 
			printf("<td>%s</td><td>%s</td>", $row['Товар'], $row['Цена']); 
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

// Вывод формы для добавления товара
function AddDB()
{
	global $db;
	// Получение списка товаров
	$SQL = "SELECT * FROM Товары";
	
	if (!$result = mysqli_query($db, $SQL)) 
	{
		printf("Ошибка в запросе: %s\n", mysqli_error($db));
	}

?>
<form action="add.php" method="post">
	    <table>
        <tr><td>Название</td><td><input name="item" maxlength=60 size=30></td></tr>
        <tr><td>Цена</td><td><input name="price" maxlength=7 size=7></td></tr>
        <tr><td colspan=2><input type="submit" value="Добавить"></td></tr>
    </table>
</form>
	
<?php	
	
}


// Вывод таблицы с функциями редактирования
function EditDB()
{
	global $db;
	if ($result = mysqli_query($db, "SELECT * FROM Товары")) 
	{
		print "<table border=1 cellpadding=5>";
		while ($row = mysqli_fetch_assoc($result)) 
		{
			print "<tr>"; 
			printf("<td>%s</td><td>%s</td>", $row['Товар'], $row['Цена']); 
			print "<td><a href='edit.php?id=".$row['Код товара']."'>Открыть</a></td>";
			print "<td><a href='delete.php?id=".$row['Код товара']."'>Удалить</a></td>";
			print "</tr>"; 			
		}	 
		print	"</table><br>";
	}
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

// Проверка авторизации
function CheckLogin()
{
	// Проверка логина
	if(isset($_POST['userlogin']))
	{
		$_SESSION['login'] = $_POST['userlogin'];
		$_SESSION['password'] = $_POST['userpass'];
		print "<br>Логин ".$_SESSION['login'];
		print "<br>Пароль ".$_SESSION['password'];
		// Проверка пароля
		if(CheckPassword())
		{
			print "<a href='edit_table.php'>Правка данных</a>";
		}
		else
		{
			print "<br>Доступ запрещен";
			print "<a href='login.php'><br>Введите логин и пароль повторно</a>";
		}
    }
	else
	{
		print "<a href='login.php'>Для правки данных введите логин и пароль</a>";
	}
}

function CheckPassword() 
{
	global $db;
    // Составляем строку запроса
    $SQL = "SELECT * FROM `users` WHERE `login` LIKE '".$_SESSION['login']."'";

	if ($result = mysqli_query($db, $SQL)) 
	{
		// Если нет пользователя с таким логином, то завершаем функцию
		if(mysqli_num_rows($result)== 0) 
		{
			print "<br>Нет такого логина";
			return FALSE;
		}
		// Если логин есть, то проверяем пароль
		$row = mysqli_fetch_assoc($result); 
		if (password_verify($_SESSION['password'], $row['password']))
		{
			print "Пароль совпадает<br>";
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


// Функция регистрации пользователя
function RegUser() 
{
	global $db;
	// Проверка данных
	if(!$_POST['user_login']) 
	{
		print "<br>Не указан логин";
		return FALSE;
	} 
	elseif(!$_POST['user_password']) 
	{
		print "<br>Не указан пароль";
		return FALSE;
	}
	
	// Проверяем не зарегистрирован ли уже пользователь
	$SQL = "SELECT `login` FROM `users` WHERE `login` LIKE '".$_POST['user_login']. "'";

	// Делаем запрос к базе
	if ($result = mysqli_query($db, $SQL)) 
	{
		// Если есть пользователь с таким логином, то завершаем функцию
		if(mysqli_num_rows($result) > 0) 
		{
			print "<br>Пользователь с указанным логином уже зарегистрирован.";
			return FALSE;
		}
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	} 
	// Если такого пользователя нет, регистрируем его
	$hash_pass = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
	$SQL = "INSERT INTO `users` 
			(`login`,`password`) VALUES 
			('".$_POST['user_login']. "','".$hash_pass. "')";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		//print "<br>Пользователь зарегистрирован";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
		return FALSE;
	}
	
	return TRUE;
}
