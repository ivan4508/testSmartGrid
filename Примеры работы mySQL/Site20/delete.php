<?php $title = "Удаление товара"; require_once "header.php"; 
	
	StartDB();
	$id = $_GET['id'];
	$SQL = "DELETE FROM Товары WHERE `Код товара`='$id'";
	print $SQL;
	if (!$result = mysqli_query($db, $SQL)) 
	{
		printf("Ошибка в запросе: %s\n", mysqli_error($db));
	}
	EndDB();
	header("Location: ".$_SERVER['HTTP_REFERER']);
