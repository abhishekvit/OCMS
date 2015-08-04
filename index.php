 
<html lang="en">
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
<div id="register" data-role="home">
<div data-role="header" data-fullscreen="true">

<h1>ONLINE COMPLAINT</h1>
<a href="#home" data-transition="pop "data-icon="home" data-iconpos="notext" class="ui-btn-right">Tutorials</a>

</div>

  <div data-role="main" class="ui-content">
    <form method="post" action="results.php" data-ajax=”false” >
	
      <label for="fname" class="ui-hidden-accesible">First name:</label>
      <input type="text" name="fname" id="fname" placeholder="First name....." data-clear-btn="true">
	  <label for="lname" class="ui-hidden-accesible">Last name:</label>
      <input type="text" name="lname" id="lname" placeholder="Last Name....." data-clear-btn="true">
	  <div data-role="fieldcontain">
   		<label for="select-choice-1" class="select">Department</label>
   				<select name="select-choice" id="select-choice-1">
      				<option value="standard">Choose the correct option</option>
      				<option value="Advertisement">Advertisement</option>
<option value="Amusement">Amusement</option>
<option value="Assessment & Collection">Assessment & Collection</option>
<option value="Building">Building</option>
<option value="Bustee Services">Bustee Services</option>
<option value="Car Parking">Car Parking</option>
<option value="Central Records">Central Records</option>
<option value="Education">Education</option>
<option value="Election Office">Election Office</option>
<option value="Electricity">Electricity</option>
<option value="Engineering ">Engineering (Civil)</option>
<option value="Entally workshop">Entally workshop</option>
<option value="Estate">Estate</option>
<option value="Finance and accounts">Finance and accounts</option>
<option value="Health">Health</option>
<option value="Info. & public relations">Info. & public relations</option>
<option value="Information Technology">Information Technology</option>
<option value="Institute of Urban Management">Institute of Urban Management</option>
<option value="Internal Audit">Internal Audit</option>
<option value="Law">Law</option>
<option value="License">License</option>
<option value="Lighting">Lighting</option>
<option value="Market">Market</option>
<option value="Municipal Secretary’s department">Municipal Secretary’s department</option>
<option value="Municipal Service Commission">Municipal Service Commission</option>
<option value="Parks & Squares">Parks & Squares</option>
<option value="Personnel">Personnel</option>
<option value="Planning & Development">Planning & Development</option>
<option value="Printing">Printing</option>
<option value="Project Management Unit">Project Management Unit</option>
<option value="Roads and Asphaltum">Roads and Asphaltum</option>
<option value="Sewerage & Drainage">Sewerage & Drainage</option>
<option value="Social Welfare & Urban Proverty Alleviation Department">Social Welfare & Urban Proverty Alleviation Department</option>
<option value="Solid Waste Management">Solid Waste Management</option>
<option value="Supply">Supply</option>
<option value="Town Planning Dept">Town Planning Dept</option>
<option value="Treasury Department">Treasury Department</option>
<option value="Vigilance">Vigilance</option>
<option value="Water Supply">Water Supply</option>
   		</select>
		</div>
	   <div data-role="fieldcontain">
   		<label for="select-choice-1" class="select">Complaint</label>
   				<select name="comp" id="select-choice-1">
      				<option value="standard">Choose the correct option</option>
      				<option value="late ambulance">late ambulance</option>
      				<option value="water logging">water logging</option>
      				</select>
      				</div>
	  <label for="branch" class="ui-hidden-accesible">Mobile Number:</label>
      <input type="text" name="number" id="number" placeholder="Number....." data-clear-btn="true">
	  <label for="branch" class="ui-hidden-accesible">Landmark:</label>
      <input type="text" name="landmark" id="landmark" placeholder="Landmark....." data-clear-btn="true">
	  <label for="content">Level of urgency</label>
	  <input type="range" name="lou" id="lou" value="5" min="0" max="10" data-popup-enabled="true"><br/>
	    <input type="Reset" data-inline="false" value="Reset all entries">
	  <input type="submit" data-inline="false" value="Submit all entries">
	   
	  
	  
    </form>
  </div>
  </div>
  </html>