<?php
$conn = mysqli_connect("localhost","root","","user_db");
   $email=$_GET['email'];
   $query=mysqli_query($conn,"select * from `user_form` where email='$email'");
   $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="update2.php?email=<?php echo $email; ?>" method="post">
      <h3>Update/Edit details</h3>
     
      <input type="text" name="name" required placeholder="enter your name" value="<?php echo $row['name'];?>">
      <input type="text" name="phone" required placeholder="enter phone no"value="<?php echo $row['phone'];?>">
      
      <input type="submit" name="submit" value="Update now" class="form-btn">
      
   </form>

</div>

</body>
</html>