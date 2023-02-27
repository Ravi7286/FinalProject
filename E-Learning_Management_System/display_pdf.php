<?php
include 'db.php';
$conn=mysqli_connect($host,$user,$pass,$db);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hello</title>
</head>
<body>
<?php
$sql=mysqli_query($conn,"SELECT * from `pdf_file`");
while($info=mysqli_fetch_assoc($sql))
{
	$id=$info['id'];
	$pdf=$info['pdf'];
    $url=$info['url'];
   
	echo "<a href='watchpdf.php?id=$id'>$pdf</a><br />";  
}
?>
</body>
</html>