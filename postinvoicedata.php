<?php
session_start();
ob_start();
include("classes/db.php");
$db1=new dbclass();
$db1->connect();

if (isset($_POST['savebutton']))
{
	$invoiceno1=$_REQUEST['invoiceno'];
	$invoicedate1=date('Y-m-d',strtotime($_REQUEST['invoicedate']));
	$selectcustomer1=$_REQUEST['selectcustomer'];
	$selectvehicle1=$_REQUEST['selectvehicle'];
	$nameofinsurancepolicy1=$_REQUEST['nameofinsurancepolicy'];
	$insurancepolicyno1=$_REQUEST['insurancepolicyno'];
	$expirydate1=date('Y-m-d',strtotime($_REQUEST['expirydate']));	
	$insuranceagent1=$_REQUEST['insuranceagent'];
	$phoneno1=$_REQUEST['phoneno'];
	$isdealerguaranty1=$_REQUEST['isdealerguaranty'];
	$dealerguarantydescription1=$_REQUEST['dealerguarantydescription'];
	$comments1=mysqli_real_escape_string($db1->conn,$_REQUEST['comments']);
	
	$isthirdpartywarranty1=$_REQUEST['isthirdpartywarranty'];
	$retailpriceifincludedinsellingprice1=floatval($_REQUEST['retailpriceifincludedinsellingprice']);
	$company1=$_REQUEST['thirdpartywarrantycompany'];
	$thirdpartywarrantydescription1=$_REQUEST['thirdpartywarrantydescription'];
	$sellingprice1=floatval($_REQUEST['sellingprice']);	
	$administrationfees1=floatval($_REQUEST['administrationfees']);	
	$tradeinallowance1=floatval($_REQUEST['tradeinallowance']);
	$licencefees1=floatval($_REQUEST['licencefees']);
	$gasoline1=floatval($_REQUEST['gasoline']);
	$payoutlienontradein1=floatval($_REQUEST['payoutlienontradein']);
	$gsthstpayableontradein1=floatval($_REQUEST['gsthstpayableontradein']);
	$depositmadeby1=$_REQUEST['deposit'];
	$depositamount1=floatval($_REQUEST['depositamount']);
	$amountpayableondelivery1=floatval($_REQUEST['amountpayableondelivery']);
	$insurance1=$_REQUEST['insurance'];
	$insuranceamount1=floatval($_REQUEST['insuranceamount']);
	$pstoninsurance1=floatval($_REQUEST['pstoninsurance']);
	$lienregistrationfees1=floatval($_REQUEST['lienregistrationfees']);
	$balancefinanced1=floatval($_REQUEST['balancefinanced']);
	$netamounttobefinanced1=floatval($_REQUEST['netamounttobefinanced']);
	$costofborrowing1=floatval($_REQUEST['costofborrowing']);

	$amountofpayments1=floatval($_REQUEST['amountofpayments']);
	$noofpayments1=intval($_REQUEST['noofpayments']);
	$paymentstartson1=date('Y-m-d',strtotime($_REQUEST['paymentstartson']));
	$creditapproval1=$_REQUEST['creditapproval'];	
	$dealerreceiveincentive1=$_REQUEST['dealerreceiveincentive'];
	$nondisclosurestatementdetails1=$_REQUEST['nondisclosurestatementdetails'];
	$canadianmotorvehiclearbplan1=$_REQUEST['canadianmotorvehiclearbplan'];
	$salespersonname1=$_REQUEST['salespersonsname'];
	$salespersonsregistrationno1=$_REQUEST['salespersonsregistrationno'];
	$dealersregistrationno1=$_REQUEST['dealersregistrationno'];
	$dealersnameofofficial1=$_REQUEST['dealersnameofofficial'];	
	$acceptorsregistrationno1=$_REQUEST['acceptorsregistrationno'];
	$acceptorstitle1=$_REQUEST['acceptorstitle'];
	$accepteddate1=date('Y-m-d',strtotime($_REQUEST['accepteddate']));	
	$conn1=$db1->conn;
	
	include("classes/invoicedataclass.php");
	$invoicedata1=new invoicedataclass();
	$invoicedata1->insertdata($invoiceno1,$invoicedate1,$selectcustomer1,$selectvehicle1,$nameofinsurancepolicy1,$insurancepolicyno1,$expirydate1,$insuranceagent1,$phoneno1,$isdealerguaranty1,$dealerguarantydescription1,$comments1,$isthirdpartywarranty1,$retailpriceifincludedinsellingprice1,$company1,$thirdpartywarrantydescription1,$sellingprice1,$administrationfees1,$tradeinallowance1,$licencefees1,$gasoline1,$payoutlienontradein1,$gsthstpayableontradein1,$depositmadeby1,$depositamount1,$amountpayableondelivery1,$insurance1,$insuranceamount1,$pstoninsurance1,$lienregistrationfees1,$balancefinanced1,$netamounttobefinanced1,$costofborrowing1,$amountofpayments1,$noofpayments1,$paymentstartson1,$creditapproval1,$dealerreceiveincentive1,$nondisclosurestatementdetails1,$canadianmotorvehiclearbplan1,$salespersonname1,$salespersonsregistrationno1,$dealersregistrationno1,$dealersnameofofficial1,$acceptorsregistrationno1,$acceptorstitle1,$accepteddate1,$conn1);	
	
	if ($invoicedata1->message3=="success")
	{
	header("location:dataentryinvoice.php?message3=".$invoicedata1->message3);		
	}
	
	if ($invoicedata1->message3=="nosuccess")
	{
	header("location:dataentryinvoice.php?message3=".$invoicedata1->message3);
	}
	
}
?>





