<html>
<head>
<title>general form</title>
</head>
<body bgcolor="white">
<form action = "<?php $_PHP_SELF ?>" method = "POST">
Name:
<input type = "text" name = "txtname">
<br><br>
Roll no.:
<input type = "text" name = "txtr_no">
<br><br>
Gender:
<input type = "text" name = "txtgen">
<br><br>

Address:
<textarea name = "add" type = "textarea"></textarea>
<br><br>
<input type = "Submit" name = "insert" value = "Save">
<input type = "Reset" value = "Cancel">
</form>
</body>
</html>

<?php
$servername = "localhost";
$username = "20mca029";
$password = "2534";
$dbname = "20mca029";

if(isset($_POST['insert']))
 {
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if($conn)
 {
echo "Mysql connection ok<br>";
//mysqli_select_db("studentreg",$conn);
$name =$_POST['txtname'];
$rollno = $_POST['txtr_no'];
$gender =$_POST['txtgen'];
$address = $_POST['add'];
$insert = "insert into studentreg(name,rollno,gender,address) values('$name',$rollno,'$gender','$address')";
if(mysqli_query($insert,$conn))
{
echo "Data inserted successfully<br>";
}
$query = "select * from studentreg";
$sldt = mysqli_query($query,$conn);
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Roll No</th>
<th>Gender</th>
<th>Address</th>
</tr>";
while($row = mysqli_fetch_array($sldt))

{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['rollno']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['address']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
 }
 }
?>