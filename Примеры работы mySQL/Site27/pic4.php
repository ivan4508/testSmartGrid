<?php
// 3. Зеркальное отражение
header('Content-Type: image/png');

$filename = "./Pics/bridge.png";
$pic = ImageCreateFromPng($filename);

ImageFlip($pic, IMG_FLIP_VERTICAL);

ImagePng($pic);

ImageDestroy($pic); 


?>
