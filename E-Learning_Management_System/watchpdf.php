<?php
include 'db.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>player</title>
</head>
<body>
<div class="div1">
 <?php
 if(isset($_GET['id']))
 {
 	$id=$_GET['id'];
 	$query=mysqli_query($conn,"SELECT * FROM `pdf_file` WHERE id='$id'");
 	while ($info=mysqli_fetch_assoc($query))
 	 {
        $pdf=$info['pdf'];
 		$url=$info['url'];
 	}
     echo "you are viewing".$pdf. "<br />";
      echo"<embed src='$url' type='application/pdf' width='900' height='700'></embed>";
 	
 }
 else
 {
 	echo "error!";
 }
 ?>
</div>
</body>
</html>