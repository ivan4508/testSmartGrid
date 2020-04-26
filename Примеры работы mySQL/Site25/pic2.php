<?php
// 2. Изменение размера
header("Content-type: image/png"); 
$filename = "./Pics/ornament.png";

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
$pic = ImageCreateFromPng($filename);
ImageAlphaBlending($pic_r, FALSE);
ImageSaveAlpha($pic, TRUE);
ImageSaveAlpha($pic_r, TRUE);

ImageCopyResampled($pic_r, $pic, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

ImagePng($pic_r);
ImageDestroy($pic); 
ImageDestroy($pic_r); 
?>
