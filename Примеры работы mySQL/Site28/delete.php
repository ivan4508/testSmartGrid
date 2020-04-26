<?php require_once "start_mysql.php";
StartDB();
$id = $_GET['id'];
$SQL = "DELETE FROM Закладки WHERE `Код закладки`='$id'";

if (!$result = mysqli_query($db, $SQL)) 
{
	printf("Ошибка в запросе: %s\n", mysqli_error($db));
}
EndDB();
header("Location: ".$_SERVER['HTTP_REFERER']);
