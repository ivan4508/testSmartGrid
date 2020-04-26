<?php
// 3. Шрифт Google Fonts
header("Content-type: image/png"); 
$pic = ImageCreateTrueColor(600, 400); //пустой холст
ImageFill($pic, 0, 0, 0xf8f8f8); //Фоновый цвет



$color = imagecolorallocate($pic, 0, 0, 255);
$text = 'Шрифт Roboto';
$font = './Fonts/Roboto-Black.ttf';

for ($i = 1; $i <= 5; $i++) 
{
	$size = $i*7;
	$y = $i*50;
	ImageTtfText($pic, $size, 0, 0, $y, $color, $font, $text);
}	


ImagePNG($pic); 
ImageDestroy($pic); 
?>
