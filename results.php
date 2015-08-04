<?PHP
//Grab the form elements using PHP

$fn = $_POST['fname'];
				$lname = $_POST['lname'];
				$choice = $_POST['select-choice'];
				$comp = $_POST['comp'];
				$number = $_POST['number'];
				$lm = $_POST['landmark'];
				$lou = $_POST['lou'];
				 $connection = mysql_connect("localhost", "scobbyabhi9", "Mahanagar@d70");
				  $db = mysql_select_db("menu", $connection);
				 $query = mysql_query("insert into ocms(fname,lname,number,lou,comp,landmark,dept) values ('$fn','$lname','$number','$lou','$comp','$lm','$choice')");
				$result = mysql_query("SELECT * FROM complaints WHERE 1=1");
while($row = mysql_fetch_array($result)){
/*This will loop arround all the Table*/
    if($row['comp'] == $comp){
    $a=$row['freq'];
    $a=$a+1;
    $query = mysql_query("UPDATE complaints SET freq='".$a."' WHERE comp='".$comp."'");
    $query = mysql_query("SELECT * FROM complaints ORDER BY freq DESC");
    }
	
    
}
				
				mysql_close($connection); 
				  
				 
?>

<!DOCTYPE html> 
<html> 
	<head> 
	<meta charset="utf-8" />
	<title>View Source</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<link rel="stylesheet" href="_/css/jquery.mobile1.css" />
	<script src="_/js/jquery.js"></script>
	<script src="_/js/jquery.mobile1.js"></script>

	<script src="_/js/myscript.js"></script>
	<link rel="stylesheet" href="_/css/mystyles.css" />
	<link rel="stylesheet" href="st3.css" />
	</head> 

<body> 

Your details have been submitted we will get back to u soon

</body>
</html>