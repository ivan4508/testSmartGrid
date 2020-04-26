<?php session_start(); $title = "Урок 6.6"; require_once "header.php"; StartPage(); ?>

<h2>Панель администрирования</h2>
<?php 
StartDB(); 
CheckAdmin();
EndDB(); 

EndPage(); require_once "footer.php";  ?>
