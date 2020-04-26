<?php session_start(); $title = "Закрытая зона"; require_once "header.php"; ?>
	
	<div id="wrapper">
<div id="header">
	<h2>Закрытая зона</h2>
</div> 

<div id="content">

<h2>Использование сессий</h2>
<?php	
	// Проверка регистрации пользователя
	if(isset($_SESSION['user']))
	{
		print "Привет, ".$_SESSION['user'];
		$_SESSION['count']++;
		print "<br>Число посещений закрытой зоны: ".$_SESSION['count'];
		print "<br><a href='index.php'>Главная</a>";
		print "<br><a href='exit.php'>Выход</a>";
	}
	else
	{
		if(isset($_POST['username']))
		{
			$_SESSION['user'] = $_POST['username'];
			$_SESSION['count']  =  0;
			print "Пользователь ".$_SESSION['user']." зарегистрирован";
			print "<br><a href='index.php'>На главную</a>";
		}	
		else
		{
			?>
			<form action="user.php" method="post">
					<table>
					<tr><td>Введите имя</td><td><input name="username" maxlength=60 size=30></td></tr>
					<tr><td colspan=2><input type="submit" value="Войти"></td></tr>
				</table>
			</form>		
			<?php 
		}
	}	
?>
</div>
<div id="footer">
</div>

</div>
<?php require_once "footer.php";  ?>
