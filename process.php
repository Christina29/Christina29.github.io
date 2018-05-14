<?php
require('header.inc');
?>

<?php
	$your_name =$_POST['your_name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	

	$DOCUMENT_ROOT = $HTTP_SERVER_VARS['DOCUMENT_ROOT'];
	
$hostname="localhost";
$user="root";
$password="";
$db="comments";

if(!$link = mysql_connect($hostname, $user, $password))

{
	echo "<br> не могу соединиться с сервером базы данных<br>";
	exit();
}
//echo "<br> Соединение с сервером базы данных прошло успешно<br>";

if(!mysql_select_db($db, $link))
{
	echo "<br> не могу выбрать базу данных<br>";
	exit();
}
else
{
	//echo "<br> Выбор базы данных прошел успешно<br>";
}
?>
<html>
<head>
	<title>Обратная связь</title>
</head>
<body>

<h1>Здесь вы можете оставить свое мнение о нашем сайте и высказать свои пожелания</h1>
<h2 align = center>Форма для отзыва</h2>

<?php
	/*$outputstring = $date."\t".$cakeqty." пирожных\t".$candyqty."  коробок конфет\t".$cookie." печенья\t\$".$total."\t Адрес доставки товара\t". $address."\t ФИО клиента: ".$fio."\n";
$date_1=date("Y-m-d h:i:s", mktime());
*/


	$query="insert into comments(your_name, email, comment) values('$your_name','$email', '$comment')";
	$result=mysql_query($query);

	/*$query_1="select comments.id  from zakaz where zakaz.fio='$fio' ";
	$result_1=mysql_query($query_1);
	
	
	while($row=mysql_fetch_array($result_1))
	{ 	
		$id=$row["id"];
	}

	$query="insert into tovar (id, cakeqty, candyqty, cookieqty) values('$id', '$cakeqty', '$candyqty', '$cookieqty')";
	$result=mysql_query($query);
*/
	echo'<p>Ваш отзыв отправлен.</p>';
?>



</body>
</html>
<?php
require('footer.inc');
?>