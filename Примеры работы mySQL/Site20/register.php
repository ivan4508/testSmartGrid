<?php session_start(); $title = "Вход в систему"; require_once "header.php"; StartPage(); 


// Если была нажата кнопка регистрации
if(isset($_POST['register'])) 
{
	
	// Проверяем совпадение паролей
	if ($_POST['user_password'] === $_POST['password_again']) 
	{
		// Регистрация пользователя
		StartDB();
		$res = RegUser();
		EndDB();
		
		if($res)
		{
			print "<br>Вы успешно зарегистрировались в системе."; 
			print "<br>Сейчас вы будете переадресованы к странице авторизации."; 
			print "<br>Если это не произошло, перейдите на неё по <a href='index.php'>прямой ссылке</a>.</p>";
			header('Refresh: 5; URL = index.php');
		}
		else
		{
			print "<br>Во время регистрации произошли ошибки."; 
		}		
	}
	else
	{
		print "<br>Введенные пароли не совпадают.";
	}	
}

?>

<h1>Регистрация</h1>

<form action="register.php" method="post">
	<p>Логин<br><input name="user_login"size="20" type="text"></label></p>
	<p>Пароль<br><input name="user_password"size="20"  type="password" value = ''></label></p>
	<p>Повторите пароль<br><input name="password_again" size="20" type="password" value = ''></label></p>
	<p><input   name = "register" type="submit" value="Зарегистрироваться"></p>
	<p>Уже зарегистрированы?</p> 
	<a href= "index.php">На главную</a>
 </form>
 
 <?php EndPage(); require_once "footer.php";  ?>
