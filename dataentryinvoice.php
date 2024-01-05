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
$("#message3").hide();
$("#pagetwo").hide();
$("#pagethree").hide();
$("#invoicedate").inputmask("99-99-9999");
$("#expirydate").inputmask("99-99-9999");
$("#phoneno").inputmask("999-9999-9999");
$("#accepteddate").inputmask("99-99-9999");
$("#paymentstartson").inputmask("99-99-9999");
$("#sellingprice").inputmask("99999999.99");
$("#administrationfees").inputmask("99999999.99");
$("#tradeinallowance").inputmask("99999999.99");
$("#licencefees").inputmask("99999999.99");
$("#gasoline").inputmask("99999999.99");
$("#payoutlienontradein").inputmask("99999999.99");
$("#licencefees").inputmask("99999999.99");
$("#gsthstpayableontradein").inputmask("99999999.99");
$("#depositamount").inputmask("99999999.99");
$("#amountpayableondelivery").inputmask("99999999.99");
$("#insuranceamount").inputmask("99999999.99");
$("#pstoninsurance").inputmask("99999999.99");
$("#lienregistrationfees").inputmask("99999999.99");
$("#balancefinanced").inputmask("99999999.99");
$("#netamounttobefinanced").inputmask("99999999.99");
$("#costofborrowing").inputmask("99999999.99");
$("#amountofpayments").inputmask("99999999.99");
$("#noofpayments").inputmask("999999");


$("#cancelbutton").click(function()
{

});

$("#savebutton").click(function()
{
	if ($("#invoicedate").val()=="")
	{
	$("#message3").show();
	$("#message3").val("Invoice date cannot be blank!!!");
	$("#message3").css("color","red");
	return false;
	}

	if ($("#selectcustomer").val()=="")
	{
	$("#message3").show();
	$("#message3").val("Please select customer !!!");
	$("#message3").css("color","red");
	return false;
	}

	if ($("#selectvehicle").val()=="")
	{
	$("#message3").show();
	$("#message3").val("Please select vehicle !!!");
	$("#message3").css("color","red");
	return false;
	}

	if ($("#nameofinsurancepolicy").val()=="")
	{
	}
	
		
	if ($('input:radio[name=isdealerguaranty]:checked').val()=="")
	{
	$("#message3").show();
	$("#message3").val("dealers guarantee radio button not checked!!!");
	$("#message3").css("color","red");
	return false;
	}

	if ($("#comments").val()=="")
	{
	$("#message3").show();
	$("#message3").val("Comments column cannot be blank!!!");
	$("#message3").css("color","red");
	return false;
	}

	if ($('input:radio[name=isthirdpartywarranty]:checked').val()=="")
	{
	$("#message3").show();
	$("#message3").val("third party warranty radio button not checked!!!");
	$("#message3").css("color","red");
	return false;
	}

	if ($("#retailpriceifincludedinsellingprice").val()=="")
	{
	$("#message3").show();
	$("#message3").val("retail price if included in sellingprice cannot be blank!!!");
	$("#message3").css("color","red");
	return false;
	}

	if ($("#sellingprice").val()=="")
	{
	$("#message3").show();
	$("#message3").val("selling pricecannot be blank!!!");
	$("#message3").css("color","red");
	return false;
	}

	if ($("#administrationfees").val()=="")
	{
	$("#message3").show();
	$("#message3").val("administration fees cannot be blank!!!");
	$("#message3").css("color","red");
	return false;
	}

	if ($('input:radio[name=deposit]:checked').val()=="")
	{
		
	}
	
	if ($('input:radio[name=deposit]:checked').val()!=="")
	{
		if ($("depositamount").val()=="")
		{
		$("#message3").show();
		$("#message3").val("Deposit amount cannot  be blank!!!");
		$("#message3").css("color","red");
		return false;
		}	
	}
	
	
	if ($('input:radio[name=insurance]:checked').val()=="")
	{
		
	}

	if ($('input:radio[name=insurance]:checked').val()!=="")
	{
		if ($("insuranceamount").val()=="")
		{
		$("#message3").show();
		$("#message3").val("Insurance amount cannot  be blank!!!");
		$("#message3").css("color","red");
		return false;
		}	
	}

		if ($('input:radio[name=canadianmotorvehiclearbplan]:checked').val()=="")
	{
			$("#message3").show();
			$("#message3").val("check the radio button for canadianmotorvehiclearbplan!!!");
			$("#message3").css("color","red");
			return false;

	}


	if ($("#salespersonsname").val()=="")
	{
	$("#message3").show();
	$("#message3").val("sales person name cannot be blank!!!");
	$("#message3").css("color","red");
	return false;
	}
	if ($("#salespersonsregistrationno").val()=="")
	{
		
	}

	if ($("#dealersregistrationno").val()=="")
	{
	$("#message3").show();
	$("#message3").val("dealers registration cannot be blank!!!");
	$("#message3").css("color","red");
	return false;
	}

	if ($("#dealersnameofofficial").val()=="")
	{
	$("#message3").show();
	$("#message3").val("dealers name of official cannot be blank!!!");
	$("#message3").css("color","red");
	return false;
	}

	if ($("#accepteddate").val()=="")
	{
	$("#message3").show();
	$("#message3").val("Accepted date cannot be blank!!!");
	$("#message3").css("color","red");
	return false;
	}

});




