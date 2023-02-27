
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-sacle=1">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="yourdetail.css">
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
                    <a href=""><span class="las la-users"></span> <span >Your Details</span></a>  
                </li>
                <li>
                    <a href="course.php"><span class="las la-clipboard-list"></span>  <span >Courses</span></a>  
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span> <span >Take Quiz</span></a>  
                </li>
                <li>
                    <a href="viewcoursenote.php"><span class="las la-receipt"></span> <span >Course notes</span></a>  
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
               <h2>
                    <label for="nav-toggle">
                       <span class="las la-bars"></span>
                   </label> 
                   
                  Your Dashboard
               </h2>
               
               
               
                   <div>
                       <?php 
              session_start();
              echo "welcome"."  ".$_SESSION['user_name'];
              ?>
                   </div>
               
        </header>
            
            <main>
                <h2 style="text-align:center;color:#39C9BB">Personal Details</h2>
                <div class="table-container">
       
           <form style=" width: 50vw; margin-left: 4vw;">     
        <div class="card-body">
            <?php 
            $user=$_SESSION['user_name'];
            $connection = mysqli_connect("localhost","root","","user_db");
            $query ="select * from user_form where email='$user'";
            $query_run =mysqli_query($connection,$query); 
            ?>
            <table class="table">
              
                <thead>
                    <tr>
                        <th>ID</th>
                        <th> Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>EDIT</th>
                        
                    </tr>
                </thead>
              
                <tbody>
                    <?php
                        if(mysqli_num_rows($query_run)>0)
                        {
                            while($row= mysqli_fetch_assoc($query_run))
                            {
                            ?>

                    <tr>
                        <td ><?php echo $row['id'];?></td>
                        <td ><?php echo $row['name'];?></td>
                        <td ><?php echo $row['phone'];?></td>
                        <td ><?php echo $row['email'];?></td>
                        <td ><button><a href='updatestudent.php?email=<?php echo $row['email'];?>'>Edit/Update</button></td>
                        </tr>
                        <?php
                       }

                    }
                    else{
                            echo "no record found";
                        }
                    ?>
                </tbody>
            </table>
            
            
        </div>
        </form>
            </div>
                    </tr>
            
                
                
            </main>  
        </div>
        
    </body>
</html>