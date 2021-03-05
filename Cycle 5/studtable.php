<?php
$servername = "localhost";
$username = "20mca029";
$password = "2534";
$dbname = "20mca029";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
<th>Mark</th>

</tr>";
if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
   echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['branch']."</td>";
echo "<td>".$row['mark']."</td>";
echo "</tr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>