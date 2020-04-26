<?php session_start(); $title = "Урок 6.5"; require_once "header.php"; StartPage(); ?>

<h2>Подключение к БД</h2>
<?php StartDB(); ?>

<h2>Создание таблиц</h2>
<a href="init.php">Начальное создание таблиц</a>

<h2>Получение данных</h2>
<?php GetDB(); ?>

<h2>Правка данных</h2>
<?php CheckLogin(); ?>

<h2>Закрытие БД</h2>
<?php EndDB(); ?>


<h2>Задание</h2>
<p>Добавьте условие, что логин не может быть короче 6-ти символов.</p>

<?php EndPage(); require_once "footer.php";  ?>
