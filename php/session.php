<?php
session_start();
?>
<html>
<head>
<title>
My first php file
</title>
</head>
<body>
<?php
$_SESSION['name']='abhishek';
$_SESSION['id']=42;
?>
<?php
echo $_SESSION['name'];
echo $_SESSION['id'];
?>
</body>
</html>