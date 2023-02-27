<?php
@include 'config.php';
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $queri = mysqli_real_escape_string($conn, $_POST['queri']);
   $insert = "INSERT INTO user_contact(name, email, phone, queri) VALUES('$name','$email','$phone','$queri')";
   $result =mysqli_query($conn,$insert);
   header("location:homepage1.php");
   mysqli_close($conn);
?>