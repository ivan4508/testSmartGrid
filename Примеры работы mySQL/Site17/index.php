<?php $title = "Урок 4.6"; require_once "header.php"; ?>

<div id="wrapper">
<div id="header">
	<h2>Работа с датой и временем</h2>
</div> 

<div id="content">

<h2>Вывод даты и времени</h2>
<?php

print date("d.m.y")."<br>";
print date("Y-m-d H:i:s")."<br>"; 


print "<h2>Вывод массива даты-времени</h2>";
$today = getdate();
print_r($today);

printf ("<p>Текущий год - %d</p>", $today['year']);


StartDB();
InitDB();
PutDB(); 
?>

<h2>Получение данных</h2>
<?php GetDB(); ?>


<h2>Закрытие БД</h2>
<?php EndDB(); ?>


<h2>Задание</h2>
<p>Измените программу так, чтобы при выводе таблицы "Сотрудники" появилось поле "Возраст".</p>
</div>
<div id="footer">
</div>

</div>

<?php require_once "footer.php";  ?>
