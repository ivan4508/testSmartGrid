<?php
// 3. Водяной знак
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

// Водяной знак
$width = ImageSx($frame);
$height = ImageSy($frame);
$text = "progtips.ru";
$font = "./Fonts/Roboto-Light.ttf";
$size = 20;
   
$box  = ImageTtfbBox ( $size, 45, $font, $text );
$x = $width/2 - abs($box[4] - $box[0])/2;
$y = $height/2 + abs($box[5] - $box[1])/2;
 
//записываем строку на изображение
ImageTtfText($frame, $size , 45, $x+90, $y+110, 0x050505, $font, $text);

ImagePNG($frame); 

ImageDestroy($frame); 
ImageDestroy($src); 
?>
