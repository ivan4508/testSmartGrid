<?php


function InitDB()
{
	global $db;

	if (mysqli_query($db, "DROP TABLE IF EXISTS Сотрудники;") === TRUE)
	{
		print "Таблица удалена<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	
	
	$SQL = "CREATE TABLE Сотрудники ( `N` INT NOT NULL, `Фамилия` VARCHAR(50) NOT NULL, `Оклад` INT NOT NULL);";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		print "Таблица создана<br>";
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
					(`N`, `Фамилия`, `Оклад`) 
			VALUES 	('1', 'Иванов', '35000'), 
					('2', 'Петров', '40000'),
					('3', 'Сидоров', '45000')
		";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		print "Записи в таблицу вставлены.<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
}

function GetDB()
{
	global $db;
	if ($result = mysqli_query($db, "SELECT N, Фамилия, Оклад FROM Сотрудники")) 
	{
		printf ("Число строк в запросе: %d<br>", mysqli_num_rows($result));
		print "<table border=1 cellpadding=5>"; 
		// Выборка результатов запроса 
		while( $row = mysqli_fetch_assoc($result) )
		{ 
			print "<tr>"; 
			printf("<td>%d</td><td>%s</td><td>%d</td>", $row['N'], $row['Фамилия'], $row['Оклад']); 
			print "</tr>"; 
		} 
		print "</table>"; 
		mysqli_free_result($result);
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	 
}	

?>
