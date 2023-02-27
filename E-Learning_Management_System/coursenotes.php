

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-sacle=1">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="coursenote.css">
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
                    <a href=""  class="active"><span class="las la-igloo"></span> <span >Dashboard</span></a>  
                </li>
                <li>
                    <a href="Studentdetail1.php"><span class="las la-users"></span> <span >Student Details</span></a>  
                </li>
                <li>
                    <a href="addcourse.html"><span class="las la-clipboard-list"></span>  <span >Add course</span></a>  
                </li>
                <li>
                    <a href="addquiz.html"><span class="las la-shopping-bag"></span> <span >Add Quiz</span></a>  
                </li>
                <li>
                    <a href="coursenotes.php"><span class="las la-receipt"></span> <span >Add course notes</span></a>  
                </li>
                <li>
                    <a href="contactus.php"><span class="las la-user-circle"></span> <span >View ContactUs</span></a>  
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span> <span >View Result</span></a>  
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
               
               <div class="search-wrapper">
                   <span class="las la-search"></span>
                   <input type="search" placeholder="Search Here" />
               </div>
               
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
           include 'db.php';
                
                if (isset($_POST['submit']))
                 {
                $course = mysqli_real_escape_string($conn, $_POST['course']);
                $descrip = mysqli_real_escape_string($conn, $_POST['descrip']);
                  $pdf=$_FILES['myfile']['name'];
                  $pdf_type=$_FILES['myfile']['type'];
                  $pdf_size=$_FILES['myfile']['size'];
                  $pdf_temp_loc=$_FILES['myfile']['tmp_name'];
                  $pdf_store="files/".$pdf;
                  if(move_uploaded_file($pdf_temp_loc,$pdf_store)){    
                    
                    echo "<h1>File Uploaded Succesfully.</h1>";
                      echo "<br />".$pdf. " has been uploaded";
                  }
                    else{
                        echo "<h1>Error.... Please try again.</h1>";
                    }
                    
                  $url="https://localhost/dw/files/$pdf";
                  $sql="INSERT INTO `pdf_file` values('','$course','$descrip','$pdf','$url')";
                  $query=mysqli_query($conn,$sql);
                  
                }
                
        ?>
           
            
             <!-- <a href="display_pdf.php">PDF</a> -->
			<h1 style="text-align:center;color:#DD2F6E">UPLOAD COURSE NOTES</h1>
                <div class="frm">
               <form style=" width: 50vw; margin-left : 25vw" action="coursenotes.php" method="post" enctype="multipart/form-data">
               
			   <label for="fname">Course Name</label><br>
			   <input type="text" name="course" placeholder="course name" size="40"><br>
			   <label for="fname">Description</label><br>
			   <textarea id="w3review" name="descrip" rows="4" cols="40" placeholder="Description"></textarea><br>
			   <label for="fname">Select to Upload</label><br><br>
			   <input type="file" name="myfile"><br><br>
               <input type="submit" value="Upload" name="submit">
                       
               
			   
			   </form>
                </div>
                
            </main>  
        </div>
        
    </body>
</html>