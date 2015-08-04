<?php
$connection=mysql_connect("localhost","root","mukabhisrk");
if(!$connection)
{
die("Database Connection failed".mysql_error());
}
$db_select=mysql_select_db("robovitics");
if(!$db_select)
{
die("Database Connection failed".mysql_error());
}
?>
<html>
<head>
<title>
My first php file
</title>
</head>
<body>
<?php
$result=mysql_query("select * from names");
if(!$result)
{
die("Database query failed".mysql_error());
}
while($row=mysql_fetch_array($result))
{
echo $row["menu_name"]." " .$row["pos"]."<br/>";
}
?>
</body>
</html>
<?php
mysql_close($connection);
?>