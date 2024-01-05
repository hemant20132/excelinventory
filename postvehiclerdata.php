<?php
session_start();
include("classes/db.php");
$db1=new dbclass();
$db1->connect();

if (isset($_POST['savebutton']))
{
	$vehicleyear1=$_REQUEST['vehicleyear'];
	$vehiclemake1=$_REQUEST['vehiclemake'];
	$vehiclemodel1=$_REQUEST['vehiclemodel'];
	$vehicletrimlevel1=$_REQUEST['vehicletrimlevel'];
	$vehiclecolor1=$_REQUEST['vehiclecolor'];
	$vehiclestock1=$_REQUEST['vehiclestock'];
	$vehicleVIN1=$_REQUEST['vehiclevin'];
	$distancetravelled1=$_REQUEST['distancetravelled'];
	$vehicledistanceunknown1=$_REQUEST['vehicledistanceunknown'];
	$vehicleleinifany1=$_REQUEST['vehicleleinifany'];
	$gsthstnonregistrant1=$_REQUEST['gsthstnonregistrant'];
	$gsthstregistrationno1=$_REQUEST['gsthstregistrationno'];
	$vehiclegsthstpayable1=$_REQUEST['vehiclegsthstpayable'];
	$warrantyinservicedt1=date('Y-m-d',strtotime($_REQUEST['warrantyinservicedt']));
	$vehicledeliverydate1=date('Y-m-d',strtotime($_REQUEST['vehicledeliverydate']));
	$vehicledetailsofdelivery1=$_REQUEST['vehicledetailsofdelivery'];
	$vehicleMTObrand1=$_REQUEST['vehicleMTObrand'];
	$vehicledailyrental1=$_REQUEST['vehicledailyrental'];

	include("classes/vehicledataclass.php");
	$vehicledata1=new vehicledataclass();

	$vehicledata1->insertdata($vehicleyear1,$vehiclemake1,$vehiclemodel1,$vehicletrimlevel1,$vehiclecolor1,$vehiclestock1,$vehicleVIN1,$distancetravelled1,$vehicledistanceunknown1,$vehicleleinifany1,$gsthstnonregistrant1,$gsthstregistrationno1,$vehiclegsthstpayable1,$warrantyinservicedt1,$vehicledeliverydate1,$vehicledetailsofdelivery1,$vehicleMTObrand1,$vehicledailyrental1);
	
	if ($vehicledata1->message2=="success")
	{
	header("location:dataentryvehicle.php?message2=".$vehicledata1->message2);		
	}
	
	if ($vehicledata1->message2=="nosuccess")
	{
	header("location:dataentryvehicle.php?message2=".$purchasedata1->message2);
	}
	
}
?>





