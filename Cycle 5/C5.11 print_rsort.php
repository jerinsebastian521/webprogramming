<html>
<title></title>
<body>
<?php
$student = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
print_r($student);
echo "<br>";
echo"<h1>arsort</h1>";
arsort($student);


foreach($student as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo"<h1>asort</h1>";
asort($student);
foreach($student as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>