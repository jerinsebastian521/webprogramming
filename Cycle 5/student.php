 <?php
$servername = "localhost";
$username = "20mca029";
$password = "2534";
$dbname = "20mca029";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO student (name, branch,mark)
VALUES ('John', 'cs','50');";
$sql .= "INSERT INTO student (name, branch,mark)
VALUES ('Mary', 'bsc','60');";
$sql .= "INSERT INTO student (name, branch,mark)
VALUES ('Julie', 'bca','80')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 