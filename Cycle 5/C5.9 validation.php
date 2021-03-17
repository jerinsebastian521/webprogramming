<html>
<head>
<script>
function validate()
{
	var fname= document.register.fullname.value;
	var email= document.register.email.value;
	var username= document.register.username.value;
	var password = document.register.password.value;
if (fname==null || fname=="")
{ 
alert("Full Name can't be blank"); 
return false; 
}
else if (email==null || email=="")
{ 
alert("email can't be blank"); 
return false; 
}
else if (username==null || username=="")
{ 
alert("UserName can't be blank"); 
return false; 
}
else if (password==null || password=="")
{ 
alert("password can't be blank"); 
return false; 
}

}
</script>
</head>


<body>
<form name="register" method="post" action="" onsubmit="return validate();" >

<table align="center" >
<tr>
<td>Full Name</td>
<td><input type="text" name="fullname" /></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" /></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="register" value="Register"></input>
<input type="reset" value="Reset"></input></td>
</tr>
</table>
</form>

<?php
include 'connect.php';
if(!conn)
{
	echo"connection failed";
}
if(isset($_POST['register']))
{
	$fname=$_POST['fullname'];
	$email=$_POST['email'];
	$uname=$_POST['username'];
	$password=$_POST['password'];
	

	$sql= "insert into register (fname,email,username,password)values('$fname','$email','$uname','$password')";
if(mysqli_query($conn,$sql))
{
echo "Data inserted successfully <br>";
}

}


?>
</body>
</html>