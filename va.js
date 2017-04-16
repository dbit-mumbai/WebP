 function myFunction() 
{
//First Name
 	var a = document.forms["form"]["sname"];
	if(a.value=="")
		{
		 alert("First Name should not be blank.");
        	 return false;
		}
		if (! allLetter(a)) 
		{
			 alert("First Name should be all characters.");
			 return false;
		}
//Middle Name
 	var b = document.forms["form"]["mname"];
	    	if (b.value == "") 	
	    	{
			alert("Middle Name should not be blank.");
			return false;
	    	}
		if (! allLetter(b)) 
		{
			 alert("ALL CHARACTERS.");
			 return false;
		}
	
//Last Name
	var c = document.forms["form"]["lname"];
		if(c.value=="")
		{
			 alert("Last Name should not be blank.");
			return false;
		}
		if (! allLetter(c)) 
		{
			 alert("Last Name should be all characters.");
			 return false;
		}
//Father Name
 	var d = document.forms["form"]["fname"];
	if(d.value=="")
		{
		 alert("Father's Name should not be blank.");
        	 return false;
		}
		if (! allLetter(d)) 
		{
			 alert("Father's Name should be all characters.");
			 return false;
		}
//Mother Name
 	var e = document.forms["form"]["Mname"];
	if(e.value=="")
		{
		 alert("Mother's Name should not be blank.");
        	 return false;
		}
		if (! allLetter(e)) 
		{
			 alert("Mother's Name should be all characters.");
			 return false;
		}
//Stream	
	var f = document.forms["form"]["stream"]
	if (!streamselect(f)) 
	{
		 alert('Please select Stream.');
      		return false;
	}
	
//Marks	Physics
	var g = document.forms["form"]["phy"];
	if(g.value=="")
	{
		alert("Fill in Physics Marks?");
        return false;
	}
	if(!allnumeric(g))
	{
		alert("Marks in Numbers Only!");
		return false;
	}
 //Marks Chemistry
	var h = document.forms["form"]["ch"];
	if(h.value=="")
	{
		alert("Fill in Chemistry Marks?");
        return false;
	}
	if(!allnumeric(h))
	{
		alert("Marks in Numbers Only!");
		return false;
	}
 //Marks Maths
	var i = document.forms["form"]["math"];
	if(i.value=="")
	{
		alert("Fill in Maths Marks?");
        return false;
	}
	if(!allnumeric(i))
	{
		alert("Marks in Numbers Only!");
		return false;
	}
 //Marks English
	var j = document.forms["form"]["eng"];
	if(j.value=="")
	{
		alert("Fill in English Marks?");
        return false;
	}
	if(!allnumeric(j))
	{
		alert("Marks in Numbers Only!");
		return false;
	}
 }

 function allnumeric(inputtxt)
 {
    var no = /^[0-9]+$/;
    if(inputtxt.value.match(no))
    {
        return true;
    }
    else
    {
      	return false;
    }
}
               
function allLetter(inputtxt)
{
    var letters = /^[A-Za-z]+$/;
    if(inputtxt.value.match(letters))
    {
        return true;
    }
    else
    {
    	return false;
    }
}			
function streamselect(stream)
{
	if(stream.value=="St")
	{
		return false;
	}
	else
	{
		return true;
	}
}