$("#nextpagetwo").click(function()
{
$("#pageone").hide();
$("#pagethree").hide();
$("#pagetwo").show();
});

$("#previouspageone").click(function()
{
$("#pagetwo").hide();	
$("#pageone").show();
$("#pagethree").hide();
});

$("#nextpagethree").click(function()
{
$("#pagetwo").hide();	
$("#pageone").hide();
$("#pagethree").show();
});

$("#previouspagetwo").click(function()
{
$("#pagetwo").show();	
$("#pageone").hide();
$("#pagethree").hide();
});

});
</script>
</head>

<body>
<?php
include("classes/db.php");
$db1=new dbclass();
$db1->connect();
$conn1=$db1->conn;

include("classes/purchasedataclass.php");
$purchasedata1=new purchasedataclass();
include("classes/vehicledataclass.php");
$vehicledata1=new vehicledataclass();
include("classes/invoicedataclass.php");
$invoicedata1=new invoicedataclass();
?>


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
if (!empty($_REQUEST['message3']))		
{
	if ($_REQUEST['message3']=="success")
	{
		echo "<div style='position:absolute;left:400px;top:135px;color:green;z-index:10;' >Invoice Record posted successfully!!!</div>";	
	}
	if ($_REQUEST['message1']=="nosuccess")
	{
		echo "<div style='position:absolute;left:400px;top:135px;color:blue;' >Error posting Invoice record!!!</div>";	
		
	}
}	
?>	

	
<form id="invoicedata" method="post" action="postinvoicedata.php">

<div id="firstpage" class="panel panel-primary">
<div class="panel-body" id="pageone">	
<div class="panel-heading">
<h3 class="panel-title">Invoice Data</h3>
</div>

<div class="row">
	<div class="col-md-3">
		<label for="invoiceno">Invoice No:</label>
		<input class="form-control" id="invoiceno" name="invoiceno" value="<?php echo $invoicedata1->displayinvoicemaxno($conn1);?>" type="text">
	</div>
	<div class="col-md-3">
		<label for="invoicedate">Invoice Date:</label>
		<input class="form-control" id="invoicedate" name="invoicedate" type="text">
	</div>

	<div class="col-md-3">
	<div class="form-group">
	  <label for="selectcustomer">Select Customer:</label>
	  <select class="form-control" id="selectcustomer" name="selectcustomer">
		<?php echo $purchasedata1->optionvalue($conn1); ?>
	  </select>
	  </div>
	</div>

	<div class="col-md-3">
	<div class="form-group">
	  <label for="selectvehicle">Select Vehicle:</label>
	  <select class="form-control" id="selectvehicle" name="selectvehicle">
		<?php echo $vehicledata1->optionvalue($conn1); ?>
	  </select>
	  </div>
	</div>

