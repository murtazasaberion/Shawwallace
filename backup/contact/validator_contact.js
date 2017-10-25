function Run() 
{
string = /^[\s]+$/
string2 = /^[a-zA-Z0-9-.''\s]+$/
string3 = /0-9/
string4= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/
	if (document.forms[0].name.value=="") 
	
	{
		alert("Please Enter Your Name.!")
		document.forms[0].name.focus();
		return false;
	}
	if (document.forms[0].address.value=="") 
	
	{
		alert("Please Enter Your Address.!")
		document.forms[0].address.focus();
		return false;
	}
	if (document.forms[0].country.selectedIndex==0) 
	{
		alert("Please Select Your Country From the List.!");
		document.forms[0].country.focus();
		return false;
}
	if (document.forms[0].telephone.value=="") 
	{
		alert("Please enter your Telephone Numbers");
		document.forms[0].telephone.focus();
		return false;
	} 
str=document.forms[0].email.value
	if (str=="")
	{
		alert("Please enter your Email Address.");
		document.forms[0].email.focus();
		return false;
	} 
	if (!str.match(string4)) 
	{
		alert("Invalid E-Mail ID entered.\nPlease check your Syntax.\n\nExample: someone@somewhere.com")
		document.forms[0].email.focus();
		return false;
	}	
}