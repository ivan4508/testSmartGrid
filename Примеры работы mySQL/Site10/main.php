<?php

$a = ["Chocolate", "Midnight", "Modernist", "Oldstyle", "Steely", "Swiss", "Traditional", "Ultramarine"];

function ShowFileName()
{
	print __FILE__."<br>";
	global $index;
	print $index;
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


function ShowStyle()
{
	global $a;
	if (isset($_GET["index"]))
	{
		$i = $_GET["index"];
		print '<link rel="stylesheet" href="http://www.w3.org/StyleSheets/Core/'.$a[$i].'"';
	}
}

function ShowStyleName()
{
	global $a;
	if (isset($_GET["index"]))
	{
		$i = $_GET["index"];
		print $a[$i];
	}	
}

function NextIndex($index)
{
	if ($index < 7)
	{
		$index++;
	}
	else
	{
		$index = 1;
	}
	return $index;
}

function NextStyle()
{
	if (isset($_GET["index"]))
	{
		$index = NextIndex($_GET["index"]); 
		print '<a href="/site10/?index='.$index.'">Следующий стиль</a>';
	}
	else
	{	
		print '<a href="/site10/?index=1">Следующий стиль</a>';
	}	
}

?>
