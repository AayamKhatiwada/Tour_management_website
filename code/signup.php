<?php 
    include("connection.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp page</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form method="POST">
                <h1 style="margin: 15px">Sign Up</h1>
                <label for="email"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Phone number</b></label>
                <input type="text" placeholder="Enter Phone no." name="phoneno" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label>
                 <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <div class="clearfix">
                    <button type="submit" class="signupbtn" style="margin:5px;" name="submit"><a> Sign Up</a></button>
                    <button type="submit" class="signupbtn"><a href="signin.php">Cancel</a></button>
                </div>

            </form>
            <?php
        if (isset($_POST['submit'])){
            $name=$_POST['username'];
            $email=$_POST['email'];
            $phoneno=$_POST['phoneno'];
            $password=$_POST['psw'];

            $query= "INSERT INTO user(username, email, phoneno, password) VALUES ('$name','$email','$phoneno','$password')";
            if (mysqli_query($con,$query)){
                header("Location: signin.php");
            }
            else{
                echo "<script>alert('Data is not inserted')</script>";
            }

        }

     ?>
        </div>

</body>

</html>