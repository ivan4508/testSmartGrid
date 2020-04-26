<?php session_start(); $title = "Создание таблиц"; require_once "header.php"; StartPage(); ?>

<h2>Подключение к БД</h2>
<?php StartDB(); ?>

<h2>Создание таблиц</h2>
<?php InitDB(); ?>

<h2>Заполнение данными</h2>
<?php PutDB(); ?>
<a href="index.php">На главную</a>

<?php EndPage(); require_once "footer.php";  ?>
