<!DOCTYPE html>
<html>
    <Head>
         <style type="text/css">
              
                
                .navbr-brand{
                    margin-bottom: 50px;
                }

        </style>
       
        <title>
            Library Managment System
        </title>
       
        <link rel="stylesheet" href="style.css">
        
    </Head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbr-brand" ><h1 ><br><center>Library Managment System(LMS)</center></h1></a>

                </div>
            </div>
            
        
         </nav><br>
        <span>
            <marquee id="welcome"> This is library Managment System. Library opens at 8:00 Am and close at 6:00 Pm</marquee>
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
                <center><h2>Admin Registration Form</h2></center>
                <form action="register_admin.php" method="post">
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" name="name" class="form-control "required>
                     </div>
                     <div class="form-group">
                        <label for="name">ID:</label>
                        <input type="text" name="id" class="form-control "required>
                     </div>
                     <div class="form-group">
                        <label for="name">Email:</label>
                        <input type="text" name="email" class="form-control "required>
                     </div>
                     <div class="form-group">
                        <label for="name">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="name">Mobile Number:</label><br>
                        <input type="text" name="mobile" class="form-control" required>
                     </div>
                     <div class="form-group">
                        <label for="name">Address:</label><br>
                        <textarea name="address" id="address" cols="30" rows="10"></textarea>
                        
                     </div>
                     <button type="submit" class="button button1">Register</button>
                     
                     
                </form>
        </div>
        </div>
       
    </body>
</html>