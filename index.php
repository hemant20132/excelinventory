<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
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

$("#loginformsubmit").click(function()
{
	
if ($("#username").val()=="")
{
$("#message").show();
$("#message").val("Username cannot be left blank!!!");
return false;	
}

if ($("#userpassword").val()=="")
{
$("#message").show();
$("#message").val("Password cannot be left blank!!!");
return false;	
}
});


$("#loginformcancel").click(function()
{
$("#username").val("");
$("#userpass").val("");
return false;
});


});
</script>
</head>

<body>
<center>
<h3>Inventory Mangement System</h3>
</center>

<?php 
if ($_POST['message']!="")
{
	echo "<input type='text' class=form-control' id='message'>".$_POST['message'];
}
?>

<div id="maindiv" class=".container-fluid"> 
<div id="logindiv" class="container">
<center>
<form id="loginform" method="post" action="checklogin.php">


<center>
<h3>Enter Login Details</h3>
</center>  
  <div class="form-group">
    <label for="username">User Name</label>
	<input type="text" id="username" name="username" class="form-control" placeholder="wifiwifi">
	
  </div>
  
  <div class="form-group">
    <label for="userpassword">Password</label>
    <input type="password" class="form-control" id="userpassword" name="userpassword" style="width:200px;" placeholder="wifiwifi">
  </div>
  
  <button type="cancel" id="loginformcancel" class="btn btn-default">Cancel</button>
  <button type="submit" id="loginformsubmit" name="loginformsubmit" class="btn btn-default">Submit</button>

  <div class="form-group">
    <input type="text" class="form-control" id="message">
  </div>
</form>
</center>


</div>

</div>


</body>
</html>
