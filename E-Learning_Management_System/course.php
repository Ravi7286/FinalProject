
<?php
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,"user_db");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-sacle=1">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="course.css">
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
                    <a href="yourdetail.php"><span class="las la-users"></span> <span >Your Details</span></a>  
                </li>
                <li>
                    <a href="course.php"><span class="las la-clipboard-list"></span>  <span >Courses</span></a>  
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span> <span >Take Quiz</span></a>  
                </li>
                <li>
                    <a href=""><span class="las la-receipt"></span> <span >Course notes</span></a>  
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
               
               <div class="search-wrapper">
                   <span class="las la-search"></span>
                   <input type="search" placeholder="Search Here" />
               </div>
               
              <div class="user-wrapper">
                   
                   <div>
                       <?php 
              session_start();
              echo "welcome"."  ".$_SESSION['user_name'];
              ?>
                   </div>
               </div> 
        </header>
            
            <main>
                
    <div class="table-container">
        <h1 style="text-align: center;color: #39C9BB;">Courses Available</h1><br>
           <form style=" width: 50vw; margin-left: 4vw;">     
        <div class="card-body">
            <?php 
            
            $query ="select * from `video` ";
            $query_run =mysqli_query($con,$query); 
            ?>
            <table class="table">
              
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Duration</th>
                        <th>Watch Now</th>
                       
                    </tr>
                </thead>
              
                <tbody>
                    <?php
                        if(mysqli_num_rows($query_run)>0)
                        {
                            while($row= mysqli_fetch_assoc($query_run))
                            {
                                 $id=$row['id'];
        $name=$row['name'];
                            ?>

                    <tr>
                        <td ><?php echo $row['id'];?></td>
                        <td ><?php echo $row['course'];?></td>
                        <td ><?php echo $row['descrip'];?></td>
                        <td ><?php echo $row['duration'];?></td>
                        <td ><?php echo "<a href='watch.php?id=$id'>Watch Now</a><br />";?></td>
                      
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
                
            
                
                
            </main>  
        </div>
        
    </body>
</html>