<?php session_start(); $title = "Правка товара"; require_once "header.php"; ?>

<div id="wrapper">
<div id="header">
	<h2>Правка товара</h2>
</div> 

<div id="content">
<?php
	StartDB();
	
	$id = $_GET['id'];
	$SQL = "SELECT * FROM Товары WHERE `Код товара`=".$id;

	if ($result = mysqli_query($db, $SQL)) 
	{
		$row = mysqli_fetch_assoc($result);
		$item  = $row['Товар'];
		$price = $row['Цена'];
	}
	else
	{
		printf("Ошибка в запросе: %s\n", mysqli_error($db));
	}


?>
<form action="update.php" method="post">
<?php			
		print "<input name='id' type='hidden' value=".$row['Код товара'].">";
	    print "<table>";
        print "<tr><td>Товар</td><td><input name='item' value='".$row['Товар']."' maxlength=60 size=30></td></tr>";
        print "<tr><td>Цена</td><td><input name='price' value='".$row['Цена']."'maxlength=7 size=7></td></tr>";
		mysqli_free_result($result);
?>		
     <tr><td colspan=2><input type="submit" value="Изменить"></td></tr>
    </table>
</form>

	
</div>
<div id="footer">
</div>

</div>

<?php require_once "footer.php"; ?>

