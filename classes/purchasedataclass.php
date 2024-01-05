<?php
class purchasedataclass
{
var $purchasersname;
var	$purchasersaddress;
var	$purchaserscity;
var	$purchaserstown;
var	$purchasersprovince;
var	$purchaserspostalcode;
var	$purchasershometelephoneno;
var	$purchasersbusinesstelephone;
var	$purchasersemail;
var	$purchasersdriverlicenceno;
var $expirydate;
var $message1;
var $purchasernameoption;
var $customername;
var $conn;

function insertdata($purchasersname1,$purchasersaddress1,$purchaserscity1,$purchaserstown1,$purchasersprovince1,$purchaserspostalcode1,$purchasershometelephoneno1,$purchasersbusinesstelephone1,$purchasersemail,$purchasersdriverlicenceno1,$expirydate1,$conn1)
{
$this->purchasersname=$purchasersname1;
$this->purchasersaddress=$purchasersaddress1;
$this->purchaserscity=$purchaserscity1;
$this->purchaserstown=$purchaserstown1;
$this->purchasersprovince=$purchasersprovince1;
$this->purchaserspostalcode=$purchaserspostalcode1;
$this->purchasershometelephoneno=$purchasershometelephoneno1;
$this->purchasersbusinesstelephone=$purchasersbusinesstelephone1;
$this->purchasersemail=$purchasersemail;
$this->purchasersdriverlicenceno=$purchasersdriverlicenceno1;
$this->expirydate=$expirydate1;
$this->conn=$conn1;
$queryinsert="INSERT INTO purchaserdata (purchasers_name,purchasers_address,purchasers_city,purchasers_town,purchasers_province,purchasers_postal_code,
purchasers_home_telephone_no,purchasers_business_telephone_no,purchasers_email,purchasers_driver_licence_no,expiry_date)
VALUES ('".$this->purchasersname ."','". $this->purchasersaddress."','".$this->purchaserscity."','".$this->purchaserstown."','".$this->purchasersprovince."','".$this->purchaserspostalcode."','".$this->purchasershometelephoneno."','".$this->purchasersbusinesstelephone."','".$this->purchasersemail."','".$this->purchasersdriverlicenceno."','".$this->expirydate."')";

if (mysqli_query($this->conn,$queryinsert))
{
$this->message1="success";
return $this->message1;
}
else
{
$this->message1="nosuccess";
return $this->message1;
}	
}

function optionvalue($conn1)
{
$this->conn=$conn1;	
$querypurchasername="select purchasers_name from purchaserdata";
$row=mysqli_query($this->conn,$querypurchasername);
$this->purchasernameoption="<option>";
while($info = mysqli_fetch_assoc($row))
for ($i=0;$i<=$info.length;$i++)
{	
$this->purchasernameoption=$this->purchasernameoption.$info['purchasers_name']."</option><option>";	
}
return $this->purchasernameoption;
}


function displaypurchaser($name1,$conn1)
{
$this->conn=$conn1;
$this->customername=$name1;
$querypurchaser="select * from purchaserdata where purchasers_name='". $this->customername ."'";
$row=mysqli_query($conn1,$querypurchaser);
$info=mysqli_fetch_array($row,MYSQLI_ASSOC);

$this->purchasersaddress=$info['purchasers_address'];
$this->purchaserscity=$info['purchasers_city'];
$this->purchaserstown=$info['purchasers_town'];
$this->purchasersprovince=$info['purchasers_province'];
$this->purchaserspostalcode=$info['purchasers_postal_code'];
$this->purchasershometelephoneno=$info['purchasers_home_telephone_no'];
$this->purchasersbusinesstelephone=$info['purchasers_business_telephone_no'];
$this->purchasersemail=$info['purchasers_email'];
$this->purchasersdriverlicenceno=$info['purchasers_driver_licence_no'];
$this->expirydate=$info['expiry_date'];

return $this->purchasersaddress;
return $this->purchaserscity;
return $this->purchaserstown;
return $this->purchasersprovince;
return $this->purchaserspostalcode;
return $this->purchasershometelephoneno;
return $this->purchasersbusinesstelephone;
return $this->purchasersemail;
return $this->purchasersdriverlicenceno;
return $this->expirydate;

}	

	
}
?>