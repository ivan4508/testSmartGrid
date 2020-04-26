<?php


function TypeList()
{
?>
В зависимости от контекста PHP может присвоить следующие типы данных:

<br>
<li>boolean (логический тип)
<li>integer (целые числа)
<li>float (числа с плавающей точкой)
<li>string (строки)
<li>NULL (пустой тип)
<li>array (массивы)
<li>object (объекты) - экземпляры классов
<li>resource (ресурсы) - хранение ссылки на внешний ресурс
<br>
<?php
}

function ShowFound($found)
{
	if ($found)
	{
		print "Найдено";
	}
	else
	{
		print "Не найдено";
	}	
}

// Целые числа
function ShowInt()
{

	$int_10 = 28;
	$int_8 = 034; // восьмеричное число, начинается с 0
	$int_2 = 0b11100; // двоичное число, начинается с 0b
	$int_16 = 0x1C; // шестнадцатеричное число, начинается с 0x

	print '<br>$int_10 = '. $int_10;
	print '<br>$int_8 = '. $int_8;
	print '<br>$int_2 = '. $int_2;
	print '<br>$int_16 = '. $int_16;
	
/*
	printf('<br>$int_10 = %d', $int_10); 
	printf('<br>$int_8 = %o', $int_8); 
	printf('<br>$int_2 = %b', $int_2); 
	printf('<br>$int_16 = %X', $int_16); 
*/	
}

// Числа с плавающей точкой
function ShowFloat()
{
	$a1 = 1.56; 
	$a2 = 2.43e4; // Это означает 2.43 умноженное на десять в четвертой степени 

	print '<br>$a1 = '. $a1;
	print '<br>$a2 = '. $a2;

/*		
	printf('<br>$a1 = %.2f', $a1); 
	printf('<br>$a2 = %.2e', $a2); 
*/		
}

// Строки
function ShowStr()
{
	$a = 1;
	print '<br>$a = 1';
	print "<br>$a = \$a";
}

// Пустой тип
function ShowVar()
{
	$a = 1;
	if (is_null($a))
	{
		print "Нет значения";
	}
	else
	{
		print "Есть значение";
	}	
}

?>
