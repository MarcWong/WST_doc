<?php
#db connect
$con = mysqli_connect("localhost","usr_2015_49","internetics");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 #db select
mysql_select_db("db_2015_49", $con);	

#table select
$result = mysql_query("SELECT * FROM Guest_Table");

while($row = mysql_fetch_array($result)) 
{
  echo $row['Guest_Name'] ;
  echo "gagdd";
  echo "<br />";
 }
?>