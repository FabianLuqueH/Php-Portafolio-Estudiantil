<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("1"). "<br>";


?>
&copy; 2010-<?php echo date("Y")."<br>";?>

<?php 
date_default_timezone_set("America/new_York");
echo "The time is ". date("h:i:sa")."<br>"; ?>
 

<?php $d=mktime(11,14,54,8,12,2014);
echo "Created date is ". date("Y-m-d h:i:sa", $d)."<br>";
 ?>

 <?php $a=strtotime("10:30pm April 15 2014");
 echo "Created date is ".date("Y-m-d h:i:sa", $a); ?>
</body>
</html>