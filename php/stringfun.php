<html>
<head>
<title>
My first php file
</title>
</head>
<body>
<?php
$first="Abhishek";
$second="Mukherjee";
$full=$first.$second;
echo "$full<br/>";
echo strtolower($full)."<br />";
echo strtoupper($full)."<br />";
echo strlen($full)."<br />";
echo trim($full)."<br />";
echo strstr($full,"she")."<br />";
echo str_replace("Abhishek","Mita",$full)."<br />";
?>
</body>
</html>