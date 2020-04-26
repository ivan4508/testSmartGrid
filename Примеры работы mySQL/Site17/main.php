<?php


function InitDB()
{
	global $db;

	if (mysqli_query($db, "DROP TABLE IF EXISTS Сотрудники;") === TRUE)
	{
		//print "Таблица удалена<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	
	
	$SQL = "CREATE TABLE Сотрудники	(`Фамилия` VARCHAR(50) NOT NULL, 
									`Дата рождения` DATETIME NOT NULL,
									`Дата регистрации` TIMESTAMP NOT NULL );";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		//print "Таблица создана<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
}

function PutDB()
{
		global $db;

	$SQL = "INSERT INTO Сотрудники
					(`Фамилия`, `Дата рождения`) 
			VALUES 	('Иванов', '1980-12-30'), 
					('Петров', '1981-11-20'),
					('Сидоров','1980-05-30')
		";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		//print "Записи в таблицу вставлены.<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
}

function GetDB()
{
	global $db;
	// Вывод первого запроса
	if ($result = mysqli_query($db, "SELECT * FROM Сотрудники")) 
	{
		print "<table border=1 cellpadding=5>"; 
		// Выборка результатов запроса 
		while( $row = mysqli_fetch_assoc($result) )
		{ 
			print "<tr>"; 
			printf("<td>%s</td><td>%s</td><td>%s</td>", $row['Фамилия'], $row['Дата рождения'], $row['Дата регистрации']); 
			print "</tr>"; 
		} 
		print "</table>"; 
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	mysqli_free_result($result);
	
	// Вывод второго запроса
	print "<h3>Форматированный вывод</h3>";
	if ($result = mysqli_query($db, "SELECT `Фамилия`, 
								DATE_FORMAT(`Дата рождения`, '%Y') AS `Год рождения`, 
								DATE_FORMAT(`Дата регистрации`, '%d.%m.%Y %T') AS`Дата регистрации` FROM Сотрудники")) 
	{
		print "<table border=1 cellpadding=5>"; 
		// Выборка результатов запроса 
		while( $row = mysqli_fetch_assoc($result) )
		{ 
			print "<tr>"; 
			printf("<td>%s</td><td>%s</td><td>%s</td>", $row['Фамилия'], $row['Год рождения'], $row['Дата регистрации']); 
			print "</tr>"; 
		} 
		print "</table>"; 
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	mysqli_free_result($result);
	
		 
}	

?>
