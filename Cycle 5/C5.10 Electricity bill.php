<html>
<head></head>

<body>
<h3 align="center">ELECTRICITY BILL CALCULATOR</h3>
<form action="" method="post" align="center">
Enter Units:<input type="text" name="unit">
<input type="submit" value ="submit" name="submit">
<input type="reset" value="Reset">
</form>

<?php

if(isset($_POST['submit']))
{
	$unit=$_POST['unit'];
	
	if($unit<100)
	{
		$cost= $unit*5.15;
	}
	else if($unit<=100 && unit<200)
		{
		$cost= $unit*6.15;
	}
	else if($unit<=200 && unit<300)
		{
		$cost= $unit*7.15;
	}
	else if($unit<=300 && unit<400)
		{
		$cost= $unit*8.15;
	}
	
	 echo"<b>Units:</b>"; echo "$unit" ; echo"<br>";
	 echo"<b>Price:</b>"; echo "$cost";echo"<br>";
} 

?>


</body>
</html>