<?php
$file = 'stat.log';  // файл для записи истории посещения сайта
$col_max=1000;    	// ограничение числа строк log-файла 


$date = date("H:i:s d.m.Y");
$agent = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_NAME'];
$home = $_SERVER['REQUEST_URI'];

$lines="";
if(file_exists ($file))
{
	$lines = file($file);	
}	
	
// Обрезаем записи, если больше максимума
while(count($lines) > $col_max) 
{
	array_shift($lines);
}
$lines[] = $date."|".$agent."|".$server."|".$home."|\r\n";
file_put_contents($file, $lines);
?>
