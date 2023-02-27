<?php
	$conn = mysqli_connect("localhost","root","","user_db");
	$email=$_GET['email'];
 
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	
 
	mysqli_query($conn,"update `user_form` set name='$name', phone='$phone' where email='$email'");
	header('location:yourdetail.php');
?>