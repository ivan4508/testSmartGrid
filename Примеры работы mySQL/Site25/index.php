<?php $title = "Урок 6.4"; require_once "header.php"; StartPage(); 

print "<h2>Информация о графическом файле</h2>";
$filename = "./Pics/ornament.png";
$size = GetImageSize($filename);
print "<pre>";
print_r($size);
print "</pre>";

//print "<h2>Вывод изображения</h2>";
//print "<img src='pic1.php'>"; 

//print "<h2>Изменение размера</h2>";
//print "<img src='pic2.php'>"; 

//print "<h2>Файл jpg</h2>";
//print "<img src='pic3.php'>"; 


//print "<h2>Задание</h2>";
//print "<p>Измените программу так, чтобы вывелось полное изображение лилии.</p>";


EndPage(); require_once "footer.php";  ?>
