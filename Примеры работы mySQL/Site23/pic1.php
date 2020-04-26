<?php
 
// Рисование точек
header("Content-type: image/png"); 
$pic = ImageCreateTrueColor(300, 200); //пустой холст
ImageFill($pic, 0, 0, 0xf8f8f8); //Фоновый цвет

// Цикл рисования точек
for ($i = 1; $i <= 1000; $i++) 
{
	$randcolor = ImageColorAllocate($pic, rand(0, 255), rand(0, 255), rand(0, 255));
	ImageSetPixel($pic, rand(0, 300), rand(0, 200), $randcolor);
    
}

ImagePNG($pic); 
ImageDestroy($pic); 
 
?>
