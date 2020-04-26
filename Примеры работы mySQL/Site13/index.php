<?php $title = "Урок 3.6"; require_once "header.php"; ?>

<div id="wrapper">
	
<div id="header">
	<h2>Гостевая книга</h2>
</div> 

<div id="content">

<h2>Записи</h2>
<?php GuestBook(); ?>

<h2>Форма ввода</h2>
<form action="index.php" method="post">
<b>Оставьте Ваше мнение</b>
<table><tr>
<td>Ваше имя</td><td><input type="text" name="username"><br></td></tr>
<tr>
<td>Ваше мнение</td><td><textarea name="comment" cols=60 rows=5></textarea></td>
</tr>
</table>
<input type="Submit" value=" Отправить "><p>
</form>

<h2>Список файлов</h2>
<?php ShowFiles(); ?>


<h2>Задание</h2>
<p>Измените программу так, чтобы комментарий выводился зеленым цветом.</p>
</div>
<div id="footer">
</div>

</div>

<?php require_once "footer.php";  ?>
