<?php
// Табличная верстка
function ShowPageTable()
{
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th colspan=2><h1>Шапка сайта</h1> </th>
</tr>
<tr>
<td width="20%">
<ul>
<a href="index.html" title="Ссылка 1">Ссылка 1</a><br>
<a href="index.html" title="Ссылка 2">Ссылка 2</a><br>
<a href="index.html" title="Ссылка 3">Ссылка 3</a><br>
</ul>
</td>
<td width="80%">


<h2>Lorem ipsum</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Pellentesque sem augue, hendrerit nec nunc vel, congue lacinia enim. 
Duis elementum elementum purus et ultricies. 
Nulla tincidunt molestie risus, ut malesuada nibh fringilla non. 
Duis volutpat nunc auctor tortor bibendum placerat. 
Duis vestibulum iaculis ex vehicula viverra. 
Nullam nec mollis ante. Donec id feugiat leo, ut accumsan est. 
Nam scelerisque vitae ligula at tincidunt. 
Vestibulum porta ullamcorper lobortis. 
Nam accumsan lectus neque, a aliquet metus convallis eget. 
Proin eget est sem. Nam ornare urna ac fringilla ultrices. </p>

<h2>Quisque pellentesque</h2>
<p>Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. 
Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. 
Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. 
Mauris aliquam nibh vitae eros sodales fermentum. 
Fusce cursus est varius ante vehicula eget ultrices felis eleifend. 
Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.</p>


</td>
</tr>
<tr>
<td colspan=2 align=center height = 200><h1>Подвал сайта</h1></td>
</tr>
</table>
<?php
}

// Блочная верстка
function ShowPageBlock()
{
?>
	<div id="wrapper">
		
	<div id="header">
		<h2>Шапка сайта</h2>
	</div> 
	
	<div id="nav">
		<a href="#">Главная</a>
		<a href="#">О компании</a>
		<a href="#">Портфолио</a>
		<a href="#">Контакты</a>
	</div> 
	<div id="sidebar">
		<h3>Навигация</h3>
		<li><a href="#">Главная</a></li>
		<li><a href="#">О компании</a></li>
		<li><a href="#">Ссылки</a></li>
		<li><a href="#">Портфолио</a></li>
		<li><a href="#">Контакты</a></li>
		<h3>Блок 2</h3>
		<li><a href="#">Ссылка</a></li>
		<li><a href="#">Ссылка</a></li>
		<li><a href="#">Ссылка</a></li>
		<li><a href="#">Ссылка</a></li>
		<li><a href="#">Ссылка</a></li>
		<h3>Блок 3</h3>
		<li><a href="#">Ссылка</a></li>
		<li><a href="#">Ссылка</a></li>
		<li><a href="#">Ссылка</a></li>
		<li><a href="#">Ссылка</a></li>
		<li><a href="#">Ссылка</a></li>
	</div> <!-- end #sidebar -->

	<div id="content">
		

	<h2>Lorem ipsum</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Pellentesque sem augue, hendrerit nec nunc vel, congue lacinia enim. 
	Duis elementum elementum purus et ultricies. 
	Nulla tincidunt molestie risus, ut malesuada nibh fringilla non. 
	Duis volutpat nunc auctor tortor bibendum placerat. 
	Duis vestibulum iaculis ex vehicula viverra. 
	Nullam nec mollis ante. Donec id feugiat leo, ut accumsan est. 
	Nam scelerisque vitae ligula at tincidunt. 
	Vestibulum porta ullamcorper lobortis. 
	Nam accumsan lectus neque, a aliquet metus convallis eget. 
	Proin eget est sem. Nam ornare urna ac fringilla ultrices. </p>
	<h2>Quisque pellentesque</h2>
	<p>Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. 
	Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. 
	Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. 
	Mauris aliquam nibh vitae eros sodales fermentum. 
	Fusce cursus est varius ante vehicula eget ultrices felis eleifend. 
	Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.</p>

	</div> <!-- end #content -->
	<div id="footer">
		<p>Copyright &copy 2018 </p>
	</div> <!-- end #footer -->
</div> <!-- End #wrapper -->
<?php
}
