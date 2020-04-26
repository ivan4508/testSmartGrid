<?php
// 1. Встроенные шрифты
header("Content-type: image/png"); 
$pic = ImageCreateTrueColor(300, 200); //пустой холст
ImageFill($pic, 0, 0, 0xf8f8f8); //Фоновый цвет

// Создание цвета
$black = imagecolorallocate($pic, 0, 0, 0);

for ($i = 1; $i <= 5; $i++) 
{
	$FontName = 'Font'.$i;
	ImageStringUp($pic, $i, $i*20, 50, $FontName, $black);
}	

ImagePNG($pic); 
ImageDestroy($pic); 
?>
