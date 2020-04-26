<?php $title = "Урок 3.1"; require_once "header.php"; ?>

<h1>Форма ввода</h1>

<h2>Метод GET</h2>
<form action="hello1.php" method="get">
	Имя: <input type="text"  name="name" size="20">
	<input type="submit" value= "ok">
</form>

<!--
<h2>Метод GET с защитой от взлома</h2>
<form action="hello2.php" method="get">
	Имя: <input type="text"  name="name" size="20">
	<input type="submit" value= "ok">
</form>
-->

<!--
<h2>Метод POST с защитой от взлома</h2>
<form action="hello3.php" method="post">
	Имя: <input type="text"  name="name" size="20">
	<input type="submit" value= "ok">
</form>
-->

<?php require_once "footer.php"; ?>
