<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-image: url(http://www.droid-now.com/wp-content/uploads/2013/11/default_wallpaper-670x472.jpg);
	opacity:5%;
	background-repeat:no-repeat;
	background-size:cover;
	

}
</style>
</head>

<body bgcolor="#D6D6D6" background="http://www.droid-now.com/wp-content/uploads/2013/11/default_wallpaper-670x472.jpg" >
<h1 style align="center">OCMS ADMIN</h1>
<h5 style align="center">(SUCCESSFULLY LOGGED IN)</h5>
<table width="588" border="5" cellspacing="3" cellpadding="5" style align="center">
<thead>
  <tr>
    <th width="375" bgcolor="#0099FF">COMPLAINT NAME</th>
    <th width="170" bgcolor="#0099FF">FREQUENCY</th>
  </tr>
</thead>

<tbody>
					<?php
				$con=mysql_connect("localhost","scobbyabhi9","Mahanagar@d70");
				if(!$con)
				{
					die("no connection");
				}
				mysql_select_db("menu",$con);
				$query = mysql_query("SELECT comp,freq FROM complaints ORDER BY freq DESC");
					while($record=mysql_fetch_array($query))
						{
							echo "<tr>";
							
							echo "<td >".$record['comp']."</td>";
							echo "<td >".$record['freq']."</td>";
							
							echo "</tr>";
							/*echo 'hello';*/
							
						}
						?>
						
						
					</tbody>  
</table>

</body>
</html>