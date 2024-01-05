<?php
class vehicledataclass
{
var $vehicleyear;
var	$vehiclemake;
var	$vehiclemodel;
var	$vehicletrimlevel;
var	$vehiclecolor;
var	$vehiclestock;
var	$vehicleVIN;
var	$distancetravelled;
var	$vehicledistanceunknown;
var	$vehicleleinifany;
var	$gsthstnonregistrant;
var	$gsthstregistrationno;
var	$vehiclegsthstpayable;
var	$warrantyinservicedt;
var	$vehicledeliverydate;
var	$vehicledetailsofdelivery;
var $isvehicledeliveredwithstandardsafetycert;
var $standardsafetycertdetails;
var	$vehicleMTObrand;
var	$vehicledailyrental;
var $message2;
var $vehiclenameoptionl;
var $vehiclename;
var $conn;

function insertdata($vehicleyear1,$vehiclemake1,$vehiclemodel1,$vehicletrimlevel1,$vehiclecolor1,$vehiclestock1,$vehicleVIN1,$distancetravelled1,$vehicledistanceunknown1,$vehicleleinifany1,$gsthstnonregistrant1,$gsthstregistrationno1,$vehiclegsthstpayable1,$warrantyinservicedt1,$vehicledeliverydate1,$vehicledetailsofdelivery1,$isvehicledeliveredwithstandardsafetycert1,$standardsafetycertdetails1,$vehicleMTObrand1,$vehicledailyrental1,$conn1)
{
$this->conn=$conn1;	
$this->vehicleyear=$vehicleyear1;
$this->vehiclemake=$vehiclemake1;
$this->vehiclemodel=$vehiclemodel1;
$this->vehicletrimlevel=$vehicletrimlevel1;
$this->vehiclecolor=$vehiclecolor1;
$this->vehiclestock=$vehiclestock1;
$this->vehicleVIN=$vehicleVIN1;
$this->distancetravelled=$distancetravelled1;
$this->vehicledistanceunknown=$vehicledistanceunknown1;
$this->vehicleleinifany=$vehicleleinifany1;
$this->gsthstnonregistrant=$gsthstnonregistrant1;
$this->gsthstregistrationno=$gsthstregistrationno1;
$this->vehiclegsthstpayable=$vehiclegsthstpayable1;
$this->warrantyinservicedt=$warrantyinservicedt1;
$this->vehicledeliverydate=$vehicledeliverydate1;
$this->vehicledetailsofdelivery=$vehicledetailsofdelivery1;
$this->isvehicledeliveredwithstandardsafetycert=$isvehicledeliveredwithstandardsafetycert1;
$this->standardsafetycertdetails=$standardsafetycertdetails1;
$this->vehicleMTObrand=$vehicleMTObrand1;
$this->vehicledailyrental=$vehicledailyrental1;

$queryinsert= "INSERT INTO vehicledata (vehicle_Year, vehicle_Make, vehicle_Model, vehicle_trim_level, vehicle_color, vehicle_stock, 
vehicle_VIN, vehicle_distance_travelled, vehicle_distance_unknown, vehicle_lein_against, vehicle_gsthst_nonregistrant, 
vehicle_gsthst_registration_no, vehicle_gsthst_payable_amount, vehicle_manufacturers_warranty_in_service_date, vehicle_delivery_date, 
vehicle_details_of_delivery, isvehicledeliveredwithstandardsafetycert, standardsafetycertdetails,vehicle_MTO_Brand, vehicle_daily_rental) 
VALUES ('". $this->vehicleyear."','".$this->vehiclemake."','".$this->vehiclemodel."','".$this->vehicletrimlevel."','".$this->vehiclecolor."','".$this->vehiclestock."','".$this->vehicleVIN."','".$this->distancetravelled."','".$this->vehicledistanceunknown."','".$this->vehicleleinifany."','".$this->gsthstnonregistrant."','".$this->gsthstregistrationno."','".$this->vehiclegsthstpayable."','".$this->warrantyinservicedt."','".$this->vehicledeliverydate."','".$this->vehicledetailsofdelivery."','".$this->isvehicledeliveredwithstandardsafetycert."','".$this->standardsafetycertdetails."','".$this->vehicleMTObrand ."','".$this->vehicledailyrental."')";


if (mysqli_query($this->conn,$queryinsert))
{
$this->message2="success";
return $this->message2;
}
else
{
$this->message2="nosuccess";
return $this->message2;
}	
}

function optionvalue($conn1)
{
$this->conn=$conn1;	
$queryvehiclename="select vehicle_Model from vehicledata";
$row=mysqli_query($this->conn,$queryvehiclename);
$this->vehiclenameoption="<option>";
while($info = mysqli_fetch_assoc($row))
for ($i=0;$i<=$info.length;$i++)
{	
$this->vehiclenameoption=$this->vehiclenameoption.$info['vehicle_Model']."</option><option>";	
}
return $this->vehiclenameoption;
}


function displayvehicle($vehicle,$conn1)
{
$this->conn=$conn1;	
$this->vehiclename=$vehicle;	
$queryvehicle="select * from vehicledata where vehicle_Model='". $this->vehiclename ."'";
$row=mysqli_query($conn1,$queryvehicle);
$info=mysqli_fetch_array($row,MYSQLI_ASSOC);

$this->vehicleyear=$info['vehicle_Year'];
$this->vehiclemake=$info['vehicle_Make'];
$this->vehiclemodel=$info['vehicle_Model'];
$this->vehicletrimlevel=$info['vehicle_trim_level'];
$this->vehiclecolor=$info['vehicle_color'];
$this->vehiclestock=$info['vehicle_stock'];
$this->vehicleVIN=$info['vehicle_VIN'];
$this->vehicledistancetravelled=$info['vehicle_distance_travelled'];
$this->vehicledistanceunknown=$info['vehicle_distance_unknown'];
$this->vehicleleinifany=$info['vehicle_lein_against'];
$this->gsthstnonregistrant=$info['vehicle_gsthst_nonregistrant'];
$this->gsthstregistrationno=$info['vehicle_gsthst_registration_no'];
$this->vehiclegsthstpayable=$info['vehicle_gsthst_payable_amount'];
$this->warrantyinservicedt=$info['vehicle_manufacturers_warranty_in_service_date'];
$this->vehicledeliverydate=$info['vehicle_delivery_date'];
$this->vehicledetailsofdelivery=$info['vehicle_details_of_delivery'];
$this->isvehicledeliveredwithstandardsafetycert=$info['isvehicledeliveredwithstandardsafetycert'];
$this->standardsafetycertdetails=$info['standardsafetycertdetails'];
$this->vehicleMTObrand=$info['vehicle_MTO_Brand'];
$this->vehicledailyrental=$info['vehicle_daily_rental'];

return $this->vehicleyear;
return $this->vehiclemake;
return $this->vehiclemodel;
return $this->vehicletrimlevel;
return $this->vehiclecolor;
return $this->vehiclestock;
return $this->vehicleVIN;
return $this->vehicledistancetravelled;
return $this->vehicledistanceunknown;
return $this->vehicleleinifany;
return $this->gsthstnonregistrant;
return $this->gsthstregistrationno;
return $this->vehiclegsthstpayable;
return $this->warrantyinservicedt;
return $this->vehicledeliverydate;
return $this->vehicledetailsofdelivery;
return $this->isvehicledeliveredwithstandardsafetycert;
return $this->standardsafetycertdetails;
return $this->vehicleMTObrand;
return $this->vehicledailyrental;

	
}


}
?>