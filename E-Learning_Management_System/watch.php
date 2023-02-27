<?php
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,"user_db");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>player</title>
</head>
<body>
 <?php
 if(isset($_GET['id']))
 {
 	$id=$_GET['id'];
 	$query=mysqli_query($con,"SELECT * FROM `video` WHERE id='$id'");
 	while ($row=mysqli_fetch_assoc($query))
 	 {
 		$name=$row['name'];
 		$url=$row['url'];

 	}
 	echo "you are watching ".$name." <br />";
 	echo "<embed src='$url' width='1340' autostart='false' volume='60' height='590' loop='false'></embed>";
 }
 else
 {
 	echo "error!";
 }
 ?>

</body>
</html>