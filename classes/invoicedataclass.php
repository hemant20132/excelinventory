<?php
class invoicedataclass
{
var $invoiceno1;
var $invoiceno2;
var $invoicedate1;
var $selectcustomer1;
var $selectvehicle1;
var $nameofinsurancepolicy1;
var $insurancepolicyno1;
var $expirydate1;
var $insuranceagent1;
var $phoneno1;
var $isdealerguaranty1;
var $dealerguarantydescription1;
var $isthirdpartywarranty1;
var $retailpriceifincludedinsellingprice1;
var $company1;
var $thirdpartywarrantydescription1;
var $sellingprice1;
var $administrationfees1;
var $tradeinallowance1;
var $licencefees1;
var $gasoline1;
var $payoutlienontradein1;
var $gsthstpayableontradein1;
var $depositmadeby1;
var $depositamount1;
var $amountpayableondelivery1;
var $insurance1;
var $insuranceamount1;
var $pstoninsurance1;
var $lienregistrationfees1;
var $balancefinanced1;
var $netamounttobefinanced1;
var $costofborrowing1;
var $amountofpayments1;
var $noofpayments1;
var $paymentstartson1;
var $creditapproval1;
var $dealerreceiveincentive1;
var $nondisclosurestatementdetails1;
var $canadianmotorvehiclearbplan1;
var $salespersonname1;
var $salespersonsregistrationno1;
var $dealersregistrationno1;
var $dealersnameofofficial1;
var $acceptorsregistrationno1;
var $acceptorstitle1;
var $accepteddate1;
var $message3;
var $invoicenumberoption;
var $conn;

function insertdata($invoiceno1,$invoicedate1,$selectcustomer1,$selectvehicle1,$nameofinsurancepolicy1,$insurancepolicyno1,$expirydate1,$insuranceagent1,$phoneno1,$isdealerguaranty1,$dealerguarantydescription1,$comments1,$isthirdpartywarranty1,$retailpriceifincludedinsellingprice1,$company1,$thirdpartywarrantydescription1,$sellingprice1,$administrationfees1,$tradeinallowance1,$licencefees1,$gasoline1,$payoutlienontradein1,$gsthstpayableontradein1,$depositmadeby1,$depositamount1,$amountpayableondelivery1,$insurance1,$insuranceamount1,$pstoninsurance1,$lienregistrationfees1,$balancefinanced1,$netamounttobefinanced1,$costofborrowing1,$amountofpayments1,$noofpayments1,$paymentstartson1,$creditapproval1,$dealerreceiveincentive1,$nondisclosurestatementdetails1,$canadianmotorvehiclearbplan1,$salespersonname1,$salespersonsregistrationno1,$dealersregistrationno1,$dealersnameofofficial1,$acceptorsregistrationno1,$acceptorstitle1,$accepteddate1,$conn1)	
{
$this->conn=$conn1;
$this->invoiceno=$invoiceno1;
$this->invoicedate=$invoicedate1;
$this->selectcustomer=$selectcustomer1;
$this->selectvehicle=$selectvehicle1;
$this->nameofinsurancepolicy=$nameofinsurancepolicy1;
$this->insurancepolicyno=$insurancepolicyno1;
$this->expirydate=$expirydate1;
$this->insuranceagent=$insuranceagent1;
$this->phoneno=$phoneno1;
$this->isdealerguaranty=$isdealerguaranty1;
$this->dealerguarantydescription=$dealerguarantydescription1;
$this->comments=$comments1;
$this->isthirdpartywarranty=$isthirdpartywarranty1;
$this->retailpriceifincludedinsellingprice=$retailpriceifincludedinsellingprice1;
$this->company=$company1;
$this->thirdpartywarrantydescription=$thirdpartywarrantydescription1;
$this->sellingprice=$sellingprice1;
$this->administrationfees=$administrationfees1;
$this->tradeinallowance=$tradeinallowance1;
$this->licencefees=$licencefees1;
$this->gasoline=$gasoline1;
$this->payoutlienontradein=$payoutlienontradein1;
$this->gsthstpayableontradein=$gsthstpayableontradein1;
$this->depositmadeby=$depositmadeby1;
$this->depositamount=$depositamount1;
$this->amountpayableondelivery=$amountpayableondelivery1;
$this->insurance=$insurance1;
$this->insuranceamount=$insuranceamount1;
$this->pstoninsurance=$pstoninsurance1;
$this->lienregistrationfees=$lienregistrationfees1;
$this->balancefinanced=$balancefinanced1;
$this->netamounttobefinanced=$netamounttobefinanced1;
$this->costofborrowing=$costofborrowing1;
$this->amountofpayments=$amountofpayments1;
$this->noofpayments=$noofpayments1;
$this->paymentstartson=$paymentstartson1;
$this->creditapproval=$creditapproval1;
$this->dealerreceiveincentive=$dealerreceiveincentive1;
$this->nondisclosurestatementdetails=$nondisclosurestatementdetails1;
$this->canadianmotorvehiclearbplan=$canadianmotorvehiclearbplan1;
$this->salespersonname=$salespersonname1;
$this->salespersonsregistrationno=$salespersonsregistrationno1;
$this->dealersregistrationno=$dealersregistrationno1;
$this->dealersnameofofficial=$dealersnameofofficial1;
$this->acceptorsregistrationno=$acceptorsregistrationno1;
$this->acceptorstitle=$acceptorstitle1;
$this->accepteddate=$accepteddate1;

$queryinsert="INSERT INTO invoicedata (invoice_date, customer_name,vehicle_name,insurance_policy_name,insurance_policy_no,policy_expiry_date,insurance_agent,phone_no,
isdealers_guarantee,dealers_guarantee_description,comments,isthirdparty_warranty,retail_price_if_included_in_selling_price,thirdpartywarranty_company,thirdpartywarranty_description,
selling_price,administration_fees,trade_in_allowance,licence_fees,gasoline,payoutlein_ontradein,gsthst_payable_ontradein,deposit_made_by,deposit_amount,payable_on_delivery,
typeofinsurance,insurance_amount,pst_on_insurance,lein_registration_fees,balance_financed,net_amount_tobe_financed,cost_of_borrowing,
amount_of_payments,no_of_payments,payment_starts_on,credit_approval,issales_person_incentive,isnondisclosure_statement,iscamvap,sales_person_name,registration_no,
dealer_registration_no, dealers_officials_name,acceptors_registration_no,acceptors_title,acceptor_date)
VALUES ('".$this->invoicedate."','".$this->selectcustomer."','".$this->selectvehicle."','".$this->nameofinsurancepolicy."','".$this->insurancepolicyno."','".
$this->expirydate."','".$this->insuranceagent."','".$this->phoneno."','".$this->isdealerguaranty."','".$this->dealerguarantydescription."','".$this->comments1."','".
$this->isthirdpartywarranty ."','".$this->retailpriceifincludedinsellingprice."','".$this->company."','".$this->thirdpartywarrantydescription
."',".$this->sellingprice.",".$this->administrationfees.",".$this->tradeinallowance.",".$this->licencefees.",".$this->gasoline 
.",".$this->payoutlienontradein.",".$this->gsthstpayableontradein.",'".$this->depositmadeby."',".$this->depositamount.",".$this->amountpayableondelivery.",'".
$this->insurance."',".$this->insuranceamount.",".$this->pstoninsurance.",".$this->lienregistrationfees.",".$this->balancefinanced.",".$this->netamounttobefinanced
.",".$this->costofborrowing.",".$this->amountofpayments.",".$this->noofpayments.",'".$this->paymentstartson."','".$this->creditapproval."','".$this->dealerreceiveincentive
."','".$this->nondisclosurestatementdetails."','".$this->canadianmotorvehiclearbplan."','".$this->salespersonname."','".$this->salespersonsregistrationno
."','".$this->dealersregistrationno."','".$this->dealersnameofofficial."','".$this->acceptorsregistrationno."','".$this->acceptorstitle.
"','".$this->accepteddate. "')";

if (mysqli_query($this->conn,$queryinsert))
{
$this->message3="success";
return $this->message3;
}
else
{
$this->message3="nosuccess";
return $this->message3;
}	
}

function displayinvoicemaxno($conn1)
{
	$this->conn=$conn1;
	$queryautoselect="SHOW TABLE STATUS LIKE 'invoicedata'";
	$row=mysqli_query($this->conn,$queryautoselect);
	$info=mysqli_fetch_array($row,MYSQLI_ASSOC);
	$this->autonumber=$info['Auto_increment'];
	return $this->autonumber;
}

function displayinvoice($invoiceno,$conn1)
{
$this->invoiceno2=$invoiceno;	
$queryselect="select * from invoicedata where invoice_no=".$this->invoiceno2;
$this->conn=$conn1;
$row=mysqli_query($this->conn,$queryselect);
$info=mysqli_fetch_array($row,MYSQLI_ASSOC);

if ($info['invoice_no']==$this->invoiceno2)
{	
$this->invoicedate1=$info['invoice_date'];
$this->selectcustomer1=$info['customer_name'];
$this->selectvehicle1=$info['vehicle_name'];
$this->nameofinsurancepolicy1=$info['insurance_policy_name'];
$this->insurancepolicyno1=$info['insurance_policy_no'];
$this->expirydate1=$info['policy_expiry_date'];
$this->insuranceagent1=$info['insurance_agent'];
$this->phoneno1=$info['phone_no'];

$this->isdealerguaranty1=$info['isdealers_guarantee'];

$this->dealerguarantydescription1=$info['dealers_guarantee_description'];
$this->isthirdpartywarranty1=$info['isthirdparty_warranty'];
$this->retailpriceifincludedinsellingprice1=$info['retail_price_if_included_in_selling_price'];
$this->company1=$info['thirdpartywarranty_company'];
$this->thirdpartywarrantydescription1=$info['thirdpartywarranty_description'];
$this->sellingprice1=$info['selling_price'];
$this->administrationfees1=$info['administration_fees'];
$this->tradeinallowance1=$info['trade_in_allowance'];
$this->licencefees1=$info['licence_fees'];
$this->gasoline1=$info['gasoline'];
$this->payoutlienontradein1=$info['payoutlein_ontradein'];
$this->gsthstpayableontradein1=$info['gsthst_payable_ontradein'];
$this->depositmadeby1=$info['deposit_made_by'];
$this->depositamount1=$info['deposit_amount'];
$this->amountpayableondelivery1=$info['deposit_amount'];
$this->insurance1=$info['typeofinsurance'];
$this->insuranceamount1=$info['insurance_amount'];
$this->pstoninsurance1=$info['pst_on_insurance'];
$this->lienregistrationfees1=$info['lein_registration_fees'];
$this->balancefinanced1=$info['balance_financed'];
$this->netamounttobefinanced1=$info['net_amount_tobe_financed'];
$this->costofborrowing1=$info['cost_of_borrowing'];
$this->amountofpayments1=$info['amount_of_payments'];
$this->noofpayments1=$info['no_of_payments'];
$this->paymentstartson1=$info['payment_starts_on'];
$this->creditapproval1=$info['credit_approval'];
$this->dealerreceiveincentive1=$info['issales_person_incentive'];
$this->nondisclosurestatementdetails1=$info['isnondisclosure_statement'];
$this->canadianmotorvehiclearbplan1=$info['iscamvap'];
$this->salespersonname1=$info['sales_person_name'];
$this->salespersonsregistrationno1=$info['registration_no'];
$this->dealersregistrationno1=$info['dealer_registration_no'];
$this->dealersnameofofficial1=$info['dealers_officials_name'];
$this->acceptorsregistrationno1=$info['acceptors_registration_no'];
$this->acceptorstitle1=$info['acceptors_title'];
$this->accepteddate1=$info['acceptor_date'];
return $this->invoicedate1;
return $this->selectcustomer1;
return $this->selectvehicle1;
return $this->nameofinsurancepolicy1;
return $this->insurancepolicyno1;
return $this->expirydate1;
return $this->insuranceagent1;
return $this->phoneno1;
return $this->isdealerguaranty1;
return $this->dealerguarantydescription1;
return $this->isthirdpartywarranty1;
return $this->retailpriceifincludedinsellingprice1;
return $this->company1;
return $this->thirdpartywarrantydescription1;
return $this->sellingprice1;
return $this->administrationfees1;
return $this->tradeinallowance1;
return $this->licencefees1;
return $this->gasoline1;
return $this->payoutlienontradein1;
return $this->gsthstpayableontradein1;
return $this->depositmadeby1;
return $this->depositamount1;
return $this->amountpayableondelivery1;
return $this->insurance1;
return $this->insuranceamount1;
return $this->pstoninsurance1;
return $this->lienregistrationfees1;
return $this->balancefinanced1;
return $this->netamounttobefinanced1;
return $this->costofborrowing1;
return $this->amountofpayments1;
return $this->noofpayments1;
return $this->paymentstartson1;
return $this->creditapproval1;
return $this->dealerreceiveincentive1;
return $this->nondisclosurestatementdetails1;
return $this->canadianmotorvehiclearbplan1;
return $this->salespersonname1;
return $this->salespersonsregistrationno1;
return $this->dealersregistrationno1;
return $this->dealersnameofofficial1;
return $this->acceptorsregistrationno1;
return $this->acceptorstitle1;
return $this->accepteddate1;
}
else
{
$this->message3="Invoice Number not found!!!";
return $this->message3;
}	
}

function optionvalue($conn1)
{
$this->conn=$conn1;	
$queryinvoicenumber="select invoice_no from invoicedata";
$row=mysqli_query($this->conn,$queryinvoicenumber);
$this->invoicenumberoption="<option>";
while($info = mysqli_fetch_assoc($row))
for ($i=0;$i<=$info.length;$i++)
{	
if ($info['invoice_no']<>"")
{	
$this->invoicenumberoption=$this->invoicenumberoption.$info['invoice_no']."</option><option>";	
}
}
return $this->invoicenumberoption;
}



}
?>