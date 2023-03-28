<?PHP

    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"keety");
    $s_no="";
    $book_name="";
    $author="";
    $book_id="";
    $issued_date="";
    $due_date="";
    $query ="SELECT  issued_books.s_no, issued_books.book_name,issued_books.book_author,issued_books.book_id,issued_books.issued_date,issued_books.due_date  FROM issued_books WHERE student_id=$_SESSION[id] and status=1";
?>
<!DOCTYPE html>
<html>
    <Head>
        <style type="text/css">
            
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
                    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPe9wsvOohitqcKi_KuS10bclNS_s90topew&usqp=CAU);
                    background-repeat: no-repeat;
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
            
      
            <marquee id="welcome">This is library Managment System. Library opens at 8:00 Am and close at 6:00 Pm</marquee>
        </span><br>
    <div class="row">
        <div class="col-md-2"></div>
         <div class="col-md-8">
            <a><h2>Barrowed books:</h2></a>
            <form>
                <table class="table-boarder" width="900px" style="text-align: center;">
                    <tr>
                         <th>Issued Number:</th>
                        <th>Book Name:</th>
                         <th>Author :</th>
                          <th>Book ID:</th>
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
                        $issued_date=$row['issued_date'];
                        $due_date=$row['due_date'];
                        ?>
                        <tr>
                              <td><?php echo $s_no;?></td>
                             <td><?php echo $book_name;?></td>
                              <td><?php echo $author_name;?></td>
                              <td><?php echo $book_id;?></td>
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
        