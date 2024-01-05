<?php
session_start();
ob_start();
error_reporting(E_ALL);
include("classes/db.php");
$db1=new dbclass();
$db1->connect();

if (isset($_POST['savebutton']))
{
	$conn1=$db1->conn;
	$purchasersname1=$_REQUEST['purchasersname'];
	$purchasersaddress1=$_REQUEST['purchasersaddress'];
	$purchasersaddress1=$_REQUEST['purchasersaddress'];
	$purchaserscity1=$_REQUEST['purchaserscity'];
	$purchaserstown1=$_REQUEST['purchaserstown'];
	$purchasersprovince1=$_REQUEST['purchasersprovince'];
	$purchaserspostalcode1=$_REQUEST['purchaserspostalcode'];
	$purchasershometelephoneno1=$_REQUEST['purchasershometelephoneno'];
	$purchasersbusinesstelephone1=$_REQUEST['purchasersbusinesstelephoneno'];
	$purchasersemail1=$_REQUEST['purchasersemail'];
	$purchasersdriverlicenceno1=$_REQUEST['purchasersdriverlicenseno'];
	$expirydate1=date('Y-m-d',strtotime($_REQUEST['expirydate']));
	include("classes/purchasedataclass.php");
	$purchasedata1=new purchasedataclass();
	
	$purchasedata1->insertdata($purchasersname1,$purchasersaddress1,$purchaserscity1,$purchaserstown1,$purchasersprovince1,$purchaserspostalcode1,$purchasershometelephoneno1,$purchasersbusinesstelephone1,$purchasersemail1,$purchasersdriverlicenceno1,$expirydate1,$conn1);
	
	if ($purchasedata1->message1=="success")
	{
	header("location:dataentrycustomer.php?message1=".$purchasedata1->message1);		
	}
	
	if ($purchasedata1->message1=="nosuccess")
	{
	header("location:dataentrycustomer.php?message1=".$purchasedata1->message1);
	}
}
?>





