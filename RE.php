<?PHP
//Grab the form elements using PHP

$fn = $_POST['fname'];
				$lname = $_POST['lname'];
				$choice = $_POST['select-choice'];
				$comp = $_POST['comp'];
				$number = $_POST['number'];
				$lm = $_POST['landmark'];
				$lou = $_POST['lou'];
				$image=$_POST['image'];
				 $connection = mysql_connect("localhost", "scobbyabhi9", "Mahanagar@d70");
				  $db = mysql_select_db("menu", $connection);
				  if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {


// Temporary file name stored on the server

$tmpName = $_FILES['image']['tmp_name'];


// Read the file

$fp = fopen($tmpName, 'r');

$data = fread($fp, filesize($tmpName));

$data = addslashes($data);

fclose($fp);
}

				 $query = mysql_query("insert into ocms(fname,lname,number,lou,comp,landmark,dept,image) values ('$fn','$lname','$number','$lou','$comp','$lm','$choice','$data')");
				 $result = mysql_query("SELECT * FROM ocms WHERE 1=1");
				while($row = mysql_fetch_array($result))
				{
				if($row['fname'] == $fn)
				{
					$i=$row['id'];
				}
					
				}				 
				$result = mysql_query("SELECT * FROM complaints WHERE 1=1");
while($row = mysql_fetch_array($result)){
/*This will loop arround all the Table*/
    if($row['comp'] == $comp){
    $a=$row['freq'];
    $a=$a+1;
    $query = mysql_query("UPDATE complaints SET freq='".$a."' WHERE comp='".$comp."'");
    
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

<div data-role="page">
  <div data-role="header">
    <h1>Submission details</h1>
  </div>

  <div data-role="main" class="ui-content">
    <a href="#myPopupDialog" data-rel="popup" data-position-to="window" data-transition="fade" class="ui-btn ui-corner-all ui-shadow ui-btn-inline">Get your details</a>

    <div data-role="popup" id="myPopupDialog">
      <div data-role="header">
        <h1>Details</h1>
      </div>

      <div data-role="main" class="ui-content">
        <h2>Your details have been submitted</h2>
        <p>Your Complaint id is:<?php echo $i?></p>
        <a href="index.php" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b ui-icon-back ui-btn-icon-left" data-rel="back">Submit another complaint</a>
      </div>

      <div data-role="footer">
        <h1>THANKS</h1>
      </div>
    </div>
  </div>

  <div data-role="footer">
    <h1>THANKS</h1>
  </div>
</div> 


</body>
</html>