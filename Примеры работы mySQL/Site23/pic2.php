<?php
// 2. Линии
header("Content-type: image/png"); 
$pic = ImageCreateTrueColor(300, 200); //пустой холст
ImageFill($pic, 0, 0, 0xf8f8f8); //Фоновый цвет

for ($i = 1; $i <= 500; $i++) 
{
	$randcolor = ImageColorAllocate($pic, rand(0, 255), rand(0, 255), rand(0, 255));
	$x1 = rand(0, 150);
	$y1 = rand(0, 200);
	$x2 = rand(150, 300);
	$y2 = rand(0, 200);
	
	ImageLine($pic, $x1, $y1, $x2, $y2, $randcolor); 		    
}

ImagePNG($pic); 
ImageDestroy($pic); 
?>
