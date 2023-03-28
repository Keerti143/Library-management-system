
<?PHP

    session_start();
    function get_user_issue_book_count(){
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection,"keety");
        $user_issue_book_count=0;
        $query ="SELECT count(*) as user_issue_book_count from issued_books WHERE  student_id ='$_SESSION[id]'";
        $query_run=mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            $user_issue_book_count=$row['user_issue_book_count'];
        }
        return($user_issue_book_count);
    }
?>
<!DOCTYPE html>
<html>
    <Head>
        <style type="text/css">
              
            img {
              width: 100%;
               border-radius:15px;
              height: 214px;
              object-fit: cover;
            }.card {
              /* Change background color */
              background-color: white;
              /* Add border */
              border: 1px solid #bacdd8;

              /* Add space between the border and the content */
             width: 80%;
             height: 100%;
              border-radius: 40px;
              
              margin-bottom: 50px;
              margin: 10px;
            }
            .card:hover{
                box-shadow: 200px 200px 1000px black;
            }
            body {
              background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPe9wsvOohitqcKi_KuS10bclNS_s90topew&usqp=CAU);
                image-rendering: pixelated;
                background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;
                  position: relative;

              background-color: #eaeff1;
              font-family: "Raleway", sans-serif;
            }@import url("https://fonts.googleapis.com/css2?family=Raleway:wght@500;600&display=swap");
            /*for cards*/
.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.
#container {
  width:20% ;
  height: 20%;
  
size: 100%;
  /* Center the container in middle on horizontal axis */
 

  /* Add empty space above the container (20% of the view height) */
  margin-top: 20vh;
}

/* Style div elements that have class equal to name */
.name {
  font-size: 24px;
  font-weight: 600;

  margin-top: 1px;
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
                    <a class="navbar-brnd" ><h1 >Library Managment System(LMS)</h1></a>
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
            <marquee id="welcome">This is library Managment System. Library opens at 8:00 Am and close at 6:00 Pm</marquee>
        </span><br>
        
            
        <div class="row">
            <div class="container" >
                <div class="card " ><a href="view_issued_book.php">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpou_fMJXijDmCF3ueMmjXX84eO402a-hnBg&usqp=CAU" alt="Lago di Braies"></a>
                    <div class="name">Borrowed Books</div>
                    <div class="card-body"><p class="card-text">No. of total Barrowed Books:<?php echo get_user_issue_book_count();?></p>
                        <a   href ="view_issued_book.php"class ="button12"><center>View Barrowed Books</center></a>
                    </div>
                </div>
            </div>
            

       
    </body>
</html>