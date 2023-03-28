<?PHP
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"keety");
    $name="";
    $id="";
    $email="";
    $mobile="";
    $address="";
    $query ="SELECT * FROM users WHERE  id ='$_SESSION[id]'";
    $query_run=mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $name=$row['name'];
        $id=$row['id'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $address=$row['address'];
    }
?>
<!DOCTYPE html>
<html>
    <Head>
        <style type="text/css">
             
            .rows{
                    background-color :white;
                    width: 50%;
                    margin-left:25%;
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
                    <a class="navbar-brnd"><h1 >Library Managment System(LMS)</h1></a>
                    <span><strong><h3>Welcome:<?php echo $_SESSION['name'];?></h3></strong></span>
                    <span><strong><h3>ID:<?php echo $_SESSION['id'];?></h3></strong></span>
                

                
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                              <button class="dropbtn">My_profile</button>
                              <div class="dropdown-content">
                                <a href="view_profile.php">view profile</a>
                                <a href="edit_profile.php">Edit profile</a>
                                <a href="change_password.php">Change password</a>
                              </div>
                            </div>
                        

                        
                    </li>
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
        
        <div class="rows">
            <div class="col-md-4"></div>
            <div class="col-md-4">
               <form>
                    <div class="form-group">
                       <lable>  Name</lable>
                        <input type="text" class="form-control"value="<?php echo $name;?>"disabled>
                        <lable>  ID</lable>
                            <input type="text" class="form-control"value="<?php echo $id;?>"disabled>
                        <lable>  Email ID</lable>
                            <input type="text" class="form-control"value="<?php echo $email;?>"disabled>
                        <lable>  Mobile Number</lable>
                            <input type="text" class="form-control"value="<?php echo $mobile;?>"disabled>
                        <lable>  Address</lable>
                            <input type="text" class="form-control"value="<?php echo $address;?>"disabled>
                    
                    </div>
                </form>
            </div>
        </div>

       </div>
    </body>
</html>