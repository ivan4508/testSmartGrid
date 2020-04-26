<?php $title = "Урок 4.5"; require_once "header.php"; ?>

<div id="wrapper">
<div id="header">
	<h2>Работа с объектами базы данных</h2>
</div> 

<div id="content">

<h2>Подключение к БД</h2>
<?php StartDB(); ?>

<h2>Создание таблиц</h2>
<?php InitDB(); ?>

<h2>Заполнение данными</h2>
<?php PutDB(); ?>

<h2>Получение данных</h2>
<?php GetDB(); ?>

<h2>Правка данных</h2>
<a href="edit_table.php">Правка данных</a>

<h2>Закрытие БД</h2>
<?php EndDB(); ?>


<h2>Задание</h2>
<p>Добавьте в таблицу 'Товары' поле 'Свойства' и обеспечьте возможность его редактирования.</p>
</div>
<div id="footer">
</div>

</div>

<?php require_once "footer.php";  ?>
