<?php
// 1. Оригинал
header("Content-type: image/png"); 

$filename = "./Pics/bridge.png";
$pic = imageCreateFromPng($filename); 

ImagePNG($pic); 
ImageDestroy($pic); 
?>
