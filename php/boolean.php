<html>
<head>
<title>
My first php file
</title>
</head>
<body>
<pre><?php
$var1=true;
$var2=false;
echo "var1 ".isset($var1)."<br/>";
echo "var2 ".isset($var2)."<br/>";//to chk whether a variable has a value or not
echo "var3 ".isset($var3)."<br/>";//false means no value
unset($var1);
echo "var1".isset($var1)."<br/>";
?><pre/>
</body>
</html>