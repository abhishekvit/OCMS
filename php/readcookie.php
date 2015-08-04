<html>
<head>
<title>
My first php file
</title>
</head>
<body>
<?php
$var=0;
if(isset($_COOKIE['test']))//checking whether it exists or not
$var=$_COOKIE['test'];
echo $var;
//deleting the cookie
setcookie('test',0,time()-(23));
?>
</body>
</html>