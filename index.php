<!DOCTYPE html>
<html>
    <Head>
        <style type="text/css">
            
                #side_bar{
                    background-image: url('img1.jpg');
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                .navbar-brand{
                    margin-bottom: 50px;
                }
                .slider{
    width:100%;
    height:350px;
    
}
#img{
    width:100%;
    height:100%;
    object-fit: contain;
}
           
        </style>
       

        <title>
            User Login
        </title>
       
        <link rel="stylesheet" href="style.css">
        
    </Head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand"  style="font-size: larger;"><h1>Library Managment System(LMS)</h1></a>
                

                
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin login</a>
                    </li><br>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">User login</a>
                    </li><br>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Register</a>
                    </li><br>
                </ul>
            </div>
            </div>
        </nav></body>
            
        
        <br>
        <span>
            <marquee id="welcome" > This is library Managment System. Library opens at 8:00 Am and close at 6:00 Pm</marquee>
        </span><br>
        
        <div class="row">
            <div class=" columns " id="side_bar"> 
                <h4>Library Timing</h4>
                <ul>
                    <li>Opening Timing 8:00 Am</li>
                    <li>Closing Timing 6:00 Pm</li>
                    <li>(Sunday off)</li>
                </ul>
                <h4>What we Provid?</h4>
                <ul>
                    <li>Fully furniture</li>
                    <li>Free wi-fi</li>
                    <li>News Papers</li>
                    <li>Dissussion Room</li>
                    <li>RO Water</li>
                    <li>Peacefull Environment</li>
                </ul>
                <h4>Cources Availavble in our college</h4>
                <ul>
                    <li>Computer science and Engineearing</li>
                    <li>Artifical Intaligece</li>
                    <li>Electronic and Communication</li>
                    <li>Civil</li>
                    <li>Mechanical</li>
                    <li>Mechine Learning</li>
                </ul>
            </div>
            <div class=" columns" id="main_content">

                <div class="slider">
                    <div id="img">
                <img src="img6.jpg" width="100%" height="100%">
            </div>
            </div>
                <center><h2>User Login Form</h2></center>
                <form action="" method="post">
                    
                     <div class="form-group">
                        <label for="name">ID:</label>
                        <input type="text" name="id" class="form-control "required>
                     </div>
                     
                     <div class="form-group">
                        <label for="name">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                     
                     
                     <button type="submit" name="login" class="button button2">Login</button>
                     
                     
                </form>
            </div>
        



            
            <?php
                session_start();
                    if(isset($_POST['login'])){
                        $connection = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($connection,"keety");
                        $query ="SELECT * FROM users WHERE  id ='$_POST[id]'";
                        $query_run=mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($query_run)){
                            if($row['id']==$_POST['id']){
                                if($row['password']==$_POST['password']){
                                   $_SESSION['name'] = $row['name'];
                                   $_SESSION['email'] = $row['email'];
                                   $_SESSION['id'] = $row['id'];
                                   header("Location:user_dashboard.php");
                                }
                                else{
                                    ?>
                                    <br><br><center><span class="alert-danger">wrong password</span></center>
                                    <?php
                                }
                            }
                        }

                    }

                ?>


            </div>
        </div>

       
    </body>
</html>