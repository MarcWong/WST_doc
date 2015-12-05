<!--
#display.php
#insert the form to the database
# 1300012848 11/11/2015 15:27
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

  $first_name = $_POST['Personal_FirstName'];
  $last_name= $_POST['Personal_LastName'];
  $age = $_POST['Personal_Age'];
  $sex = $_POST['Personal_Sex'];
  $id = $_POST['Personal_IDNumber'];
  $watch = $_POST['watch'];
  $holiday = $_POST['holiday'];
  $knowledge = $_POST['knowledge'];
  echo "<h3>First Name : $first_name</h3>";
  echo "<h3>Last Name : $last_name</h3>";
  echo "<h3>Age : $age</h3>";
  echo "<h3>Sex : $sex</h3>";
  echo "<h3>ID Number : $id</h3>";
  echo "<h3>Watch : $watch</h3>";
  echo "<h3>Holiday : $holiday</h3>";
  echo "<h3>Knowledge : $knowledge</h3>";
?>
<div><a href="hw6.html" id = "return"><img src="../img/logo0.png" /></a></div>
</body>
</head>

