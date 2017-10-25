function run() 
{
string1= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/

	if (document.form1.name.value=="") 
	{
		alert("Please Enter Your Name.!")
		document.form1.name.focus();
		return false
	}
	if (document.form1.email.value=="")
	{
		alert("Please enter your Email Address.!");
		document.form1.email.focus();
		return false;
	} 
	if (!document.form1.email.value.match(string1)) 
	{
		alert("Invalid E-mail Address.!")
		document.form1.email.focus();
		return false;
	}
	if (document.form1.address.value=="") 
	
	{
		alert("Please Enter Your Address.!")
		document.form1.address.focus();
		return false
	}

	if (document.form1.pos.selectedIndex==0) 
	{
		alert("Please Select Position From the List.!");
		document.form1.pos.focus();
		return false
	}
	
{

var fup = document.getElementById('upload_file');

var fileName = fup.value;

var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

if (fup.value==null||fup.value=="")
    {
    alert("Please upload a file!");
	fup.focus();
	return false;
    }
else if(ext == "DOC" || ext == "doc" || ext == "DOCX" || ext == "docx" || ext == "pdf")

{

return true;

}

else 

{
alert("Only doc, docx or pdf files are accepted for upload");
fup.focus();
return false;
}
}
	
}


d