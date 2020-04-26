<?php require_once "main.php"; require_once "start_mysql.php";
$taburl = htmlspecialchars($_POST['taburl']);
StartDB();
// Получение заголовка сайта
$tab = SiteTitle($taburl);
// Получение скриншота сайта
$shot = SiteScreenshot($taburl);
// Код группы Общие
$group = 1;
// Получение кода новичка
$SQL = "SELECT * FROM Клиенты WHERE `Пароль` LIKE '1'";
	
if (!$result2 = mysqli_query($db, $SQL)) 
{
	printf("Ошибка в запросе: %s\n", mysqli_error($db));
}
$row = mysqli_fetch_assoc($result2);
$client = $row['Код клиента'];
mysqli_free_result($result2);

$SQL = "INSERT INTO Закладки
					(`Закладка`, `Адрес`, `Скриншот`, `Код группы`, `Код клиента`) 
			VALUES 	('$tab', '$taburl', '$shot', '$group', '$client')";		
	//print $SQL."<br>";
mysqli_query($db, $SQL);
EndDB();
header("Location: index.php");
