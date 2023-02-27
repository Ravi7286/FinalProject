
    
                        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-sacle=1">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="addcourse.css">
    </head>
    <body>
        
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
         <div class="sidebar-brand">
             <h2><span class="lab la-accusoft"></span> <span>AceOne</span></h2>
         </div>
          
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard_d.php"  class="active"><span class="las la-igloo"></span> <span >Dashboard</span></a>  
                </li>
                <li>
                    <a href="Studentdetail1.php"><span class="las la-users"></span> <span >Student Details</span></a>  
                </li>
                <li>
                    <a href="addcourse.php"><span class="las la-clipboard-list"></span>  <span >Add course</span></a>  
                </li>
                <li>
                    <a href="addquiz.php"><span class="las la-shopping-bag"></span> <span >Add Quiz</span></a>  
                </li>
                <li>
                    <a href="coursenote.html"><span class="las la-receipt"></span> <span >Add course notes</span></a>  
                </li>
                <li>
                    <a href="contactus.php"><span class="las la-user-circle"></span> <span >View ContactUs</span></a>  
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span> <span >View Result</span></a>  
                </li> 
                <li>
                    <a href="logout.php"><span class="las la-clipboard-list"></span> <span >Logout</span></a>  
                </li>    
            </ul>
            </div>
        </div>
        
        <div class="main-content">
            <header>
               <h1>
                    <label for="nav-toggle">
                       <span class="las la-bars"></span>
                   </label> 
                   
                   Dashboard
               </h1>
               
               
               
               <div class="user-wrapper">
                   <div>
                       <?php 
              session_start();
              echo "welcome"."  ".$_SESSION['admin_name'];
              ?>
                   </div>
               </div>
        </header>
            
            <main>
                <?php
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,"user_db");

if(isset($_POST['submit']))
{   
    $course = mysqli_real_escape_string($con, $_POST['course']);
   $descrip = mysqli_real_escape_string($con, $_POST['descrip']);
   $duration = mysqli_real_escape_string($con, $_POST['duration']);
    $name = $_FILES['file']['name'];
    $temp =$_FILES['file']['tmp_name'];
    //move_uploaded_file($temp,"uploaded/".$name);
    $url="http://localhost/E-learning_management_system/uploaded/$name";
    //mysqli_query($con,"INSERT INTO `videos` VALUES ('','$name',$url)");
    if(move_uploaded_file($temp,"uploaded/".$name))
                    {
                         $query = "INSERT INTO `video` VALUES('','$course','$descrip','$duration', '$name','$url')";
                            mysqli_query($con,$query);
                            echo "Upload succesfull";
                            echo "<br />".$name." has been uploaded";
                    }  
                    else
                    {
                        echo "File is not selected";
                    }


}
?>
			<h2 style="text-align:center;color:#DD2F6E">UPLOAD COURSE VIDEO</h2>
                <div class="frm">
               <form style=" width: 50vw; margin-left : 25vw;" action="addcourse.php" method="post" enctype="multipart/form-data" >
			   <label for="fname">Course Name</label><br>
			   <input type="text" name="course" placeholder="course name" size="40"><br>
			   <label for="fname">Description</label><br>
			   <textarea id="w3review" name="descrip" rows="4" cols="40" placeholder="Description"></textarea><br>
			   <label for="fname">Duration</label><br>
			   <input type="text" name="duration" placeholder="Duration"><br>
			   <label for="fname">Select to Upload</label><br><br>
			   <input type="file" id="myFile" name="file"><br><br>

			   <input type="submit" value="Upload" name="submit">
			   
			   </form>
                </div>
                
            </main>  
        </div>
        
    </body>
</html>