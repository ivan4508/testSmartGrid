<?php
// 1. Обрезка изображения
header("Content-type: image/png"); 
$filename = "./Pics/bridge.png";

// задание максимальной ширины и высоты
$width = 200;
$height = 200;

// Задание координат обрезки
$x = 50;
$y = 50;

$pic_r = ImageCreateTrueColor($width, $height);
$pic = ImageCreateFromPng($filename);
ImageAlphaBlending($pic_r, FALSE);
ImageSaveAlpha($pic, TRUE);
ImageSaveAlpha($pic_r, TRUE);

ImageCopyResampled($pic_r, $pic, 0, 0, $x, $y, $width, $height, $width, $height);

ImagePng($pic_r);
ImageDestroy($pic); 
ImageDestroy($pic_r); 
?>
