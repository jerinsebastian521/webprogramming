 <html> 
 <head></head>
 <body> 
 <?php 
 $my_array = array( "Virat Kohli", "Shikhar Dhawan", "M.S Dhoni","Shreyas Ayyer","K L Rahul","Prithvi Shah"); ?>
 <h1  align="center">Indian Cricket Players</h1> 
 <table border=”1” align="center"> 
 <tr> 
 <th>Sl.No</th> <th>Name of Players</th> </tr> <?php $arraysize=sizeof($my_array); for($i=0;$i<$arraysize;$i++) { ?> 
 <tr>
 <td><?php echo $i+1; ?></td> <td><?php echo $my_array[$i];?></td>
 </tr> 
 <?php 
 } 
 ?>
 </table> 
 </body> 
 </html>