<!-- *******************************************************************
Урок 2.2
Пример site3 - функции PHP
******************************************************************** -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Урок 2.2</title>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>

<div style="text-align: center;">
<?php // Начало программы на PHP

// 1. Вывод текста
$a=5;
$b=15;

print "a=$a<br>"."b=$b<br>";
echo "a=$a<br>","b=$b<br>";

print <<<END
Вывод большого текста с подстановкой переменных.<br> 
Переменная a=$a,<br>
Переменная b=$b<br>
END;

/*
// 2. Функция вывода даты
ShowDate();


function ShowDate() 
{
	print "Сегодня - ".date("d-m-Y",time());  
}
*/

/*
// 3. Функция вывода максимума
print "<br>Максимум - ".MaxNumber(5,10);

function MaxNumber($x, $y)
{
    if ($x>$y) return $x;
   else return $y;
}
*/


?> <!-- Завершение программы на PHP -->
</div>

</body>
</html>
