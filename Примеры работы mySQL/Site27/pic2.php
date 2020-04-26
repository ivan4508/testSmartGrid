<?php
// 2. Совмещение изображений
header("Content-type: image/png"); 

// Загружаем источник
$filename = "./Pics/cat.png";
$src = ImageCreateFromPng($filename); 
list($width_src, $height_src) = GetImageSize($filename);


// Загружаем рамку
$filename_frame = "./Pics/frame.png";
$frame = ImageCreateFromPng($filename_frame); 
ImageSaveAlpha($frame, TRUE);

// Копирование и наложение
ImageCopyMerge($frame, $src, 83, 150, 0, 0, $width_src, $height_src, 100);

ImagePNG($frame); 

ImageDestroy($frame); 
ImageDestroy($src); 
?>
