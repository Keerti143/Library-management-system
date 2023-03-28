<?PHP
    require('functions.php');
    session_start();
?>
<!DOCTYPE html>
<html>
    <Head>
        <style type="text/css">
            body{
                    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSS_YJ8jz7N2nFBIY1IsUZQzsUFwaoAhsPvQ&usqp=CAU);
                    background-repeat: no-repeat;
                    background-size: cover;

                }
            
            .nav-item{
                display: inline-flex;
            }
            .drpbtn{
                color: black;
                padding-right: 100%;
            }
            .drpbtn:hover {   
           
        background-color:black;
        color: black;
    }   

            ul{
                display: inline-block;
            }

       .rows{
    
                    background-color :white;
                    width: 50%;
                    margin-left:25%;
   
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
        </nav>
            
        <nav class="navbar navbar-expand-lg navbar-white" style="background-color:none;">

                <ul class="nav navbar-nav navbar-center">
                    <li class="nav-item">
                        <a href="admin_dashboard.php" class="navv-link" style="color: black;">Dashboard</a>
                    </li>

                    <ul class="nav navbar-nav navbar-left">
                    <li class="nav-item dropdown">
                              <button class="drpbtn" style="background-color:white;">Book</button>
                              <div class="dropdown-content">
                                <a  class="dropdown-item"href="add_book.php">Add New Book</a>
                                <a  class="dropdown-item"href="manage_book.php">Manage Books</a>
                              </div>
                            </div>

                    </li>
                
                    <ul class="nav navbar-nav navbar-right">
                      <li class="nav-item dropdown">
                              <button class="drpbtn" style="background-color:white;">Category</button>
                              <div class="dropdown-content">
                                <a  class="dropdown-item"href="add_category.php">Add New Category</a>
                                <a  class="dropdown-item"href="manage_cat.php">Manage Category</a>
                              </div>
                            </div>
                    </li>
                
                     <ul class="nav navbar-nav navbar-leftt">
                     <li class="nav-item dropdown">
                              <button class="drpbtn" style="background-color:white;">Author</button>
                              <div class="dropdown-content">
                                <a  class="dropdown-item"href="add_author.php">Add New Author</a>
                                <a  class="dropdown-item"href="manage_author.php">Manage Authors</a>
                              </div>
                            </div>
                    </li><
                     <ul class="nav navbar-nav navbar-leftt">
                    <li class="nav-item">
                        <a href="issue_book.php" class="navv-link" style="color: black;">Issue Book</a>
                    </li>

                </ul>
                 <ul class="nav navbar-nav navbar-leftt">
                    <li class="nav-item">
                        <a href="return_book.php" class="navv-link" style="color: black;">Return Book</a>
                    </li>

                </ul>
            </ul></ul></ul>
            </div>
        
        </nav>
    
        <br>
        <span>
            <marquee id="welcome"> This is library Managment System. Library opens at 8:00 Am and close at 6:00 Pm</marquee>
        </span><br>
        
           <div class="rows">
            <div class="col-md-4"></div>
            <div class="col-md-4">
               <form action="add_category2.php" method="post">
                <div class="form-group">
                    <label>Category ID:</label>
                    <input type="text" name="cat_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Category Name:</label>
                    <input type="text" name="cat_name" class="form-control" required>
                </div>
               
                <button class="button" name="add_name">Add Category</button>
               </form> 
            </div>
            <div class="col-md-4"></div>
        </div>
          </body>
</html>