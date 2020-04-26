<?php
// 2. Поворот изображения
header('Content-Type: image/png');

$filename = "./Pics/bridge.png";
$pic = ImageCreateFromPng($filename);

$pic_rot = ImageRotate($pic, 45, 0xf8f8f8);
ImagePng($pic_rot);

ImageDestroy($pic); 


?>
