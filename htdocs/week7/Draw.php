<!DOCTYPE html>
<head>
<title>y2015g49_Draw.php</title>
<meta http-equiv="Content-type" content="text/html;" charset="UTF-8" />
<link type="image/x-icon" href="../img/batman_24px_1190165_easyicon.net.ico" rel="icon"></link>
<link rel="stylesheet" type="text/css" href="../css/mycss.css" />
</head>
<body>
<?php
$shape = $_POST["graph"];
$color = $_POST["color"];
$fill = $_POST["fill"];
print ("<h2>A $color $fill $shape</h2>");
print ("<applet codetype='application/java' code='MoreGraphics.class' width='300' height='200'>
         <param name='shape' value=$shape>
	 <param name='color' value=$color>
	 <param name='fill' value=$fill>
	 </applet><br /><br />");
?>
<a href="hw7-3.html">Redraw</a>
</body>
</html>
