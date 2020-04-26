<?php
header('Content-Type: image/jpeg');

$filename = "./Pics/water-lily.jpg";

// задание максимальной ширины и высоты
$width = 200;
$height = 200;


// получение новых размеров
list($width_orig, $height_orig) = GetImageSize($filename);

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) 
{
   $width = $height*$ratio_orig;
} 
else 
{
   $height = $width/$ratio_orig;
}

$pic_r = ImageCreateTrueColor($width, $height);
$pic = ImageCreateFromJpeg($filename);
ImageCopyResampled($pic_r, $pic, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

ImageJpeg($pic_r, null, 100);
ImageDestroy($pic); 
ImageDestroy($pic_r); 

?>
