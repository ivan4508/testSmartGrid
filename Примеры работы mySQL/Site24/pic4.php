<?php
 
// 4. Поворот шрифта
header("Content-type: image/png"); 
$pic = ImageCreateTrueColor(400, 400); //пустой холст
ImageFill($pic, 0, 0, 0xf8f8f8); //Фоновый цвет

$font = './Fonts/Roboto-Black.ttf';

for ($i = 1; $i <= 20; $i++) 
{
	$randcolor = ImageColorAllocate($pic, rand(0, 255), rand(0, 255), rand(0, 255));
	$angle = rand(0, 360);
	$size = rand(10, 50);	
	$x = rand(0, 400);
	$y = rand(0, 400);
	ImageTtfText($pic, $size, $angle, $x, $y, $randcolor, $font, 'Поворот');

}

ImagePNG($pic); 
ImageDestroy($pic); 
 
?>
