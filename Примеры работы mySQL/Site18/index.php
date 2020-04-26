<?php $title = "Урок 5.1"; require_once "header.php"; ?>

<div id="wrapper">
<div id="header">
	<h2>Работа с посетителями</h2>
</div> 

<div id="content">

<h2>Вывод информации сервера</h2>
<?php

	foreach($_SERVER as $k=>$v) 
	{
		print("$k = $v<br/>");
	}

?>

<h2>Статистика посещений</h2>
<a href="view_stat.php">Смотреть статистику</a>


<h2>Задание</h2>
<p>Измените программу так, чтобы при выводе статистики появился столбец "Порт сервера".</p>
</div>
<div id="footer">
</div>

</div>

<?php require_once "footer.php";  ?>
