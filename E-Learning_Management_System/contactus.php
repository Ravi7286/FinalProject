<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-sacle=1">
    <title>Accusoft Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="Studentdetail.css">
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
                    <a href="addcourse.php"><span class="las la-clipboard-list"></span>  <span >Add Course</span></a>  
                </li>
                <li>
                    <a href="addquiz.php"><span class="las la-shopping-bag"></span> <span >Add Quiz</span></a>  
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
                   
                   Dashboard
               </h2>
               
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
        
        <div class="table-container">
        <h1 style="text-align: center;color: #DD2F6E;"> ContactUs details</h1><br>
           <form style=" width: 50vw; margin-left: 4vw;">     
        <div class="card-body">
            <?php 
            $connection = mysqli_connect("localhost","root","","user_db");
            $query ="select * from user_contact";
            $query_run =mysqli_query($connection,$query); 
            ?>
            <table class="table">
              
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Query</th>
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
                        <td ><?php echo $row['Id'];?></td>
                        <td ><?php echo $row['name'];?></td>
                        <td ><?php echo $row['phone'];?></td>
                        <td ><?php echo $row['email'];?></td>
                        <td ><?php echo $row['queri'];?></td>
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
		
        Student