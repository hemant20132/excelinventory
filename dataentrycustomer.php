<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Inventory System-purchaser data entry</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="css/mainstyle.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/jquery.inputmask.js"></script>
<script src="bootstrap/js/jquery.inputmask.date.extensions.js"></script>
<script>
$(document).ready(function()
{
$("#message").hide();
$("#purchasershometelephoneno").inputmask("999-999-9999");
$("#purchasersbusinesstelephoneno").inputmask("999-999-9999");
$("#expirydate").inputmask("99-99-9999");

$("#savebutton").click(function()
{
	
	if ($("#purchasersname").val()=="")
	{
		$("#message").show();
		$("#message").val("Purchaser's Name Cannot be blank!!!");
		$("#message").css("color","red");
		return false;
	}
	if ($("#purchasersaddress").val()=="")
	{
		$("#message").show();
		$("#message").val("Purchaser's Address Cannot be blank!!!");
		$("#message").css("color","red");
		return false;
	}
	if ($("#purchaserscity").val()=="")
	{
		$("#message").show();
		$("#message").val("Purchaser's City Cannot be blank!!!");
		$("#message").css("color","red");
		return false;
	}
	if ($("#purchaserstown").val()=="")
	{
		$("#message").show();
		$("#message").val("Purchaser's Town Cannot be blank!!!");
		$("#message").css("color","red");
		return false;
	}
	if ($("#purchasersprovince").val()=="")
	{
		$("#message").show();
		$("#message").val("Purchaser's Province Cannot be blank!!!");
		$("#message").css("color","red");
		return false;
	}
	if ($("#purchaserspostalcode").val()=="")
	{
		$("#message").show();
		$("#message").val("Purchaser's Postal Code Cannot be blank!!!");
		$("#message").css("color","red");
		return false;
	}
	if ($("#purchasershometelephoneno").val()=="")
	{
		$("#message").show();
		$("#message").val("Purchaser's Home Telephone no Cannot be blank!!!");
		$("#message").css("color","red");
		return false;
	}
	if ($("#purchaserbusinesstelephoneno").val()=="")
	{
		$("#message").show();
		$("#message").val("Purchaser's Business Telephone no Cannot be blank!!!");
		$("#message").css("color","red");
		return false;
	}
	if ($("#purchasersemail").val()=="")
	{
		$("#message").show();
		$("#message").val("Purchaser's Email Cannot be blank!!!");
		$("#message").css("color","red");
		return false;
	}
	if ($("#purchasersdriverlicenseno").val()=="")
	{
		$("#message").show();
		$("#message").val("Purchaser's Driver Licence Cannot be blank!!!");
		$("#message").css("color","red");
		return false;
	}
	if ($("#expirydate").val()=="")
	{
		$("#message").show();
		$("#message").val("Expirty date cannot be blank!!!");
		$("#message").css("color","red");
		return false;
	}	
	return true;
	
	});
	
	
	$("#cancelbutton").click(function()
	{
	$("#purchasersname").val("");
	$("#purchasersaddress").val("");
	$("#purchaserscity").val("");
	$("#purchaserstown").val("");
	$("#purchasersprovince").val("");
	$("#purchaserspostalcode").val("");
	$("#purchasershometelephoneno").val("");
	$("#purchaserbusinesstelephoneno").val("");
	$("#purchasersemail").val("");
	$("#purchasersdriverlicenseno").val("");
	$("#expirydate").val("");
	$("#message").hide();
	
	return false;
	});
	
	
});

</script>
</head>

<body>

<center>
<h3>Inventory Mangement System</h3>
</center>

<div id="maindiv" class=".container-fluid"> 
<div id="dataentrydiv" class="container">

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
	  <li role="presentation" class="active"><a href="mainpage.php">Home</a></li>
	  <li role="presentation"><a href="dataentrycustomer.php">Enter Customer Data</a></li>
	  <li role="presentation"><a href="dataentryvehicle.php">Enter Vehicle Data</a></li>
	  <li role="presentation"><a href="#">Enter Quote Data</a></li>
	  <li role="presentation"><a href="dataentryinvoice.php">Enter Invoice Data</a></li>
	  <li role="presentation"><a href="showinvoice.php">Show Invoice</a></li>
	  <li role="presentation"><a href="index.php?logout=true">Logout</a></li>
	</ul>
	</div>
<?php
if (!empty($_REQUEST['message1']))		
{
	if ($_REQUEST['message1']=="success")
	{
		echo "<div style='position:absolute;left:400px;top:135px;color:green;z-index:10;' >Purchaser Record posted successfully!!!</div>";	
	}
	if ($_REQUEST['message1']=="nosuccess")
	{
		echo "<div style='position:absolute;left:400px;top:135px;color:blue;' >Error posting purchaser record!!!</div>";	
		
	}
}	
?>	
<form id="purchaserdata" method="post" action="postpurchaserdata.php">

<div class="panel panel-primary">
<div class="panel-body">	
<div class="panel-heading">
<h3 class="panel-title">Purchaser/ Customer Data</h3>
</div>
	
<div class="row">
	<div class="col-md-3">
		<label for="purchasersname">Purchaser's Name</label>
		<input class="form-control" id="purchasersname" name="purchasersname" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchasersaddress">Purchaser's Address</label>
		<input class="form-control" id="purchasersaddress" name="purchasersaddress" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchaserscity">Purchaser's City</label>
		<input class="form-control" id="purchaserscity" name="purchaserscity" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchaserstown">Purchaser's Town</label>
		<input class="form-control" id="purchaserstown" name="purchaserstown" type="text">
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<label for="purchasersprovince">Purchaser's province</label>
		<input class="form-control" id="purchasersprovince" name="purchasersprovince" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchaserspostalcode">Purchaser's postal code</label>
		<input class="form-control" id="purchaserspostalcode" name="purchaserspostalcode" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchasershometelephoneno">Purchaser's Home Telephone No.</label>
		<input class="form-control" id="purchasershometelephoneno" name="purchasershometelephoneno" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchasersbusinesstelephoneno">Business Telephone No.</label>
		<input class="form-control" id="purchasersbusinesstelephoneno" name="purchasersbusinesstelephoneno" type="text">
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<label for="purchasersemail">Purchaser's Email</label>
		<input class="form-control" id="purchasersemail" name="purchasersemail" type="email">
	</div>
	<div class="col-md-3">
		<label for="purchasersdriverlicenseno">Purchaser's Driver License No.</label>
		<input class="form-control" id="purchasersdriverlicenseno" name="purchasersdriverlicenseno" type="text">
	</div>
	<div class="col-md-3">
		<label for="expirydate">Expiry Date</label>
		<input class="form-control" id="expirydate" name="expirydate" type="text">
	</div>
</div>

</div><!--panel body--->
<div class="panel-footer">
<div class="row">
	
	<div class="col-md-3">
		<label for="message"> </label>
		<input class="form-control" id="message" style="width:300px;" name="message" type="text">
	</div>
	<div class="col-md-3"></div>

	<div class="col-md-3">
	<input  type="submit" style="align:right;" class="btn btn-primary" name="savebutton" id="savebutton" value="Save"></button>
    <input  type="button" class="btn btn-default" id="cancelbutton" value="Cancel"></button>
	</div>
	
	</form>	

</div>
</div><!-------panel footer-------->
</div><!---panel---->


</div>
</div>


</body>
</html>
