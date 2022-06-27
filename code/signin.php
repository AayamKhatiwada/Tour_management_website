<?php 
    include("connection.php");
    session_start();
    $_SESSION['auth'] = '0';
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Signin page</title>
  <link rel="stylesheet" href="signin.css">
</head>
<body>
    <h2>Login or Sign Up </h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="signup.html">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="POST">
                <h1>Login</h1>
                <input type="email" placeholder="Email" name="email"/>
                <input type="password" placeholder="Password" name="password" />
                <a href="#">Forgot your password</a>
                <button name="Signin" Type="Signin">Login</button>
                <a href="home.php"><button>cancel</button></a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello!</h1>
                    <p>Enter your personal details and begin your journey with us</p>
                    <a href="signup.php"><button class="ghost" id="signUp">Sign up</button></a>
                </div>
            </div>
        </div>
    </div>

    <?php
        if (isset($_POST['Signin'])){
            $query= "SELECT * FROM `user` WHERE email = '$_POST[email]' AND password='$_POST[password]'";
            $result = mysqli_query($con,$query);
            while($rows = mysqli_fetch_array($result)){
                $_SESSION['number'] = $rows[0];
                $_SESSION['name'] = $rows[1];
            }
            if(mysqli_num_rows($result)==NULL){
                echo "<script>alert('Incorrect email and password')</script>";
            }
            else{
                $_SESSION['auth'] = '1';
                header("location: home.php");
            }
        }
     ?>

</body>
</head>