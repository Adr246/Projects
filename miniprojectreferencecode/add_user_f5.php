<html>
<head>
<title>
ADD USER PAGE
</title>
<script>
function form_validate()
{
//var first_name = document.getElementById("fname").value;
//var last_name = document.getElementById("lname").value;
var email = document.getElementById("email").value;
var phone = document.getElementById("ph").value;

//var email_reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

/*if(first_name == "")
{
alert("Enter First Name");
return false;
}
if(last_name == "")
{
alert("Enter Last Name");
return false;
}*/

if(phone=="" || isNaN(phone))
{
alert("phone number cannot be empty and has to be in number");
return false;
}
//if(phone.length!=10)
//{
//alert("phone number must be 10 digits");
//return false;
//}

if(email == "" && !email.match(email_reg))
{
alert("Enter Email....field cannot be empty");
return false;
}
}
</script>
</head>
<body>
<b><h1>ADD USER</h1></p></b>


<BR>
<BR>
<form action="submit_userdetails.php" method="post">



<label for = "STUDENTID =">STUDENTID:</label>
<input type ="text"  id="stdid" name="stdid" /><br><br>


<label for ="Name =">STUDENT NAME:</label>
<input type ="text"  id="stdname" name="stdname" />
<br><br>



<label for ="number" >PHONE NUMBER:</label>
<input type="number" id="ph" name="ph" /><br><br>


<label for ="EMAIL">email id</label>
<input type ="text"  id="email" name="email" /><br><br>




<label for ="Semester=">Semester</label>
<input type ="text"  id="sem" name="sem" /><br><br>


<label for ="Course=">COURSE</label>
<input type ="text"  id="course" name="course" /><br><br>

<label for ="batch=">BATCH</label>
<input type ="text"  id="batch" name="batch" /><br><br>




<input type="submit" value="submit" onClick="return form_validate()">

</form>



</body>
</html>
