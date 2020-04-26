<?php



function ShowArray1()
{
	$a = array("Иванов","Петров","Сидоров"); 
	print $a[1];
}

function ShowArray2()
{
	$a = 
	[
		"один" => "первое",
		"два" => "второе",
		"три" => "третье",
	];
	print $a["два"];
}

function ShowArray3()
{
	$cars = array 
			(
				array("Мерседес",2017,"черный"),
				array("БМВ",2018,"белый"),
				array("Ауди",2017,"красный")  
			);

print <<<END
<table border="1" cellpadding="4" cellspacing="0" background-color: rgb(187, 224, 227);
style=" background-color: rgb(187, 224, 227);">
<tbody>
<tr>
<td>{$cars[0][0]}</td>
<td>{$cars[0][1]}</td>
<td>{$cars[0][2]}</td>
</tr>
<tr>
<td>{$cars[1][0]}</td>
<td>{$cars[1][1]}</td>
<td>{$cars[1][2]}</td>
</tr>
<tr>
<td>{$cars[2][0]}</td>
<td>{$cars[2][1]}</td>
<td>{$cars[2][2]}</td>
</tr>
</tbody>
</table>
END;
	
}

function ShowArray4()
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
