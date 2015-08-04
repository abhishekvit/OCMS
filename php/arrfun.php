<html>
<head>
<title>
My first php file
</title>
</head>
<body>
<pre><?php
$arr=array(1,2,3,5,4,6,1);

sort($arr); print_r($arr)."<br/>";//sorting
rsort($arr); print_r($arr)."<br/>";//reverse sorting
echo min($arr)."<br/>";//min value of array
echo max($arr)."<br/>";//max of array
echo count($arr)."<br/>";//elemts in array
echo $string=implode(" ",$arr);//combine elements of array into a string
print_r(explode(" ",$string));//string(of array) to array
?><pre/>
</body>
</html>