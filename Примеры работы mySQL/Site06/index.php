<?php $title = "Урок 2.5"; require_once "header.php"; ?>

<h1>Типы данных</h1>
<?php TypeList(); ?>

<h2>Логический тип</h2>
<?php ShowFound(FALSE); ?>

<h2>Целый тип</h2>
<?php ShowInt() ?>

<h2>Числа с плавающей точкой</h2>
<?php ShowFloat() ?>

<h2>Строки</h2>
<?php ShowStr() ?>

<h2>Пустой тип</h2>
<?php ShowVar() ?>


<?php require_once "footer.php"; ?>
