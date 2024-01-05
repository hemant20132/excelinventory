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

	if ($("#nameofinsurancecompany").val()=="")
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

	if ($('input:radio[name=deposit]:checked').val()<>"")
	{
		if ($("#depositamount").val()=="")
		{
			$("#message3").show();
			$("#message3").val("deposit amount cannot be blank!!!");
			$("#message3").css("color","red");
			return false;
		}
	}

	if ($('input:radio[name=insurance]:checked').val()=="")
	{
		
	}

	if ($('input:radio[name=insurance]:checked').val()<>"")
	{
		if ($("#insuranceamount").val()=="")
		{
			$("#message3").show();
			$("#message3").val("Insurance amount cannot be blank!!!");
			$("#message3").css("color","red");
			return false;
		}
	}

	if ($('input:radio[name=dealerreceiveincentive]:checked').val()=="")
	{
			$("#message3").show();
			$("#message3").val("check the radio button for dealer incentive!!!");
			$("#message3").css("color","red");
			return false;
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
