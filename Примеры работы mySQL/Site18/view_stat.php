<?php $file=file("stat.log"); ?>
<html>
<head>
<style type='text/css'>
 td.t {PADDING-LEFT: 3px; FONT-SIZE: 9pt; PADDING-TOP: 2px; FONT-FAMILY: Arial; }
</style>
</head>

<body>
<center>

<h1>Статистика посещений</h1> 

<table width="680" cellspacing="1" cellpadding="1" border="0"
    STYLE="table-layout:fixed">
<tr bgcolor="#eeeeee">
 <td class="t" width="100"><b>Время и дата</b></td>
 <td class="t" width="200"><b>Данные о посетителе</b></td>
 <td class="t" width="100"><b>Сервер</b></td>
 <td class="t" width="280"><b>Посещенный URL</b></td>
</tr>

<?php
$col=sizeof($file);
for ($si=sizeof($file)-1; $si+1>sizeof($file)-$col; $si--) 
{
	$string=explode("|",$file[$si]);
	$q1[$si]=$string[0]; // дата и время
	$q2[$si]=$string[1]; // имя 
	$q3[$si]=$string[2]; // ip 
	$q4[$si]=$string[3]; // адрес посещения
	print '<tr bgcolor="#eeeeee"><td class="t">'.$q1[$si].'</td>';
	print '<td class="t">'.$q2[$si].'</td>';
	print '<td class="t">'.$q3[$si].'</td>';
	print '<td class="t">'.$q4[$si].'</td></tr>';
}
?>	
</table>
</body>
</html>

