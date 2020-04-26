<?php session_start(); $title = "Урок 6.6"; require_once "header.php"; StartPage(); ?>

<h2>Подключение к БД</h2>
<?php StartDB(); ?>

<h2>Создание таблиц</h2>
<a href="init.php">Начальное создание таблиц</a>

<h2>Получение данных</h2>
<?php GetDB(); ?>

<h2>Правка данных</h2>
<?php CheckLogin(); ?>

<h2>Администрирование сайта</h2>
<a href="./admin/index.php">Войти</a>

<?php EndDB(); ?>


<h2>Задание</h2>
<p>Добавьте при регистрации пользователей поле "Уровень доступа" .</p>

<?php EndPage(); require_once "footer.php";  ?>
