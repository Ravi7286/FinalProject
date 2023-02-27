<?php
	$conn = mysqli_connect("localhost","root","","user_db");
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	
 
	mysqli_query($conn,"update `user_form` set name='$name', phone='$phone' where id='$id'");
	header('location:studentdetail1.php');
?>