<html>
<head>
<title>
My first php file
</title>
</head>
<body>
<pre><?php
$var1="2";//chk type
$var2=3;
$var2+=$var1;
echo $var2."<br/>";
echo gettype($var1)."<br/>";//return type
settype($var2,"string");//change type
echo gettype($var2)."<br/>";//now check type
$var3=(int)var1;
?><pre/>
</body>
</html>