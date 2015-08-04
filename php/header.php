
ob_start();
<html>
<head>
<title>
My first php file
</title>
</head>
<body>
<pre><?php
header("Location:process.php");
exit;
?><pre/>
</body>
</html>
ob_end_flush();