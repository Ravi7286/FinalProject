
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-sacle=1">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="studentdashboard.css">
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
               
             <div>
                       <?php 
              session_start();
              echo "welcome"."  ".$_SESSION['user_name'];
              ?>
        </header>
            
            <main>
                
           
                
                
            </main>  
        </div>
        
    </body>
</html>