<?PHP
    session_start();
?>
<!DOCTYPE html>
<html>
    <Head>
        <style type="text/css">
            
            .row{
                 background-color :white;
                    width: 25%;
                    margin-left:40%;
                    
            }
             
            .button{
                width: 30%;
                
            }
             body{
                    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPe9wsvOohitqcKi_KuS10bclNS_s90topew&usqp=CAU);
                    background-repeat: no-repeat;
                    background-size: 100%;
                }
            
        </style>
       
        
        <title>
           User Dashboard
        </title>
       
        <link rel="stylesheet" href="style.css">
        
    </Head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brnd" href="#"><h1 >Library Managment System(LMS)</h1></a>
                    <span><strong><h3>Welcome:<?php echo $_SESSION['name'];?></h3></strong></span>
                    <span><strong><h3>ID:<?php echo $_SESSION['id'];?></h3></strong></span>
                

                
                <ul class="nav navbar-nav navbar-right">
                    
                        <div class="dropdown">
                              <button class="dropbtn">My_profile</button>
                              <div class="dropdown-content">
                                <a href="view_profile.php">view profile</a>
                                <a href="edit_profile.php">Edit profile</a>
                                <a href="change_password.php">Change password</a>
                              </div>
                            </div>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
                </ul>
            </div>
            </div>
        </nav></body>
            
        
        <br>
        <span>
            <marquee id="welcome"> This is library Managment System. Library opens at 8:00 Am and close at 6:00 Pm</marquee>
        </span><br>
        <div class="bag-img">
        <div class="row">
            <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <form action="update_password.php" method="post">
                                <div class="form-group">
                                <label>Enter  Current Password</label>
                                <input type="password" name="old_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Enter  New Password</label>
                                <input type="password" name="new_password" class="form-control">
                            </div>
                            <button type="submit" name="update" class="button">Update Password</button>
                            </form>
                        </div>
                    </div>
                                    <div class="col-md-4"></div>
        </div>
       
    </body>
</html>