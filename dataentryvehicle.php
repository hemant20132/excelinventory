<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="ISO-8859-1"> 
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
$("#vehicleyear").inputmask("9999");
$("#warrantyinservicedt").inputmask("99-99-9999");
$("#vehicledeliverydate").inputmask("99-99-9999");
$("#vehiclevin").inputmask("*******************");

$("#savebutton").click(function()
{
		if ($("#vehicleyear").val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle year cannot be blank!!!");
		$("#message").css("color","red");
		return false;
		}
		if ($("#vehiclemake").val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle make cannot be blank!!!");
		$("#message").css("color","red");
		return false;
		}
		if ($("#vehiclemodel").val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle model cannot be blank!!!");
		$("#message").css("color","red");
		return false;
		}
		if ($("#vehicletrimlevel").val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle trim level cannot be blank!!!");
		$("#message").css("color","red");
		return false;
		}
		if ($("#vehiclecolor").val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle color cannot be blank!!!");
		$("#message").css("color","red");
		return false;
		}
		if ($("#vehiclestock").val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle stock cannot be blank!!!");
		$("#message").css("color","red");
		return false;
		}
		if ($("#vehiclevin").val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle VIN cannot be blank!!!");
		$("#message").css("color","red");
		return false;
		}
		if ($("#distancetravelled").val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle distance travelled can not be blank!!!");
		$("#message").css("color","red");
		return false;
		}
		
		if ($('input:radio[name=vehicledistanceunknown]:checked').val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle distance unknown radio button not checked!!");
		$("#message").css("color","red");
		return false;
		}	
		if ($('input:radio[name=vehicleleinifany]:checked').val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle under any lein radio button not checked!!!");
		$("#message").css("color","red");
		return false;
		}	
		if ($('input:radio[name=gsthstnonregistrant]:checked').val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle gsthst registrant radio not checked!!!");
		$("#message").css("color","red");
		return false;
		}	
		
		if ($("#gsthstregistrationno").val()=="")
		{
		}
		
		if ($("#vehiclegsthstpayable").val()=="")
		{
			
		}
		if ($("#warrantyinservicedt").val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle warranty in service date cannot be blank!!!");
		$("#message").css("color","red");
		return false;
		}
		if ($("#vehicledeliverydate").val()=="")
		{
		$("#message").show();
		$("#message").val("vehicle delivery date cannot be blank!!!");
		$("#message").css("color","red");
		return false;
		}
		if ($("#vehicledetailsofdelivery").val()=="")
		{
		
		
		}
	
		if ($('input:radio[name=isvehicledeliveredwithsafetystandardcert]:checked').val()=="")
		{
		$("#message").show();
		$("#message").val("Please check radio button for delivery of vehicle with Safety Standard Certificate!!!");
		$("#message").css("color","red");
		return false;
		}	
	


	
		if ($("#vehicleMTObrand").val()=="")
		{

		}
			
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
	  <li role="presentation"><a href="dataentryquote.php">Enter Quote Data</a></li>
	  <li role="presentation"><a href="dataentryinvoice.php">Enter Invoice Data</a></li>
	  <li role="presentation"><a href="showinvoice.php">Show Invoice</a></li>
	  <li role="presentation"><a href="logout.php?logout=true">Logout</a></li>
	</ul>
	</div>
	
<?php
if (!empty($_REQUEST['message2']))		
{
	if ($_REQUEST['message2']=="success")
	{
		echo "<div style='position:absolute;left:400px;top:135px;color:green;z-index:10;' >Vehicle Record posted successfully!!!</div>";	
	}
	if ($_REQUEST['message2']=="nosuccess")
	{
		echo "<div style='position:absolute;left:400px;top:135px;color:blue;' >Error posting vehicle record!!!</div>";	
		
	}
}	
?>	

<form id="vehicledata" method="post" action="postvehicledata.php">	

<div class="panel panel-primary">
<div class="panel-body" >	

<div class="panel-heading">
<h3 class="panel-title">Vehicle Data</h3>
</div>

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
</div>


<div class="row">
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

<div class="row">
	<div class="col-md-3">
		<label for="vehicledistanceunknown">Vehicle distance unknown</label>
		<div class="radio">
			<label><input type="radio" name="vehicledistanceunknown" value="Yes">Yes</label>
			<label><input type="radio" name="vehicledistanceunknown" value="No">No</label>
		</div>
	</div>
	
	
	<div class="col-md-3">
		<label for="vehicleleinifany">Lein against Vehicle if any</label>
		<div class="radio">
			<label><input type="radio" name="vehicleleinifany" value="Yes">Yes</label>
			<label><input type="radio" name="vehicleleinifany" value="No">No</label>
		</div>
	</div>
</div>

<div class="row">
	
	<div class="col-md-3">
	<label for="gsthstnonregistrant">GST/HST Non Registrant ? </label>
		<div class="radio">
			<label><input type="radio" name="gsthstnonregistrant" value="Yes">Yes</label>
			<label><input type="radio" name="gsthstnonregistrant" value="No">No</label>
		</div>
	</div>
	
	<div class="col-md-3">
		<label for="gsthstregistrationno">GST/HST Registration No.</label>
		<input class="form-control" id="gsthstregistrationno" name="gsthstregistrationno" type="text">
	</div>
	<div class="col-md-3">
		<label for="vehiclegsthstpayable">GST/HST payable amount</label>
		<input class="form-control" id="vehiclegsthstpayable" name="vehiclegsthstpayable" type="text">
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<label for="warrantyinservicedt">Manufacturer' warranty in Service Date</label>
		<input class="form-control" id="warrantyinservicedt" name="warrantyinservicedt" type="text">
	</div>
	<div class="col-md-3">
		<label for="vehicledeliverydate">Delivery Date</label>
		<input class="form-control" id="vehicledeliverydate" name="vehicledeliverydate" type="text">
	</div>
	<div class="col-md-3">
		<label for="vehicledetailsofdelivery">Details of Delivery</label>
		<input class="form-control" id="vehicledetailsofdelivery" name="vehicledetailsofdelivery" type="text">
	</div>

</div>

<div class="row">
	<div class="col-md-3">
		<label for="isvehicledeliveredwithsafetystandardcert">Will Vehicle delivered with Safety Standard Certificates</label>
		<div class="radio">
			<label><input type="radio" name="isvehicledeliveredwithsafetystandardcert" value="Yes">Yes</label>
			<label><input type="radio" name="isvehicledeliveredwithsafetystandardcert" value="No">No</label>
		</div>
	</div>
	<div class="col-md-3">
		<label for="standardsafetycertificatedetails">Standard Safety Certificate Details</label>
		<input class="form-control" id="standardsafetycertificatedetails" name="standardsafetycertificatedetails" type="text">
	</div>
	
	<div class="col-md-3">
		<label for="vehiclemtobrand">MTO Brand</label>
		<input class="form-control" id="vehicleMTObrand" name="vehicleMTObrand" type="text">
	</div>
	<div class="col-md-3">
	<label for="vehicledailyrental">Daily Rental </label>
		<div class="radio">
			<label><input type="radio" name="vehicledailyrental" value="Yes">Yes</label>
			<label><input type="radio" name="vehicledailyrental" value="No">No</label>
		</div>
	</div>	
</div>


<div class="panel-footer">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-3"></div>

	<div class="col-md-3">
	<input  type="submit" style="align:right;" class="btn btn-primary" name="savebutton" id="savebutton" value="Save"></button>
    <input  type="button" class="btn btn-default" id="cancelbutton" value="Cancel"></button>
	</div>
	
	<div class="col-md-3">
	<input class="form-control" id="message" name="message" type="text">
	</div>

</form>	

</div>
</div><!-------panel footer-------->


</div><!---panel body--->
</div><!--panel primary--->

</div>
</div>


</body>
</html>
