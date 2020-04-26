<?php $title = "Урок 7.3"; require_once "header.php"; ?>

<div id="wrapper">
<div id="header">
	<h2>Сервис визуальных закладок</h2>
</div> 

<div id="content">

<?php 
StartDB();

//InitDB(); 

ShowTabs();

?>
<div style="clear: both;">
<br>	
<form action="addtab.php" method="post">
        Введите адрес сайта: <input name="taburl" maxlength=2048 size=60 value='http://yandex.ru'>
        <input type="submit" value="Добавить сайт">
</form>
</div>	

<a href="edit_table.php">Правка закладок</a>


<?php EndDB(); ?>

</div>
<div id="footer">
</div>

</div>

<?php require_once "footer.php";  ?>
