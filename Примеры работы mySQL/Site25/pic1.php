<?php
// 1. Информация о графическом файле
header("Content-type: image/png"); 
$filename = "./Pics/ornament.png";
$pic = imageCreateFromPng($filename); 

ImageSaveAlpha($pic, TRUE);



ImagePNG($pic); 
ImageDestroy($pic); 
?>
