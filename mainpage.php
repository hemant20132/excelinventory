<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Inventory System</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="css/mainstyle.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery.inputmask.js"></script>
<script>
$(document).ready(function()
{
$("#message").hide();
});
</script>
</head>

<body>
<center>
<h3>Inventory Mangement System</h3>
</center>

<div id="maindiv" class=".container-fluid"> 

<div id="div1" class="container">
	
	<li style="position:absolute;left:80%;">UserName:<?php echo $username; ?></li>	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
	  <li role="presentation" class="active"><a href="mainpage.php">Home</a></li>
	  <li role="presentation"><a href="dataentrycustomer.php">Enter Customer Data</a></li>
	  <li role="presentation"><a href="dataentryvehicle.php">Enter Vehicle Data</a></li>
	  <li role="presentation"><a href="dataentryquote.php">Enter Quote Data</a></li>
	  <li role="presentation"><a href="dataentryinvoice.php">Enter Invoice Data</a></li>
	  <li role="presentation"><a href="showinvoice.php">Show Invoice</a></li>
	  <li role="presentation"><a href="index.php">Logout</a></li>
	</ul>
	</div>
	
	
</div>
</div>


</body>
</html>
