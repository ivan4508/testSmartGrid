<?php $title = "Правка таблицы"; require_once "header.php"; ?>

<div id="wrapper">
<div id="header">
	<h2>Правка таблицы закладок</h2>
</div> 

<div id="content">
	
<?php	
	StartDB();
	EditDB();
	EndDB();
?>
<a href="index.php">Вернуться на главную</a>	
</div>
<div id="footer">
</div>
</div>

<?php require_once "footer.php"; ?>
