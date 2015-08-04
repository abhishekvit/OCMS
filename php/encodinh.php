<html>
<head>
<title>
My first php file
</title>
</head>
<body>
<?php
//the parts of dynamic link
$url_page='secondpage.php';
$param1='this is a string';
$param2='"bad" ?<>"';
$linktext="<Cilck> & ull see";
?>
<?php
//creating the dynamic link
$url="http://localhost/";
$url.=rawurlencode($url_page);
$url.="?param1=".urlencode($param1);
$url.="?param2=".urlencode($param2);
//displaying d link

?>

<a href="<?php echo htmlspecialchars($url);?>">
<?php echo htmlspecialchars($linktext);?>
</a>
</body>
</html>