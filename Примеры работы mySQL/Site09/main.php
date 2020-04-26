<?php

function ShowFileName()
{
	print __FILE__."<br>";
}

function ShowArray1()
{
	$a = [26, 57, 38, 6, 78, 26];

	for ($i=0; $i<6 ; $i++)
	{
		print "$a[$i] ";
	} 
}

function ShowArray2()
{
	$a = 
	[
		'first'  =>  'Яблоко', 
		'second'  =>  ' Груша ', 
		'third'  =>  'Слива'
	];
	foreach ($a as $value)
	{
		print "$value ";
	} 
}

function ShowArray3()
{
	$a = [26, 57, 38, 6, 78, 26];
	$i=0;

	while ($i<6)
	{
		print "$a[$i] ";
		$i++;
	} 
}

function ShowArray4()
{
	$a = [26, 57, 38, 6, 78, 26];
	$i=0;

	do
	{
		print "$a[$i] ";
		$i++;
	} 
	while ($i<6);
}


function ShowArray5()
{
	$cars = array 
			(
				array("Мерседес",2017,"черный"),
				array("БМВ",2018,"белый"),
				array("Ауди",2017,"красный")  
			);

?>
<table border="1" cellpadding="4" cellspacing="0" background-color: rgb(187, 224, 227);
style=" background-color: rgb(187, 224, 227);">
<tbody>
<?php
	foreach ($cars as $massiv)
	{
		print "<tr>";
		foreach($massiv  as  $value)
		{
			print "<td>$value</td>";
		}
		print "</tr>";
	}
?>
</tbody>
</table>
<?php	
}

function ShowArray6()
{
	$a = array
	(
		"Иван" => array("Фамилия"=>"Иванов", "Возраст"=>"34", "Должность"=>"инженер"),
		"Петр" => array("Фамилия"=>"Петров", "Возраст"=>"29", "Должность"=>"вебмастер"),
		"Сидор" => array("Фамилия"=>"Сидоров", "Возраст"=>"37", "Должность"=>"программист")
	);

print <<<END
<table border="1" cellpadding="4" cellspacing="0" background-color: rgb(187, 224, 227);
style=" background-color: rgb(187, 224, 227);">
<tbody>
<tr>
<td>{$a["Иван"]["Фамилия"]}</td>
<td>{$a["Иван"]["Возраст"]}</td>
<td>{$a["Иван"]["Должность"]}</td>
</tr>
<tr>
<td>{$a["Петр"]["Фамилия"]}</td>
<td>{$a["Петр"]["Возраст"]}</td>
<td>{$a["Петр"]["Должность"]}</td>
</tr>
<tr>
<td>{$a["Сидор"]["Фамилия"]}</td>
<td>{$a["Сидор"]["Возраст"]}</td>
<td>{$a["Сидор"]["Должность"]}</td>
</tr>

</tbody>
</table>
END;


}
?>