</div>


<div class="panel-heading">
<h3 class="panel-title">Insurance Information :</h3>
</div>
<div class="row">

	<div class="col-md-3">
		<label for="nameofinsurancepolicy">Name of Insurance Policy</label>
		<input class="form-control" id="nameofinsurancepolicy" name="nameofinsurancepolicy" type="text">
	</div>
	<div class="col-md-3">
		<label for="insurancepolicyno">Policy No:</label>
		<input class="form-control" id="insurancepolicyno" name="insurancepolicyno" type="text">
	</div>
	<div class="col-md-3">
		<label for="expirydate">Expiry Date </label>
		<input class="form-control" id="expirydate" name="expirydate" type="text">
	</div>
	<div class="col-md-3">
		<label for="insuranceagent">Insurance Agent</label>
		<input class="form-control" id="insuranceagent" name="insuranceagent" type="text">
	</div>

</div>

<div class="row">
	<div class="col-md-3">
		<label for="phoneno">Phone No</label>
		<input class="form-control" id="phoneno" name="phoneno" type="text">
	</div>
</div>

<div class="panel-heading">
<h3 class="panel-title">Dealers Guarantee</h3>
</div>

<div class="row">
	<div class="col-md-3">
	<label for="isdealerguaranty">Is there any dealer Guaranty on this vehicle ? </label>
		<div class="radio">
			<label><input type="radio" value="Yes" name="isdealerguaranty">Yes</label>
			<label><input type="radio" value="No" name="isdealerguaranty">No</label>
		</div>
	</div>
	
	<div class="col-md-3">
		<label for="dealerguarantydescription">Dealer Guarantee Description</label>
		 <textarea class="form-control" rows="2" id="dealerguarantydescription" name="dealerguarantydescription"></textarea>
	</div>
	
	<div class="col-md-3">
		<label for="comments">Comments</label>
		 <textarea class="form-control" rows="2" id="comments" name="comments"></textarea>
	</div>
</div>


<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-3"></div>
	<div class="col-md-3"></div>
	<div class="col-md-3">
	<ul class="pager">
	  <li><a id="nextpagetwo" href="#">Next Page</a></li>
	</ul>
	</div>
</div>
</div><!----end panel body of page1-->


<div class="panel-body" id="pagetwo">	
<div class="panel-heading">
<h3 class="panel-title">Third Party Warranty :</h3>
</div>

<div class="row">
	<div class="col-md-3">
	<label for="isthirdpartywarranty">Is there any third party warranty on this vehicle ? </label>
		<div class="radio">
			<label><input type="radio" value="Yes" name="isthirdpartywarranty">Yes</label>
			<label><input type="radio" value="No" name="isthirdpartywarranty">No</label>
		</div>
	</div>
	
	<div class="col-md-3">
		<label for="retailpriceifincludedinsellingprice">Retail price if included in selling price ?</label>
		<input class="form-control" id="retailpriceifincludedinsellingprice" name="retailpriceifincludedinsellingprice" type="text">
	</div>

	<div class="col-md-3">
		<label for="thirdpartywarrantycompany">Company</label>
		<input class="form-control" id="thirdpartywarrantycompany" name="thirdpartywarrantycompany" type="text">
	</div>

	<div class="col-md-3">
		<label for="thirdpartywarrantydescription">Third Party Warranty Description</label>
		 <textarea class="form-control" rows="2" id="thirdpartywarrantydescription" name="thirdpartywarrantydescription"></textarea>
	</div>
</div>

<div class="row">
	
