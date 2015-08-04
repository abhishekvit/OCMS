<!DOCTYPE html>
<html>
<head>
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
</head>
<body>

<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>Submission details</h1>
  </div>

  <div data-role="main" class="ui-content">
    <p>Welcome!</p>
    <a href="#pagetwo">Click here to get status</a>
  </div>

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div> 

<div data-role="page" data-dialog="true" id="pagetwo">
  <div data-role="header">
    <h1>Status</h1>
  </div>

  <div data-role="main" class="ui-content">
    <p>Ur details have been submitted and we will get back to soon</p>
    <a href="#pageone">Register another complaint</a>
  </div>

  <div data-role="footer">
    <h1>Footer Text In Dialog</h1>
  </div>
</div> 


</body>
</html>