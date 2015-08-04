<html>
<head>
<title>
My first php file
</title>
</head>
<body>
<pre><?php
$arr=array(1,2,3,5,4,6,1);
print_r($arr);
echo sort($arr)."<br/>";
echo rsort($arr)."<br/>";
echo min($arr)."<br/>";
echo max($arr)."<br/>";
echo count($arr)."<br/>";

?><pre/>
</body>
</html>