<?php $title = "Урок 3.5"; require_once "header.php"; ?>

<div id="wrapper">
	
<div id="header">
	<h2>3.5 Работа со строками</h2>
</div> 

<div id="content">
	
<h2>Ввод строки</h2>

<form action="index.php" method="post">
	Введите строку: <input type="text" name="firstname" size="20">
<input type="submit" value="Ok">
</form>

<br>
<h2>Обработка строки</h2>
<?php ShowText() ?> 

<h2>Задание</h2>
<p>Исправить программу так, чтобы она правильно работала с кириллицей.</p>

</div> <!-- end content -->
<div id="footer">
</div> 
</div> <!-- End wrapper -->



<?php require_once "footer.php";  ?>
