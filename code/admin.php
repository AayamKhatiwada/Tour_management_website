<?php 
            include("connection.php");
         ?>
<html>
    <head>
        <title>Login</title>
    <link rel="stylesheet" href="admin.css">
    </head>

    <body>
       <h1 id="heading1">Welcome Admin</h1>
       <h1 id="heading1">Please login</h1>
       <img src="https://img.icons8.com/cute-clipart/344/login-rounded-right.png" alt="Login Logo" style="width:100px; height:100px;">
     <div>
         
         <form method="POST" class="myForm" name="myForm">
             <div class="input-container">
                 <input type="text" placeholder="Admin_name" name="Admin_name" class="input-field" required>
             </div>
             <div class="input-container">
                <input type="password" placeholder="Password" name="password" class="input-field"  required>
               </div>
            <div><button type="submit" class="bttn" name="Signin">Log in</button>
         </form>
     </div>
     <?php
        if (isset($_POST['Signin'])){
            $query= "SELECT * FROM `admin` WHERE name='$_POST[Admin_name]' AND password='$_POST[password]'";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)==NULL){
                echo "<script>alert('Incorrect admin name and password')</script>";
            }
            else{
                header("location: dashboard.php");
            }
        }

     ?>
    </body>
</html>
