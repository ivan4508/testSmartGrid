<?php

function InitDB()
{
	global $db;

	if (mysqli_query($db, "DROP TABLE IF EXISTS Закладки;") === TRUE)
	{
		print "Таблица Закладки удалена<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	
	if (mysqli_query($db, "DROP TABLE IF EXISTS Группы;")  === TRUE)
	{
		print "Таблица Группы удалена<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	
	
	$SQL = "CREATE TABLE Закладки ( 
	`Код закладки` INT NOT NULL  AUTO_INCREMENT PRIMARY KEY, 
	`Закладка` VARCHAR(255) NOT NULL, 
	`Адрес` VARCHAR(2048) NOT NULL, 
	`Скриншот` VARCHAR(255) DEFAULT NULL,
	`Код клиента` INT NOT NULL,
	`Код группы` INT NOT NULL
	);";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		print "Таблица Закладки создана<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	
	$SQL = "CREATE TABLE Группы ( 
	`Код группы` INT NOT NULL  AUTO_INCREMENT PRIMARY KEY, 
	`Группа` VARCHAR(50) NOT NULL,
	`Код клиента` INT NOT NULL)
	";
	
	if (mysqli_query($db, $SQL) === TRUE)
	{
		print "Таблица Группы создана<br>";
	}
	else
	{
		printf("Ошибка создания таблицы 'Группы': %s\n", mysqli_error($db));
	}
	
	// Добавление группы Общая
		$SQL = "INSERT INTO Группы (`Группа`, `Код клиента` ) VALUES ('Общая', '1')";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		print "Запись 'Общая' в таблицу Группы добавлена.<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	
	
	// Создание таблицы Клиенты
	if (mysqli_query($db, "DROP TABLE IF EXISTS Клиенты;") === TRUE)
	{
		print "Таблица Клиенты удалена<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	
	$SQL = "CREATE TABLE Клиенты 
	( 
	`Код клиента` INT NOT NULL  AUTO_INCREMENT PRIMARY KEY, 
	`Логин` VARCHAR(50) NOT NULL, 
	`Пароль` VARCHAR(255) NOT NULL,
	`Доступ` int NOT NULL,
	`Регистрация` TIMESTAMP NOT NULL
	);";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		print "Таблица Клиенты создана<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}

	// Добавляем записи новичка и администратора
	$hash_pass = password_hash('admin100', PASSWORD_DEFAULT);
	$SQL = "INSERT INTO Клиенты (`Логин`, `Пароль`, `Доступ`) 
						VALUES 	('admin', '".$hash_pass."', '10'),
								('1', '1', '1')						
		";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		print "Запись администратора в таблицу Клиенты добавлена.<br>";
	}
	else
	{
		printf("Ошибка добавления записи администратора: %s\n", mysqli_error($db));
	}

	
}

function GetDB()
{
	global $db;
	$SQL = "
			SELECT Закладки.`Закладка`, Закладки.`Адрес`, Группы.`Группа`
			FROM Закладки JOIN Группы 
			ON Закладки.`Код группы` = Группы.`Код группы`";
	//print $SQL;
	if ($result = mysqli_query($db, $SQL)) 
	{
		//printf ("Число строк в запросе: %d<br>", mysqli_num_rows($result));
		print "<table border=1 cellpadding=5>"; 
		// Выборка результатов запроса 
		while( $row = mysqli_fetch_assoc($result) )
		{ 
			print "<tr>"; 
			printf("<td>%s</td><td>%s</td><td>%s</td>", $row['Закладка'], $row['Адрес'], $row['Группа']); 
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

function ShowTabs()
{
	global $db;
	$SQL = "SELECT * FROM Закладки LIMIT 9";
	//print $SQL;
	if ($result = mysqli_query($db, $SQL)) 
	{
		//printf ("Число строк в запросе: %d<br>", mysqli_num_rows($result));
		// Выборка результатов запроса 
		while( $row = mysqli_fetch_assoc($result) )
		{ 
			print "<div style='float: left; padding: 5;'><a href='".$row['Адрес']."'><img src='".$row['Скриншот']."'></a></div>";	
		} 
		mysqli_free_result($result);
	}
	else
	{
		printf("Ошибка в запросе: %s\n", mysqli_error($db));
	}
	 
}	

function AddDB()
{
	global $db;
	// Получение списка групп
	$SQL = "SELECT * FROM Группы";
	
	if (!$result = mysqli_query($db, $SQL)) 
	{
		printf("Ошибка в запросе: %s\n", mysqli_error($db));
	}
	// Получение кода новичка
	$SQL = "SELECT * FROM Клиенты WHERE `Пароль` LIKE '1'";
	
	if (!$result2 = mysqli_query($db, $SQL)) 
	{
		printf("Ошибка в запросе: %s\n", mysqli_error($db));
	}
	$row = mysqli_fetch_assoc($result2);
	$client = $row['Код клиента'];
	mysqli_free_result($result2);

?>
<form action="add.php" method="post">
	    <table>
        <tr><td>Закладка</td><td><input name="tab" maxlength=60 size=100></td></tr>
        <tr><td>Адрес</td><td><input name="taburl" maxlength=2048 size=100></td></tr>
        <tr><td>Группа</td><td>
        <select name="group" size="1">
<?php			
		// Цикл по группам 
		while( $row = mysqli_fetch_assoc($result) )	
		{		
			print "<option selected value='".$row['Код группы']."'>";
			print $row['Группа']."</option>";
		}
		mysqli_free_result($result);
		print "<input name='client' type='hidden' value='".$client."'>";
?>		
		</select></td>        
		</tr>
        <tr><td colspan=2><input type="submit" value="Добавить"></td></tr>
    </table>
</form>
	
<?php	
	
}

// Вывод таблицы с функциями редактирования
function EditDB()
{
	global $db;
	if ($result = mysqli_query($db, "SELECT * FROM Закладки")) 
	{
		print "<table border=1 cellpadding=5>";
		while ($row = mysqli_fetch_assoc($result)) 
		{
			print "<tr>"; 
			printf("<td>%s</td><td>%s</td>", $row['Закладка'], $row['Адрес']); 
			print "<td><a href='edit.php?id=".$row['Код закладки']."'>Открыть</a></td>";
			print "<td><a href='delete.php?id=".$row['Код закладки']."'>Удалить</a></td>";
			print "</tr>"; 			
		}	 
		print "</table><br>";
	}
}


function SiteScreenshot($url, $resolution='1024x768', $size='300', $format='png') 
{
	$filename = md5($url.$size.$resolution).".png";
	// Папка, где хранятся скриншоты сайтов
	$dir = "pics/";
	// Если скриншот существует, то выдаем его на экран
	if(is_file($dir.$filename)) 
	{
		return $dir.$filename;
	}
	// Иначе создаем скриншот
	else 
	{
	 	$geturl = "http://mini.s-shot.ru/".$resolution."/".$size."/".$format."/?".$url;
	 	//print $geturl;
	 	$screenshot = file_get_contents($geturl);
		$openfile = fopen($dir.$filename, "w+");
		// Сохраняем изображение
		$write = fwrite($openfile, $screenshot);
		return $dir.$filename;
	}
}


function SiteTitle($url) 
{
	$fp = file_get_contents($url);
	if (!$fp)
	{ 
		return null;
	}	

	$res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
	if (!$res) 
	{
		return null; 
	}	
	// Чистка заголовка
	$title = preg_replace('/\s+/', ' ', $title_matches[1]);
	$title = trim($title);
	return $title;
}
