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
<div id="dataentrydiv" class="container">

<form id="Inventorydata" method="post" action="#">
<center>
<h3 style="margin-top:10px;">Enter Inventory Data</h3>
</center>  

<div  id="mainwindow" style="width:85%;position:absolute;left:2%;top:7%;height:90%;">	
<h4 style="margin-top:10px;">Purchaser Data :</h4>
<div class="row">
	<div class="col-md-3">
		<label for="purchasersname">Purchaser's Name</label>
		<input class="form-control" id="purchasersname" name="purchasersname" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchasersname">Purchaser's Address</label>
		<input class="form-control" id="purchasersaddress" name="purchasersaddress" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchaserscity">Purchaser's City</label>
		<input class="form-control" id="purchasercity" name="purchaserscity" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchaserstown">Purchaser's Town</label>
		<input class="form-control" id="purchasertown" name="purchaserstown" type="text">
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<label for="purchasersprovince">Purchaser's province</label>
		<input class="form-control" id="purchaserprovince" name="purchasersprovince" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchaserspostalcode">Purchaser's postal code</label>
		<input class="form-control" id="purchaserpostalcode" name="purchaserspostalcode" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchaserspostalcode">Purchaser's Home Telephone No.</label>
		<input class="form-control" id="purchaserhometelephoneno" name="purchasershometelephoneno" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchaserbusinesstelephoneno">Business Telephone No.</label>
		<input class="form-control" id="purchaserbusinesstelephoneno" name="purchaserbusinesstelephoneno" type="text">
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<label for="purchasersemail">Purchaser's Email</label>
		<input class="form-control" id="purchaseremail" name="purchasersemail" type="text">
	</div>
	<div class="col-md-3">
		<label for="purchasersdriverlicenceno">Purchaser's Driver License No.</label>
		<input class="form-control" id="purchaserdriverlicenseno" name="purchasersdriverlicenseno" type="text">
	</div>
	<div class="col-md-3">
		<label for="Expirydate">Expiry Date</label>
		<input class="form-control" id="expirydate" name="expirtydate" type="text">
	</div>
	
</div>


<h4 style="margin-top:10px;">Vehicle Information :</h4>
<div class="row">
	<div class="col-md-3">
		<label for="vehicleyear">Year</label>
		<input class="form-control" id="vehicleyear" name="vehicleyear" type="text">
	</div>
	<div class="col-md-3">
		<label for="vehiclemake">Make</label>
		<input class="form-control" id="vehiclemake" name="vehiclemake" type="text">
	</div>
	<div class="col-md-3">
		<label for="vehiclemodel">Model</label>
		<input class="form-control" id="vehiclemodel" name="vehiclemodel" type="text">
	</div>
	<div class="col-md-3">
		<label for="vehicletrimlevel">trim level</label>
		<input class="form-control" id="vehicletrimlevel" name="vehicletrimlevel" type="text">
	</div>
	<div class="col-md-3">
		<label for="vehiclecolor">Color</label>
		<input class="form-control" id="vehiclecolor" name="vehiclecolor" type="text">
	</div>
	<div class="col-md-3">
		<label for="vehiclestock">Stock</label>
		<input class="form-control" id="vehiclestock" name="vehiclestock" type="text">
	</div>
	<div class="col-md-3">
		<label for="vehiclevin">VIN</label>
		<input class="form-control" id="vehiclevin" name="vehiclevin" type="text">
	</div>
	<div class="col-md-3">
		<label for="distancetravelled">Distance Travelled</label>
		<input class="form-control" id="distancetravelled" name="distancetravelled" type="text">
	</div>
	
	
	
	
	
	
</div>









</div>



</form>

</div>
</div>


</body>
</html>
