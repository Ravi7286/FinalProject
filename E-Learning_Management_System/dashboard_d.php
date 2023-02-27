<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-sacle=1">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="Dashboard.css">
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
                    <a href="addcourse.html"><span class="las la-clipboard-list"></span>  <span >Add Course</span></a>  
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
               
                <div class="cards">
                    <div class="card-single">
                        <div>
                           <div>
                           <h1> <?php 
            
            $con = mysqli_connect("localhost","root","","user_db");
            $query ="select count(id) as cnt from user_form where user_type='user' ";
            $query_run =mysqli_query($con,$query); 
           if(mysqli_num_rows($query_run)>0)
                        {
            while($row= mysqli_fetch_assoc($query_run))
                            {

            echo $row['cnt'];
                 }
             }
    ?></h1>
</div>
                        <span>Student</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>
                    
                    <div class="card-single">
                        <div>
                            <div>
                           <h1> <?php 
            
            $con = mysqli_connect("localhost","root","","user_db");
            $query ="select count(id) as cnt from `video` ";
            $query_run =mysqli_query($con,$query); 
           if(mysqli_num_rows($query_run)>0)
                        {
            while($row= mysqli_fetch_assoc($query_run))
                            {

            echo $row['cnt'];
                 }
             }
    ?></h1>
</div>
                        <span>Courses</span>

                        </div>
                        <div>
                             <img src="https://img.icons8.com/ios-filled/50/null/circled-play.png"/>
                           <!-- <span class="las la-clipboard-list"></span> --> 
                        </div>
                    </div>
                    
                    <div class="card-single">
                        <div>
                            <h1> <?php 
            
            $con = mysqli_connect("localhost","root","","user_db");
            $query ="select count(id) as cnt from pdf_file";
            $query_run =mysqli_query($con,$query); 
           if(mysqli_num_rows($query_run)>0)
                        {
            while($row= mysqli_fetch_assoc($query_run))
                            {

            echo $row['cnt'];
                 }
             }
    ?></h1>
                            <span>Course Notes</span>
                        </div>
                        <div>
                            <span class="las la-clipboard-list"></span>
                        </div>
                    </div>
                    
                    <div class="card-single">
                        <div>
                            <h1>$2k</h1>
                            <span>Income</span>
                        </div>
                        <div>
                            <span class="lab la-google-wallet"></span>
                        </div>
                    </div>  
                </div>
                
             <!--   <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3>Recent Projects</h3>
                                
                                <button>See all <span class="las la-arrow-right"></span></button>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>Project Title</td>
                                                <td>Department</td>
                                                <td>Status</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>UI/UX Design</td>
                                                <td>UI Team</td>
                                                <td>
                                                <span class="status purple"></span>
                                                review
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Web development</td>
                                                <td>Fronted</td>
                                                <td>
                                                <span class="status pink"></span>
                                                In progress
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ushop app</td>
                                                <td>Mobile Team</td>
                                                <td>
                                                <span class="status orange"></span>
                                                pending
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td>UI/UX Design</td>
                                                <td>UI Team</td>
                                                <td>
                                                <span class="status purple"></span>
                                                review
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Web development</td>
                                                <td>Fronted</td>
                                                <td>
                                                <span class="status pink"></span>
                                                In progress
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ushop app</td>
                                                <td>Mobile Team</td>
                                                <td>
                                                <span class="status orange"></span>
                                                pending
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td>UI/UX Design</td>
                                                <td>UI Team</td>
                                                <td>
                                                <span class="status purple"></span>
                                                review
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Web development</td>
                                                <td>Fronted</td>
                                                <td>
                                                <span class="status pink"></span>
                                                In progress
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ushop app</td>
                                                <td>Mobile Team</td>
                                                <td>
                                                <span class="status orange"></span>
                                                pending
                                                </td>
                                            </tr> 
                                        </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="customers">
                        <div class="card">
                            <div class="card-header">
                                <h3>New customer</h3>
                                
                                <button>See all <span class="las la-arrow-right"></span></button>
                            </div>
                            
                            <div class="card-body">
                                <div class="customer">
                                    <div class="info">
                                        <img src="C:\Users\Vikas Jaiswal\OneDrive\Desktop\Final Project\img1.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Ravi Thakur</h4>
                                            <small>CEO Expert</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                   
                                   <div class="customer">
                                    <div class="info">
                                        <img src="C:\Users\Vikas Jaiswal\OneDrive\Desktop\Final Project\img1.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Ravi Thakur</h4>
                                            <small>CEO Expert</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                
                                <div class="customer">
                                    <div class="info">
                                        <img src="C:\Users\Vikas Jaiswal\OneDrive\Desktop\Final Project\img1.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Ravi Thakur</h4>
                                            <small>CEO Expert</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                
                                <div class="customer">
                                    <div class="info">
                                        <img src="C:\Users\Vikas Jaiswal\OneDrive\Desktop\Final Project\img1.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Ravi Thakur</h4>
                                            <small>CEO Expert</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                
                                <div class="customer">
                                    <div class="info">
                                        <img src="C:\Users\Vikas Jaiswal\OneDrive\Desktop\Final Project\img1.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Ravi Thakur</h4>
                                            <small>CEO Expert</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                
                                <div class="customer">
                                    <div class="info">
                                        <img src="C:\Users\Vikas Jaiswal\OneDrive\Desktop\Final Project\img1.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Ravi Thakur</h4>
                                            <small>CEO Expert</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>-->
                
                
            </main>  
        </div>
        
    </body>
</html>