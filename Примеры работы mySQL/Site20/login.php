<?php session_start(); $title = "Вход в систему"; require_once "header.php"; StartPage(); ?>

<h1>Введите логин и пароль</h1>

<form action="index.php" method="post" >

	<p>Логин<br>
	<input name="userlogin"size="20"
	type="text" value=""></p>

	<p>Пароль<br>
	<input name="userpass"size="20"
	type="password" value=""></p> 

	<p><input name="login" type="submit" value="Войти"></p>

	<p> Еще не зарегистрированы?</p> 
	<a href = "register.php">Регистрация</a>
</form>
<?php EndPage(); require_once "footer.php";  ?>
