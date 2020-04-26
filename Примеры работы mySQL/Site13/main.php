<?php

function GuestBook()
{
	if (!empty($_POST["username"]))
	{
		$user = $_POST["username"];
		$comment = strip_tags($_POST["comment"]);

		$f=fopen("guest.dat","a+");
		$d=date("d.m.Y H:i",time());
		fwrite($f,"<font color=red>$d </font>");
		fwrite($f,"<b>$user</b><br>");
		fwrite($f,"$comment<hr>");
		fclose($f);
		readfile("guest.dat"); 	
	}	
}

function ShowFiles()
{ 
	$dir = opendir("."); 
	while($file = readdir($dir)) 
	{
		print "$file<br>";
	}
	closedir($dir); 
}

?>
