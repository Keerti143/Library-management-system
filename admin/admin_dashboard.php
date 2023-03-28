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

            img {
              width: 100%;
               border-radius: 5px;
              height: 214px;
              object-fit: cover;
            }.card {
              /* Change background color */
              background-color: white;
              /* Add border */
              border: 1px solid #bacdd8;
              border-radius: 5px;
              /* Add space between the border and the content */
             width: 50%;
             height: 100%;
              margin-bottom: 50px;
              margin: 10px;
              display: inline-block;
             
            }
            .card:hover{
                box-shadow: 200px 200px 1000px black;

            }
            body {
              
                background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;
                  position: relative;

              background-color: #eaeff1;
              font-family: "Raleway", sans-serif;
            }@import url("https://fonts.googleapis.com/css2?family=Raleway:wght@500;600&display=swap");

            
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
                    <li class="nav-item">
                        <a class="nav-link" href="signup_admin.php">Admin Register</a>
                    </li>
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
        
           
        <div class="row">
            <div class="container" >
                <div class="card " >
                    <a href="regusers.php">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpou_fMJXijDmCF3ueMmjXX84eO402a-hnBg&usqp=CAU" alt="Lago di Braies"></a>
                    <div class="name">Registered Users</div>
                    <div class="card-body"><p class="card-text">No. of total users:<?php echo get_user_count ();?> </p>
                        <a   href ="regusers.php"class ="button12"><center>View Registerd Users</center></a>

                    </div>
                
                </div>
            </div>
            
            
            <div class="container" >
                <div class="card " >
                    <a href="regbooks.php">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtReU98b-aS4kOvEeEG6Hi48wybHwhXgWNMw&usqp=CAU" alt="Lago di Braies"></a>
                    <div class="name">Registered Books</div>
                    <div class="card-body"><p class="card-text">No. of available Books:<?php echo get_book_count ();?></p>
                        <a href="regbooks.php"class ="button12"><center>View Registerd Books</center></a>
                    </div>
                </div>
            </div>
           
            <div class="container" >
                <div class="card " >
                    <a href="regcategory.php">
                    <img src="https://media.istockphoto.com/id/1129874863/photo/books-on-display-in-the-corner-of-a-second-hand-bookstore.jpg?s=1024x1024&w=is&k=20&c=ycJZFkmBwZHm9U2Q4uCeOa2lhvmfbgXzE_BibZ0Cdl0=" alt="Lago di Braies"></a>
                    <div class="name">Registered Categories</div>
                    <div class="card-body"><p class="card-text">No. of Registerd book's Categories :<?php echo get_category_count ();?></p>
                        <a  href="regcategory.php"class ="button12"><center>View Registerd Categories</center></a>
                    </div>
                </div>
            </div>
        
        
            <div class="container" >
                <div class="card " >
                    <a href="view_issued_book.php">
                    <img src="https://media.istockphoto.com/id/683349600/photo/right-hand-of-young-man-picking-a-book-from-bookshelf-in-library.jpg?s=612x612&w=0&k=20&c=qzS1MJS1EDg3-430xQrLF6l62vPFB1GzGz2I4bi00Ks=" alt="Lago di Braies"></a>
                    <div class="name">Issued Books</div>
                    <div class="card-body"><p class="card-text">No. of Issued books:  <?php echo get_issued_book_count ();?></p>
                        <a href="view_issued_book.php"class ="button12"><center>View Issued Books</center></a>
                    </div>
                </div>
            </div>
            <div class="container" >
                <div class="card " >
                    <a href="regauthor.php">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUWiVVNnWKNCHapP6qb82oCJnmPhdkcl1PA&usqp=CAU" alt="Lago di Braies"></a>
                    <div class="name">Registered Authors</div>
                    <div class="card-body"><p class="card-text">No. of available authors: <?php echo get_author_count ();?></p>
                        <a  href="regauthor.php"class ="button12"><center>View Authors</center></a>
                    </div>
                </div>
            </div>
    </body>
</html>