<div class="panel-heading">
<h3 class="panel-title">Terms of Settlement :</h3>
</div>

	<div class="col-md-3">
		<label for="sellingprice">Selling Price</label>
		<input class="form-control" id="sellingprice" name="sellingprice" type="text">
	</div>
	<div class="col-md-3">
		<label for="administrationfees">Administration Fees</label>
		<input class="form-control" id="administrationfees" name="administrationfees" type="text">
	</div>
	<div class="col-md-3">
		<label for="tradeinallowance">Trade In Allowance</label>
		<input class="form-control" id="tradeinallowance" name="tradeinallowance" type="text">
	</div>
	<div class="col-md-3">
		<label for="licencefees">Licence Fees</label>
		<input class="form-control" id="licencefees" name="licencefees" type="text">
	</div>

</div>
<div class="row">
	<div class="col-md-3">
		<label for="gasoline">Gasoline</label>
		<input class="form-control" id="gasoline" name="gasoline" type="text">
	</div>
	<div class="col-md-3">
		<label for="payoutlienontradein">Payout lien On Trade In</label>
		<input class="form-control" id="payoutlienontradein" name="payoutlienontradein" type="text">
	</div>
	<div class="col-md-3">
		<label for="gsthstpayableontradein">GSTHST payable on tradein </label>
		<input class="form-control" id="gsthstpayableontradein" name="gsthstpayableontradein" type="text">
	</div>
	<div class="col-md-3">
		<label for="deposit">Deposit Made By</label>
		<div class="radio">
			<label><input type="radio" value="Cash" name="deposit">Cash</label>
			<label><input type="radio" value="Cheque" name="deposit">Cheque</label>
			<label><input type="radio" value="Credit Card" name="deposit">Credit Card</label>
		</div>
	</div>
</div>	
	
<div class="row">
	<div class="col-md-3">
		<label for="depositamount">Deposit Amount</label>
		<input class="form-control" id="depositamount" name="depositamount" type="text">
	</div>
	<div class="col-md-3">
		<label for="amountpayableondelivery">Payable on Delivery</label>
		<input class="form-control" id="amountpayableondelivery" name="amountpayableondelivery" type="text">
	</div>
	<div class="col-md-3">
		<label for="insurance">Insurance</label>
		<div class="radio">
			<label><input type="radio" value="Life" name="insurance">Life</label>
			<label><input type="radio" value="Accident" name="insurance">Accident</label>
			<label><input type="radio" value="LossofInc" name="insurance">Loss of Inc.</label>
		</div>
	</div>
	<div class="col-md-3">
		<label for="insuranceamount">Insurance Amount</label>
		<input class="form-control" id="insuranceamount" name="insuranceamount" type="text">
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<label for="pstoninsurance">PST on Insurance</label>
		<input class="form-control" id="pstoninsurance" name="pstoninsurance" type="text">
	</div>
	<div class="col-md-3">
		<label for="lienregistrationfees">LIEN Registration Fees</label>
		<input class="form-control" id="lienregistrationfees" name="lienregistrationfees" type="text">
	</div>
	<div class="col-md-3">
		<label for="balancefinanced">Balance finaced</label>
		<input class="form-control" id="balancefinanced" name="balancefinanced" type="text">
	</div>
	<div class="col-md-3">
		<label for="netamounttobefinanced">Net Amount to be financed</label>
		<input class="form-control" id="netamounttobefinanced" name="netamounttobefinanced" type="text">
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<label for="costofborrowing">Cost of Borrowing</label>
		<input class="form-control" id="costofborrowing" name="costofborrowing" type="text">
	</div>
	
	<div class="col-md-3"></div>
	<div class="col-md-3"></div>
	<div class="col-md-3">
	<ul class="pager">
	  <li><a id="previouspageone" href="#">Previous Page</a></li>
	  <li><a id="nextpagethree" href="#">Next Page</a></li>
	</ul>
	</div>
</div>
</div><!----end panel body of pagetwo-->
<!--------------------------------------------------------------------------------------------------------------------------------------------->

<div class="panel-body" id="pagethree">	
<div class="panel-heading">
<h3 class="panel-title">Terms of Financing :</h3>
</div>

