<?php
require('header.inc');
?>
<html>
<head>
	<title>Обратная связь</title>
</head>
<h1>Здесь вы можете оставить свое мнение о нашем сайте и высказать свои пожелания</h1>
<h2 align = "center">Форма для отзыва</h2>

<style> textarea {resize: none;}</style>
<form action="process.php" method=post>
<table align = center border=0>
<!--<tr bgcolor=#cccccc>
	<td width=150>Товар</td>
	<td width=15>Количество</td>
</tr>-->
<tr>
	<td>Ваше имя:</td>
	<td align="center"><input type="text" name="your_name" size="43" maxlength="43"></td>
	
</tr>
<br>
<tr>
	<td>E-mail:</td>
	<td align="center"><input type="text" name="email" size="43" maxlength="43"></td>
</tr>
<br>
<tr>
	<td>Ваше сообщение:</td>
	
	<td align="center"><textarea rows="15" cols="45" name="comment" ></textarea></td>
</tr>

<tr>
	<td colspan="2" align="center"><input type="submit" value="Отправить отзыв"></td>
</tr>
</table>
</form>

</html>
<?php
require('footer.inc');
?>