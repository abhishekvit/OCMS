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
<?php
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$rn=$_POST["regno"];
$br=$_POST["branch"];
$cn=$_POST["content"];
$cm=$_POST["communication"];

$result=mysql_query(INSERT INTO robovitics.form(firstname, lastname, regno, branch, content, communication, useful) VALUES ($fn, $ln, $rn, $br, $cn, $cm);
?>