<div class="row">
<div class="col-md-3">
		<label for="amountofpayments">Amount of Payments</label>
		<input class="form-control" id="amountofpayments" name="amountofpayments" type="text">
</div>
<div class="col-md-3">
		<label for="noofpayments">Number of Payments</label>
		<input class="form-control" id="noofpayments" name="noofpayments" type="text">
</div>
<div class="col-md-3">
		<label for="paymentstartson">Payment Starts On </label>
		<input class="form-control" id="paymentstartson" name="paymentstartson" type="text">
</div>
<div class="col-md-3">
		<label for="creditapproval">Credit Approval</label>
		<input class="form-control" id="creditapproval" name="creditapproval" type="text">
</div>
</div>

<div class="row">
<div class="col-md-3">
		<label for="dealerreceiveincentive">Will dealer or Sales Person receive any incentive for financing this vehicle</label>
		<div class="radio">
			<label><input type="radio" value="Yes" name="dealerreceiveincentive">yes</label>
			<label><input type="radio" value="No" name="dealerreceiveincentive">No</label>
		</div>
</div>

<div class="col-md-3">
		<label for="nondisclosurestatementdetails">Customer has received any non disclosure statment if any  </label>
		<input class="form-control" id="nondisclosurestatementdetails" name="nondisclosurestatementdetails" type="text">
</div>

<div class="col-md-3">
		<label for="canadianmotorvehiclearbplan">Manufacturer participates in Canadian Motor Vehicles Arbitration Plan (CAMVAP)</label>
		<div class="radio">
			<label><input type="radio" value="Yes" name="canadianmotorvehiclearbplan">yes</label>
			<label><input type="radio" value="No" name="canadianmotorvehiclearbplan">No</label>
		</div>
</div>
</div>

<div class="row">
<div class="col-md-3">
		<label for="salespersonsname">Sales Persons Name  </label>
		<input class="form-control" id="salespersonsname" name="salespersonsname" type="text">
</div>
<div class="col-md-3">
		<label for="salespersonsregistrationno">Registration No  </label>
		<input class="form-control" id="salespersonsregistrationno" name="salespersonsregistrationno" type="text">
</div>
<div class="col-md-3">
		<label for="dealersregistrationno">Dealer's Registration No  </label>
		<input class="form-control" id="dealersregistrationno" name="dealersregistrationno" type="text">
</div>
<div class="col-md-3">
		<label for="dealersnameofofficial">Dealer's Name of Official   </label>
		<input class="form-control" id="dealersnameofofficial" name="dealersnameofofficial" type="text">
</div>
</div>

<div class="row">
<div class="col-md-3">
		<label for="acceptorsregistrationno">Acceptor's Registration No.</label>
		<input class="form-control" id="acceptorsregistrationno" name="acceptorsregistrationno" type="text">
</div>
<div class="col-md-3">
		<label for="acceptorstitle">Acceptor's Title</label>
		<input class="form-control" id="acceptorstitle" name="acceptorstitle" type="text">
</div>
<div class="col-md-3">
		<label for="accepteddate">Accepted date</label>
		<input class="form-control" id="accepteddate" name="accepteddate" type="text">
</div>
<div class="col-md-3">
	<ul class="pager">
	  <li><a id="previouspagetwo" href="#">Previous Page</a></li>
	</ul>
</div>
</div>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-3"></div>
<div class="col-md-3">
<input  class="btn btn-primary" type="submit" id="savebutton" name="savebutton" value="Save">
<input  class="btn btn-default" type="cancel" id="cancelbutton" name="cancelbutton" value="Cancel">
</div>
<div class="col-md-3">
<input class="form-control" id="message3" name="message3" type="text">
</div>

</div>

</div><!---end of panel body for pagethree---->
</div><!----end of panel---->
</form>
<!--------------------------------------------------------------------------------------------------------------------------------------------->

</div>
</div>



</body>
</html>
