<?php
session_start();
if ($_SESSION['username']!="")
{
include("classes/db.php");
$db1=new dbclass();
$db1->connect();
include("classes/invoicedataclass.php");
$invoicedata1=new invoicedataclass();
include("classes/vehicledataclass.php");
$vehicledata1=new vehicledataclass();
include("classes/purchasedataclass.php");
$purchasedata1=new purchasedataclass();
$conn1=$db1->conn;
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
$("#submitform").click(function()
{
if ($("#selectinvoice").val()=="")
{
return false;	 
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
	  <li role="presentation"><a href="#">Enter Quote Data</a></li>
	  <li role="presentation"><a href="dataentryinvoice.php">Enter Invoice Data</a></li>
	  <li role="presentation"><a href="showinvoice.php">Show Invoice</a></li>
	  <li role="presentation"><a href="index.php?logout=true">Logout</a></li>
	</ul>
	</div>

<div class="panel panel-primary" >
<div class="panel-body" >	
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-3">
</div>
<div class="col-md-3">
</div>
<div class="col-md-3" align="right">
	  <div class="form-group">
	  <form id="showinvoice" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	  <label for="selectinvoice">Select Invoice:</label>
	       <select class="form-control" id="selectinvoice" name="selectinvoice" style="height:30px;width:150px;">
   		   <?php echo $invoicedata1->optionvalue($conn1);?>
	  </select>
	 <input type="submit" class="btn-primary" value="SHOW INVOICE" id="submitform" name="submitform">	
	  </form>		
	  </div>
	  
</div>
</div>

<?php 
if (isset($_REQUEST['submitform']))
{
$invoice_no=$_REQUEST['selectinvoice'];
$invoicedata1->displayinvoice($invoice_no,$conn1);
$name1=$invoicedata1->selectcustomer1;
$purchasedata1->displaypurchaser($name1,$conn1);
$vehiclename2=$invoicedata1->selectvehicle1;
$vehicledata1->displayvehicle($vehiclename2,$conn1);
}
?>
	 
	
<div class="row">
<div class="col-md-3" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
PRIDE TRUCK SALES LTD.,
<br>5868,DIXIE ROAD,<br>
MISSISAUGA, ON L4W1E9,<br>
Tel:905 564 1077  Fax :1866 865 4596
GST/HST : #825712052RT0001
</div>


<div class="col-md-3">
</div>
<div class="col-md-3">
</div>
<div class="col-md-3" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
USER VEHICLE QUOTE
<br>
<?php $dtime=new DateTime($invoicedata1->invoicedate1);echo $dtime->format("d-m-Y"); ?>
<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>
<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>
<br>
CONTRACT NO.: <?echo $invoice_no; ?>
</div>
</div>	

<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>
<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>


<div class="row">
<div class="col-md-6" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<table class="table" class="table" id="purchasertable" border="1" width="550px">
<tr><td colspan="2" style="font-weight:900;" class="info" height="40px">PURCHASER INFORMATION</td></tr>
<tr><td colspan="2"   >Purchaser Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp:&nbsp;&nbsp;&nbsp;&nbsp;<i> <?php echo $invoicedata1->selectcustomer1; ?></i></tr>
<tr><td colspan="2"   >Purchasers Address :&nbsp;&nbsp;&nbsp;&nbsp;<i> <?php echo $purchasedata1->purchasersaddress; ?></i> </td></tr>
<tr><td   >City :&nbsp;&nbsp;&nbsp;&nbsp;<i><?php echo $purchasedata1->purchaserscity; ?></i> </td><td>Province :&nbsp;&nbsp;&nbsp;&nbsp;<i><?php echo $purchasedata1->purchasersprovince;?> </i></td></tr>
<tr><td   >Postal Code :&nbsp;&nbsp;<i> <?php echo $purchasedata1->purchaserspostalcode; ?></i> </td><td>Home Tele No.&nbsp;&nbsp; :&nbsp;&nbsp;<i><?php echo $purchasedata1->purchasershometelephoneno;?></i></td></tr>
<tr><td   >Business Tel No. :&nbsp;&nbsp; <i> <?php echo $purchasedata1->purchasersbusinesstelephone; ?> </i></td><td>Email: &nbsp;&nbsp;<i><?php echo $purchasedata1->purchasersemail; ?></i> </td></tr>
<tr><td height="35px">Driver Licence No. : &nbsp;&nbsp;<i> <?php echo $purchasedata1->purchasersdriverlicenceno; ?></i></td><td>Expiry Date :&nbsp;&nbsp;<i> <?php $dtime=new DateTime($purchasedata1->expirydate);echo $dtime->format("d-m-Y"); ?></i></td></tr>
<tr><td height="50px" colspan="2"></td></tr>
</table>

<table class="table" class="table" id="insuranceinformation" width="100%;" border="1" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<tr><td colspan="3" style="font-weight:900;" class="info">INSURANCE INFORMATION</td></tr>
<tr><td colspan="3">Policy Name: <?php echo $invoicedata1->nameofinsurancepolicy1;?></td></tr>
<tr><td colspan="2">Policy No : <?php echo $invoicedata1->insurancepolicyno1;?></td><td>Expiry Date:<?php $dtime=new DateTime($invoicedata1->expirydate);echo $dtime->format("d-m-Y");?></td></tr>
<tr><td colspan="3">Insurance Agent :&nbsp;&nbsp;&nbsp;<?php echo $invoicedata1->insuranceagent1;?></td></tr>
<tr><td colspan="3">Phone ::&nbsp;&nbsp;&nbsp;<?php echo $invoicedata1->phoneno1;?></td></tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
<div class="col-md-3">

</div>
<div class="col-md-6" style="font-size:15px;font-family:helvetica,sans-sarif;">
<table class="table" class="table" id="vehicletable" border="1" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<tr><td colspan="3" style="font-weight:900;" class="info">VEHICLE INFORMATION</td></tr>
<tr><td>Year : &nbsp;&nbsp;&nbsp;<i><?php echo $vehicledata1->vehicleyear; ?></i><td>Make :&nbsp;&nbsp;&nbsp;<i><?php echo $vehicledata1->vehiclemake; ?></i></td><td>Model :&nbsp;&nbsp;&nbsp;<i> <?php echo $vehicledata1->vehiclemodel; ?></i></td></tr>
<tr><td>Trimlevel :&nbsp;&nbsp;&nbsp;<i><?php echo $vehicledata1->vehicletrimlevel; ?></i></td><td>colour : &nbsp;&nbsp;&nbsp;<i><?php echo $vehicledata1->vehiclecolor; ?></i></td><td>Stock# :&nbsp;&nbsp;&nbsp;<i> <?php echo $vehicledata1->vehiclestock;?></i></td></tr>
<tr><td colspan="3">VIN# :&nbsp;&nbsp;&nbsp;<i>
<?php for ($i=0;$i<=strlen($vehicledata1->vehicleVIN);$i++)
	  {
	  echo "<li style='display:inline;border-left:1px solid black; border-right:1px solid black;'>&nbsp;&nbsp;".substr($vehicledata1->vehicleVIN,$i,1)."&nbsp;&nbsp;&nbsp;</li>";	  
	  }	
 ?></i>  </td></tr>
<tr><td colspan="3">Distance Travelled :&nbsp;&nbsp;&nbsp; <i><?php echo $vehicledata1->vehicledistancetravelled; ?></i> </td></tr>
<tr><td colspan="3"><div class="checkbox"><label>
<?php
if ($vehicledata1->vehicledistanceunknown=="Yes")
{
echo "<input id='distanceunknown' name='distanceunknown' readonly type='checkbox' checked>";
echo "Distance unknown(if unknown check this box) :</label></div><i>".$vehicledata1->vehicledistanceunknown.
"</i></td></tr><tr><td colspan='3'><div class='checkbox'><label><input id='vehicledistancetravelled' name='vehicledistancetravelled' readonly type='checkbox'>
Vehicle had travelled -------as of -----distance travelled beleived to be highter</label></div></td></tr>";
}
else
{
echo "<input id='distanceunknown' name='distanceunknown' type='checkbox' readonly>";
echo "Distance unknown(if unknown check this box) :</label></div><i>".$vehicledata1->vehicledistanceunknown. 
"</i></td></tr><tr><td colspan='3'><div class='checkbox'><label><input id='vehicledistancetravelled' name='vehicledistancetravelled' readonly type='checkbox' checked>
Vehicle had travelled ".$vehicledata1->vehicledistancetravelled." as of -----distance travelled beleived to be highter</label></div></td></tr>";
}

?>
<tr><td colspan="3"><div class="checkbox"><label><input id="actualdistance" name="actualdistance" type="checkbox">Actual distance may be substantially higher than odometer reading</label></div></td></tr>
<tr><td colspan="2">Manufacturers' warranty in Service Date :&nbsp;&nbsp;&nbsp;<i><?php $dtime=new DateTime($vehicledata1->warrantyinservicedt);echo $dtime->format("d-m-Y"); ?></i></td><td>Delivery Date : <?php $dtime=new DateTime($vehicledata1->vehicledeliverydate);echo $dtime->format("d-m-Y"); ?></td></tr>
<tr><td colspan="3">Details of delivery :&nbsp;&nbsp;&nbsp;<i><?php echo $vehicledata1->vehicledetailsofdelivery;?></i></td></tr>
<tr><td colspan="2">The vehicle will be delivered with a Safety Standards Certificate :

<?php 
if ($vehicledata1->isvehicledeliveredwithstandardsafetycert=='Yes')
{	
echo "<div class='checkbox'><label><input  name='isvehicledeliveredwithstandardsafetycert' readonly checked type='checkbox'>&nbsp;". $vehicledata1->isvehicledeliveredwithstandardsafetycert ."&nbsp;&nbsp;&nbsp;&nbsp;<input name='isvehicledeliveredwithstandardsafetycert'  readonly  type='checkbox'>&nbsp;&nbsp; No<br>Certificate No.&nbsp;&nbsp;:&nbsp;&nbsp;".$vehicedata1->standardsafetycertdetails; 
}
else 
{
echo "<div class='checkbox'><label><input  name='isvehicledeliveredwithstandardsafetycert' readonly type='checkbox'> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  name='isvehicledeliveredwithstandardsafetycert' readonly type='checkbox' checked>&nbsp;&nbsp; No".$vehicledata1->isvehicledeliveredwithstandardsafetycert."<br> Certificate No.  -- "; 
}	
?>
</label></div>
</td>
<td>Daily rental : &nbsp;&nbsp;&nbsp;<i><?php echo $vehicledata1->vehicledailyrental; ?></i><br>MTO Brand : &nbsp;&nbsp;&nbsp;<i><?php echo $vehicledata1->vehicleMTObrand; ?></i></td>
</tr>
</table>
</div>
</div>

<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>
<div class="row">

<div class="col-md-4">

<table class="table" class="table" id="vehicletable" border="1" width="100%;" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<tr><td colspan="3" style="font-weight:900;" class="info">VEHICLE TO BE TRADED IN </td></tr>
<tr><td>Year :<?php echo $vehicledata1->vehicleyear;  ?><td>Make : <?php echo $vehicledata1->vehiclemake; ?> </td><td>Model : <?php echo $vehicledata1->vehiclemodel; ?></td></tr>
<tr><td colspan="2">Trimlevel: <?php echo $vehicledata1->vehicletrimlevel; ?> </td><td>colour: <? echo $vehicledata1->vehiclecolor; ?>  </td></tr>
<tr><td colspan="3">Details of Trade attached appraisal form VIN#: <?php echo $vehicledata1->vehicleVIN;?> </td></tr>
<tr><td colspan="3">Exact Distance The Vehicle has travelled : <?php echo $vehicledata1->vehicledistancetravelled; ?>KMS</td></tr>
<tr><td colspan="3">Distance unknown(if unknown check this box) :

<?php 
if ($vehicledata1->vehicledistanceunknown=='Yes')
{	
echo "<div class='checkbox'><label><input  name='vehicledistanceunknown' readonly checked type='checkbox'>&nbsp;". $vehicledata1->vehicledistanceunknown . "&nbsp;&nbsp;&nbsp;&nbsp;<input name='vehicledistanceunknown'  readonly  type='checkbox'>&nbsp;&nbsp; No"; 
}
else 
{
echo "<div class='checkbox'><label><input  name='vehicleledistanceunknown' readonly type='checkbox'> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  name='vehicleledistanceunknown' readonly type='checkbox' checked>".$vehicledata1->vehicledistanceunknown; 
}	
?>
</label></div>
</td></tr>

<tr><td colspan="3">is there a lein against this vehicle ? :
<?php 
if ($vehicledata1->vehicleleinifany=='Yes')
{	
echo "<div class='checkbox'><label><input  name='vehicleleinifany' readonly checked type='checkbox'>&nbsp;". $vehicledata1->vehicleleinifany ."&nbsp;&nbsp;&nbsp;&nbsp;<input name='vehicleleinifany'  readonly  type='checkbox'>&nbsp;&nbsp; No"; 
}
else 
{
echo "<div class='checkbox'><label><input  name='vehicleleinifany' readonly type='checkbox'> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  name='vehicleleinifany' readonly type='checkbox' checked>".$vehicledata1->vehicleleinifany; 
}	
?>
</label></div>
</td></tr>
<tr><td colspan="3">GST/HST Non-Registrant : 
<?php 
if ($vehicledata1->gsthstnonregistrant=='Yes')
{	
echo "<div class='checkbox'><label><input  name='gsthstnonregistrant' readonly checked type='checkbox'>&nbsp;". $vehicledata1->gsthstnonregistrant ."&nbsp;&nbsp;&nbsp;<input name='gsthstnonregistrant'  readonly  type='checkbox'>&nbsp;&nbsp; No"; 
}
else 
{
echo "<div class='checkbox'><label><input  name='gsthstnonregistrant' readonly type='checkbox'>Yes &nbsp;&nbsp;&nbsp;&nbsp;<input  name='gsthstnonregistrant' readonly type='checkbox' checked>". $vehicledata1->gsthstnonregistrant ; 
}	
?>
</label></div>
</td></tr>


<tr><td colspan="3">GST/HST Registrant / Registration no. :<?php echo $vehicledata1->gsthstregistrationno; ?></td></tr>
<tr><td colspan="3">GST/HST Payable on trade-in :<?php echo $vehicledata1->vehiclegsthstpayable;?></td></tr>
</tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table class="table" class="table" id="comments" border="1" width="100%;" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<tr><td  style="font-weight:900;" class="info">COMMENTS</td></tr>
<tr><td style="font-size:9pt;">Identify any items, inducements or specific repairs included in the sale price and indicate
retail values of items or inducements.</td></tr>
<tr><td>CUSTOMER HAS RECEIVED A DISCLOSURE STATEMENT IF ANY (if Applicable)  :<?php echo $invoicedata1->nondisclosurestatementdetails1; ?> </td></tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table class="table" " id="extracolumnrow2"   style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;" border="1" width="100%;">
<tr><td class="info" style="font-weight:900;">Canedian Motor Vehicle Arbitration Plan (CAM/VAP)</td></tr>
<tr><td>Manufacturers participants in Canedian Motor Vehicle Arbitration Plan (CAM/VAP)<br>(See applicable statement on page no.2)  :
<?php 
if ($invoicedata1->canadianmotorvehiclearbplan1=='Yes')
{	
echo "<div class='checkbox'><label><input  name='canadianmotorvehiclearbplan' readonly checked type='checkbox'>&nbsp;". $invoicedata1->canadianmotorvehiclearbplan1."&nbsp;&nbsp;&nbsp;&nbsp;<input name='canadianmotorvehiclearbplan'  readonly  type='checkbox'>&nbsp;&nbsp; No</div>"; 
}
else 
{
echo "<div class='checkbox'><label><input  name='canadianmotorvehiclearbplan' readonly type='checkbox'> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  name='canadianmotorvehiclearbplan' readonly type='checkbox' checked>".$invoicedata1->canadianmotorvehiclearbplan1."</div>"; 
}	
?>
</label></div>
</td></tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table class="table" class="table" id="extracolumnrow3" border="1" width="100%;" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<tr><td style="font-weight:900;" class="info">PRIVACY STATEMENT</td></tr>
<tr><td style="font-size:9pt;">By signing this contract you consent to the dealer contacting to you in the future end to the sharing of Information with associated business so that they may provide you with timely information about their services. You may withdraw your consent at any time.</td></tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table class="table" class="table" id="salespersondetails" border="1" width="100%;" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<tr><td style="font-weight:900;" class="info">SALESPERSON SIGNATURE</td></tr>
<tr><td>Salesperson's Name: <?php echo $invoicedata1->salespersonname1;?></td></tr>
<tr><td>Registration No: <?php echo $invoicedata1->salespersonsregistrationno1;?></td></tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table class="table" class="table" id="vendorsacceptance" border="1" width="100%;" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<tr><td style="font-weight:900;" class="info">VENDOR'S ACCEPTANCE</td></tr>
<tr><td>Dealer's Registration No.:&nbsp;&nbsp;&nbsp; <?php echo $invoicedata1->dealersregistrationno1;?></td></tr>
<tr><td>Name of Official:&nbsp;&nbsp;&nbsp;<?php echo $invoicedata1->salespersonsregistrationno1;?></td></tr>
<tr><td>Acceptors Registration No:&nbsp;&nbsp;&nbsp;<?php echo $invoicedata1->acceptorsregistrationno1;?></td></tr>
<tr><td>Title:&nbsp;&nbsp;&nbsp;<?php echo $invoicedata1->acceptorstitle1;?></td></tr>
<tr><td>Date:&nbsp;&nbsp;&nbsp;<?php $dtime=new DateTime($invoicedata1->accepteddate1);echo $dtime->format("d-m-Y"); ?></td></tr>
</table>

</div>


<div class="col-md-4">
<table class="table" class="table" id="dealersguarantee" border="1" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<tr><td style="font-weight:900;" class="info">DEALERS GUARANTY</td></tr>
<tr><td>Is there dealer's guaranty on this vehicle if yes complete this section  :
<?php 
if ($invoicedata1->isdealerguaranty1=='Yes')
{	
echo "<div class='checkbox'><label><input  name='dealerwarranty' readonly checked type='checkbox'>&nbsp;".$invoicedata1->isdealerguaranty1."&nbsp;&nbsp;&nbsp;&nbsp;<input name='dealerwarranty' readonly  type='checkbox'>&nbsp;&nbsp; No"; 
}
else 
{
echo "<div class='checkbox'><label><input  name='dealerwarranty' readonly type='checkbox'> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  name='dealerwarranty' readonly type='checkbox' checked>".$invoicedata1->isdealerguaranty1; 
}	
?>

</label></div></td></tr>


<tr><td>Description : <?php echo $invoicedata1->dealerguarantydescription1;?></td></tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table class="table" class="table" id="thirdpartywarranty" border="1" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<tr><td style="font-weight:900;"  class="info">THIRD PARTY WARRANTY</td></tr>
<tr><td>Is there third party warranty on this vehicle? if yes complete this section  :&nbsp;&nbsp;&nbsp;
<?php 
if ($invoicedata1->isthirdpartywarranty1=='Yes')
{	
echo "<div class='checkbox'><label><input  name='thirdpartywarranty' readonly checked type='checkbox'>&nbsp;".$invoicedata1->isthirdpartywarranty1."&nbsp;&nbsp;&nbsp;&nbsp;<input name='thirdpartywarranty' readonly  type='checkbox'>&nbsp;&nbsp; No"; 
}
else 
{
echo "<div class='checkbox'><label><input  name='thirdpartywarranty' readonly type='checkbox'> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  name='thirdpartywarranty' readonly type='checkbox' checked>".$invoicedata1->isthirdpartywarranty1; 
}	
?>
</label></div></td></tr>


<tr><td>Retail value if included in vehicle selling price? :&nbsp;&nbsp;&nbsp;<?php echo "$".$invoicedata1->retailpriceifincludedinsellingprice1; ?> </td></tr>
<tr><td>Company  :&nbsp;&nbsp;&nbsp;<?php echo $invoicedata1->company1; ?> </td></tr>
<tr><td>Description  :&nbsp;&nbsp;&nbsp;<?php echo $invoicedata1->thirdpartywarrantydescription1; ?> </td></tr>
</table>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table class="table" class="table" id="termsoffinancing" border="1" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<tr><td style="font-weight:900;" class="info" colspan="2">TERMS OF FINANCING</td></tr>
<tr><td>Amount of Payments  :<?php echo "$". $invoicedata1->amountofpayments1;?></td><td>No. of Payments  :
<?php echo $invoicedata1->noofpayments1;?></td></tr>
<tr><td>Payments starts on  : <?php $dtime=new DateTime($invoicedata1->paymentstartson1);echo $dtime->format("d-m-Y");?></td><td>Credit Approval  : <?php echo $invoicedata1->creditapproval1;?></td></tr>
<tr><td colspan="2">Customer has received the financing disclosure from the lending institution  : <?php echo $invoicedata1->nondisclosurestatementdetails1; ?>  </td></tr>
<tr><td colspan="2">Will the dealer or Salesperson receive any incentive for the financing of this vehicle ? : 
<?php 
if ($invoicedata1->dealerreceiveincentive1=='Yes')
{	
echo "<div class='checkbox'><label><input  name='dealerreceiveincentive' readonly checked type='checkbox'>
&nbsp;".$invoicedata1->dealerreceiveincentive1."&nbsp;&nbsp;&nbsp;&nbsp;
<input name='dealerreceiveincentive' readonly  type='checkbox'>&nbsp;&nbsp; No</div>"; 
}
else 
{
echo "<div class='checkbox'><label><input  name='dealerreceiveincentive' readonly type='checkbox'> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input  name='dealerreceiveincentive' readonly type='checkbox' checked>".$invoicedata1->dealerreceiveincentive1."</div>"; 
}	
?>
</label></div><tr><td colspan="2">Purchasers Intials  :__________ </td></tr>
</table>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table class="table" class="table" id="termsofcotntract" border="1" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;">
<tr><td style="font-weight:900;" class="info">TERMS OF CONTRACT</td></tr>
<tr><td>VEHICLE SOLD "AS IS" : The motor vehicle sold under this contract is being sold "as is" and is not represented as being in
road worthy condition, mechanically sound or maintained at any guratneed level of quality. The vehicle may not be fit for use as 
a means of transportation and may require substantial repairs at the purchaser's expenses. It may not be possible to register the vehicle 
to be driven in its current condition.
<br>
Purchasers Initials:__________
</td></tr>
</table>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table class="table" class="table" id="salesfinal" border="1" style="font=family:fatcow;font-weight:300;font-size:14px;letter-spacing: 2px;font-size-adjust:0.58;" class="table">
<tr><td class="info" style="font-weight:900;" >SALES FINAL: </td></tr> 
<tr><td>Please review the entire contract, including all attached statements, before signing. This contract is final and binding once you have signed it, unless the motor vehicle dealer has failed to comply with cetain legal obligations.</td></tr>
<tr><td style="font-size:8pt;">You acknowledged having read all the terms and contract, including those on page2, You understand these terms makeup the entire contract.</td></tr>
</table>
</div>

<?php $subtotal1=0;?>

<div class="col-md-4" style="font=family:fatcow;font-weight:300;font-size:13px;letter-spacing:1.2px;font-size-adjust:0.58;">
<table class="table table-stripped" id="termsofsettlement" border="1" width="260px" class="table">
<tr height="35px"><td colspan="2" class="info"><b>TERMS OF SETTLEMENT</b></td></tr>
<tr height="35px" height="35px"><td>1.SELLING PRICE</td><td align="right"><?php echo "$".$invoicedata1->sellingprice1; $subtotal1=$subtotal1+$invoicedata1->sellingprice1;?></td></tr>
<tr height="35px"><td>2.THIRD PARTY WARRANTY</td><td align="right"><?php echo "$".$invoicedata1->retailpriceifincludedinsellingprice1; ?></td></tr>
<tr height="35px"><td>3.             </td><td align="right">$0.00        </td></tr>
<tr height="35px"><td>4.ADMINISTRATION FEES</td><td align="right"><?php echo "$".$invoicedata1->administrationfees1; $subtotal1=$subtotal1+$invoicedata1->administrationfees1;?> </td></tr>
<tr height="35px"><td>5.</td><td align="right">$0.00</td></tr>
<tr height="35px"><td>6.GSTHST SUBTOTAL GST/HST TAXABLE </td><td align="right"><?php echo "$".number_format($subtotal1,2); ?></td></tr>
<tr height="35px"><td>7.TRADE-IN ALLOWANCE</td><td align="right"><?php echo "$".$invoicedata1->tradeinallowance1; $subtotal1=$subtotal1 - $invoicedata1->tradeinallowance1;?></td></tr>
<tr height="35px"><td>8.NET DIFFERENCE</td><td align="right"><?php echo "$".number_format($subtotal1,2); ?></td></tr>
<tr height="35px"><td>9.PST ON NET DIFFERENCE</td><td align="right">$0.00<?php ?></td></tr>
<tr height="35px"><td>10.GST/HST ON SUBTOTAL</td><td align="right">$0.00<?php ?></td></tr>
<tr height="35px"><td>11.GST/HST ON NET DIFFERRENCE</td><td align="right">$0.00<?php ?></td></tr>
<tr height="35px"><td>12.LICENCE FEES</td><td align="right"><?php echo "$".$invoicedata1->licencefees1;$subtotal1=$subtotal1+$invoicedata1->licencefees1;?></td></tr>
<tr height="35px"><td>13.GASOLINE</td><td align="right"><?php echo "$".$invoicedata1->gasoline1; $subtotal1=$subtotal1+$invoicedata1->gasoline1;?></td></tr>
<tr height="35px"><td>14.PAYOUT LEIN ON TRADE-IN </td><td align="right"><?php echo "$".$invoicedata1->payoutlienontradein1; $subtotal1=$subtotal1+$invoicedata1->payoutlienontradein1;?></td></tr>
<tr height="35px"><td>15.GST/HST PAYABLE ON TRADE-IN </td><td align="right"><?php echo "$".$invoicedata1->gsthstpayableontradein1;$subtotal1=$subtotal1+$invoicedata1->gsthstpayableontradein1;?></td></tr>
<tr height="35px"><td>16.BALANCE DUE </td><td align="right"><?php echo "$" .number_format($subtotal1,2); ?></td></tr>
<tr height="35px"><td>17.DEPOSIT MADE BY :
<?php 
if ($invoicedata1->depositmadeby1=='Cash')
{	
echo "<div class='checkbox'><label><input  name='depositmadeby' readonly checked type='checkbox'>&nbsp;".$invoicedata1->depositmadeby1.
"<br><input name='depositmadeby' readonly  type='checkbox'>&nbsp;&nbsp;Cheque
<br>input name='depositmadeby' readonly  type='checkbox'>&nbsp;&nbsp;Credit Card"; 
}

if ($invoicedata1->depositmadeby1=='Cheque')
{	
echo "<div class='checkbox'><label><input  name='depositmadeby' readonly type='checkbox'>&nbsp;Cash
<br><input name='depositmadeby' readonly  type='checkbox' checked>&nbsp;&nbsp;".$invoicedata1->depositmadeby1."
<br><input name='depositmadeby' readonly  type='checkbox'>&nbsp;&nbsp;Credit Card"; 
}

if ($invoicedata1->depositmadeby1=='Credit Card')
{	
echo "<div class='checkbox'><label><input  name='depositmadeby' readonly type='checkbox'>&nbsp;Cash&nbsp;&nbsp;&nbsp;&nbsp;
<br><input name='depositmadeby' readonly  type='checkbox'>&nbsp;&nbsp;Cheque&nbsp;&nbsp;&nbsp;&nbsp;
<br><input name='depositmadeby' readonly  checked type='checkbox'>&nbsp;&nbsp;".$invoicedata1->depositmadeby1; 
}
?>
</label></div>
</td><td align="right"><?php echo "$".$invoicedata1->depositamount1; $subtotal1=$subtotal1-$invoicedata1->depositamount1; ?></td></tr>
<tr height="35px"><td>18.PAYABLE ON DELIVERY(CERTIFIED FUNDS ONLY)</td><td align="right"><?php echo "$".$invoicedata1->amountpayableondelivery1; $subtotal1=$subtotal1-$invoicedata1->amountpayableondelivery1;?></td></tr>
<tr height="35px"><td>19.INSURANCE :
<?php 
if ($invoicedata1->insurance1=='Life')
{	
echo "<div class='checkbox'><label><input  name='insuranceamount' readonly checked type='checkbox'>&nbsp;".$invoicedata1->insurance1.
"<br>
<input name='insuranceamount' readonly  type='checkbox'>Accident&nbsp;&nbsp;<br>
<input name='insuranceamount' readonly  type='checkbox'>&nbsp;Loss of Inc"; 
}

if ($invoicedata1->insurance1=='Accident')
{	
echo "<div class='checkbox'><label><input  name='insuranceamount' readonly type='checkbox'>&nbsp;Life
<br><input name='insuranceamount' readonly  type='checkbox' checked>&nbsp;".$invoicedata1->insurance1."&nbsp;
<br><input name='insuranceamount' readonly  type='checkbox'>&nbsp;&nbsp;Loss of Inc"; 
}

if ($invoicedata1->insurance1=='Loss of Inc.')
{	
echo "<div class='checkbox'><label><input  name='insuranceamount' readonly type='checkbox'>&nbsp;Life&nbsp;&nbsp;
<br><input name='insuranceamount' readonly  type='checkbox'>Accidentnbsp;
<br><input name='insuranceamount' readonly  checked type='checkbox'>&nbsp;&nbsp;".$invoicedata1->insurance1; 
}
?>
</label></div>
</td>
<td align="right">
<?php
if ($invoicedata1->insuranceamount1!="")
{
echo "$".number_format($invoicedata1->insuranceamount1,2);	
}
else
{
echo "$0.00";	
}	

?>


</tr>
</tr>



<tr height="35px"><td>20.PST ON INSURANCE</td><td align="right"><?php echo "$".$invoicedata1->pstoninsurance1;$subtotal1=$subtotal1+$invoicedata1->pstoninsurance1; ?></td></tr>
<tr height="35px"><td>21.LIEN ON REGISTRATION </td><td align="right"><?php echo "$".$invoicedata1->lienregistrationfees1;$subtotal1=$subtotal1+$invoicedata1->lienregistrationfees1; ?></td></tr>
<tr height="35px"><td>22.BALANCE FINANCED SUBJECTED TO APPROVAL</td><td align="right"><?php echo "$".$invoicedata1->balancefinanced1;?></td></tr>
<tr height="35px"><td>23.NET AMOUNT TO BE FINALISED</td><td align="right"><?php echo "$".$invoicedata1->netamounttobefinanced1;?></td></tr>
<tr height="35px"><td>24.COST OF BORROWING %</td><td align="right"><?php echo "$".$invoicedata1->costofborrowing1;$subtotal1=$subtotal1+$invoicedata1->costofborrowing1;?></td></tr>
<tr height="35px"><td >25.TOTAL BALANCE DUE</td><td class="warning" align="right"><?php echo "$".number_format($subtotal1,2);?> </td></tr>
</table>
<?php
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
?>
<table class="table" class="table" id="signatures" border="1" width="100%" height="120%;">
<tr><td class="info">Authorization </td></tr>
<tr><td>
Purchasers' Signature:______________</td></tr>
<tr><td>
Consignor's Name:________________</td></tr>
<tr><td>
Consignor's Signature:______________</td></tr>
</table>


</div>


</div>

</div>	

</div><!---end of panel body for pagethree---->
</div><!----end of panel---->
</div>
</div>
</body>
</html>

<?php
}
else 
{
echo "you need to login to see this page";		
}
?>