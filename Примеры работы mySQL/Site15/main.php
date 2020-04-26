<?php


function InitDB()
{
	global $db;

	if (mysqli_query($db, "DROP TABLE IF EXISTS Товары;") === TRUE)
	{
		print "Таблица Товары удалена<br>";
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
	
	
	$SQL = "CREATE TABLE Товары ( 
	`Код товара` INT NOT NULL  AUTO_INCREMENT PRIMARY KEY, 
	`Товар` VARCHAR(50) NOT NULL, 
	`Цена` INT NOT NULL,
	`Код группы` INT NOT NULL
	);";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		print "Таблица Товары создана<br>";
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
		print "Таблица Группы создана<br>";
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
					(`Товар`, `Цена`, `Код группы`) 
			VALUES 	('Телевизор', '20000', '1'), 
					('Холодильник', '45000', '2'),
					('Диктофон', '5000', '1')
		";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		print "Записи в таблицу Товары добавлены.<br>";
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
		print "Записи в таблицу Группы добавлены.<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}

}

function GetDB()
{
	global $db;
	$SQL = "
			SELECT Товары.`Товар`, Товары.`Цена`, Группы.`Группа`
			FROM Товары JOIN Группы 
			ON Товары.`Код группы` = Группы.`Код группы`";
	
	if ($result = mysqli_query($db, $SQL)) 
	{
		printf ("Число строк в запросе: %d<br>", mysqli_num_rows($result));
		print "<table border=1 cellpadding=5>"; 
		// Выборка результатов запроса 
		while( $row = mysqli_fetch_assoc($result) )
		{ 
			print "<tr>"; 
			printf("<td>%s</td><td>%s</td><td>%s</td>", $row['Товар'], $row['Цена'], $row['Группа']); 
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

?>
