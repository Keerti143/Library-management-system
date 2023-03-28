<?PHP
    require('functions.php');
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"keety");
    $s_no="";
    $book_id="";
    $book_name="";
    $author="";
    $student_name="";
    $issued_date="";
    $due_date="";
    $query ="SELECT issued_books.s_no, issued_books.book_name,issued_books.book_author,issued_books.book_id,users.name, issued_books.issued_date,issued_books.due_date FROM issued_books left join users on issued_books.student_id=users.id";
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
             body {
                background-color: rgb(132, 142, 142);
                background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;
                  position: relative;
              }
              table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
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
                              <button class="drpbtn" style="background-color: white;">Book</button>
                              <div class="dropdown-content">
                                <a  class="dropdown-item"href="add_book.php">Add New Book</a>
                                <a  class="dropdown-item"href="manage_book.php">Manage Books</a>
                              </div>
                            </div>

                    </li>
                
                    <ul class="nav navbar-nav navbar-right">
                      <li class="nav-item dropdown">
                              <button class="drpbtn" style="background-color:white">Category</button>
                              <div class="dropdown-content">
                                <a  class="dropdown-item"href="add_author.php">Add New Category</a>
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

                </ul>
            </ul></ul></ul>
            </div>
        
        </nav>
    
        <br>
        <span>
            <marquee id="welcome">This is library Managment System. Library opens at 8:00 Am and close at 6:00 Pm</marquee>
        </span><br>
    <div class="row">
        <div class="col-md-2"></div>
         <div class="col-md-8">
            <form>
                <table class="table-boarder" width="900px" style="text-align: center;">
                    <tr>
                        <th>Issued Number:</th>
                        <th>Book Name:</th>
                         <th>Author :</th>
                          <th>Book ID:</th>
                         <th>Student Name:</th>
                          <th>Issued Date:</th>
                         <th>Due Date:</th>
                    </tr>
                    <?php
                     $query_run=mysqli_query($connection,$query);
                     while($row = mysqli_fetch_assoc($query_run)){
                         $s_no=$row['s_no'];
                        $book_name=$row['book_name'];
                        $author_name=$row['book_author'];
                        $book_id=$row['book_id'];
                        $student_name=$row['name'];
                        $issued_date=$row['issued_date'];
                        $due_date=$row['due_date'];
                        ?>
                        <tr>
                             <td><?php echo $s_no;?></td>
                             <td><?php echo $book_name;?></td>
                              <td><?php echo $author_name;?></td>
                              <td><?php echo $book_id;?></td>
                              <td><?php echo $student_name;?></td>
                              <td><?php echo $issued_date;?></td>
                              <td><?php echo $due_date;?></td>
                             
                        </tr>
                        <?php
                     }
                    ?>
                </table>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>

</body>
</html>
        