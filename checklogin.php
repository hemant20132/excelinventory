<?php
session_start();
ob_start();
include("classes/db.php");
$db1=new dbclass();
$db1->connect();
$conn1=$db1->conn;

include ("classes/loginclass.php");
$login1= new loginclass();

if (isset($_POST['loginformsubmit']))
{
$userid=$_REQUEST["username"];
echo $userid;
$password=$_REQUEST["userpassword"];
$login1->checklogin($conn1,$userid,$password);

if ($login1->message1=="success")
{
$_SESSION["username"]=$userid;
header("location:mainpage.php");
}	

if ($login1->message=="nosuccess")
{
session_destroy();
header("location:index.php?message='".$login1->message1."'");
}	

}	
?>

