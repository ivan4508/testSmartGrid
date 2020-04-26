<?php
// 1. Вывод рамки
header("Content-type: image/png"); 


// Загружаем рамку
$filename_frame = "./Pics/frame.png";
$frame = ImageCreateFromPng($filename_frame); 
ImageSaveAlpha($frame, TRUE);

ImagePNG($frame); 
ImageDestroy($frame); 

?>
