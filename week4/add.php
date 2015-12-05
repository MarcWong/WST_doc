<!--
#add.php
#insert the form to the database
# 1300012848 10/11/2015 11:16
#############################################
-->
<HTML>
<HEAD><TITLE>Thank you very much !</TITLE>
<meta http-equiv="Content-type" content="text/html;" charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="../css/mycss.css" />
</HEAD>
<BODY>
<?php 
echo"<h2>Thank you very much !</h2>";

#read
@$name=htmlspecialchars($_REQUEST["name"]);
@$age=htmlspecialchars($_REQUEST["age"]);
@$gender=htmlspecialchars($_REQUEST["gender"]);
@$email=htmlspecialchars($_REQUEST["email"]);

#test read from file
#$file = fopen("1.dat","r+")or die("Error-$counterfile cannot be opened");
#echo fread($file,filesize("1.dat"));
#fclose($file);

#db connect
@$con = mysql_connect("localhost","usr_2015_49","internetics");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
#db select
mysql_select_db("db_2015_49", $con);	

#table create
#$sql = "CREATE TABLE Guest_Table
#(
#Guest_ID INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
#Guest_Name CHAR(20),
#Age INTEGER,
#Gender CHAR(7),
#E_mail CHAR(60) 
#)";
#mysql_query($sql,$con);

#table insert
mysql_query(" INSERT INTO Guest_Table(`Guest_Name`, `Age`, `Gender`, `E_mail`)    
                                      VALUES ('$name', '$age', '$gender', '$email')");

mysql_close($con);
  ?>
<div><a href="hw4.html" id = "return"><img src="../img/logo0.png" /></a></div>
</BODY>
</HTML>