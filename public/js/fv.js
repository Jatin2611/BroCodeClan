function validate()
{
   
var empt = document.forms["myForm"]["firstName"].value;

var emailID = document.forms["myForm"]["email"].value;
var dob = document.forms["myForm"]["dob"].value;

atpos = emailID.indexOf("@");
dotpos = emailID.lastIndexOf("."); 
var zip = document.forms["myForm"]["zipcode"].value;
var phone = document.forms["myForm"]["phn"].value;
if(empt == "")
{
alert("Name cannot be empty");
return false;
}

else if(atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Invalid Email Id ,Please Enter the Valid Email Id")
            document.myForm.email.focus() ;
            return false;
         }

          else if(isNaN(phone)||phone.indexOf(" ")!=-1)
           {
              alert("Enter 10 digit Mobile Number")
              return false; 
           }
           else if (phone.length>10 || phone.length<10)
           {
                alert("Please add a valid Phone number");
                return false;
           }
           else if(dob==""){
alert("Date cannot be empty");
return false;
}

else if(isNaN(zip)||zip.indexOf(" ")!=-1)
           {
              alert("Enter 6 digit Zip code");
              return false; 
           }
		   else if (zip.length>6 || zip.length<6)
           {
                alert("Enter a valid zip code");
                return false;
           }
else
{
return true;
}
}