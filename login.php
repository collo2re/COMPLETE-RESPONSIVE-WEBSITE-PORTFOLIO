<?php
session_start();
if (isset ($_SESSION["user"])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
       <link rel="stylesheet" href="stinko.css">
</head>
<body>
  <section>
    <div class="wrapper container">

    <?php 
 if (isset($_POST["login"])) {
     $userName =$_POST ["username"];
     $password =$_POST ["password"];
     require_once "database.php";
     $sql = "SELECT * FROM users WHERE username = '$userName'";
     $result = mysqli_query($conn, $sql);
     $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
     if ($user) {
       if (password_verify($password, $user['password'])){
        session_start();
        $_SESSION["user"] = ["yes"];
        header("Location: index.php");
        die();
        }else{
         echo "<div class = 'alert alert-danger'>Password does not match does not match!</div>";
       }
     }else{
       echo "<div class = 'alert alert-danger'>Username does not match!</div>";
     }
   }
 ?>
    <span class="bg-animate"></span>
      <span class="bg-animate2"></span>
       
        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21;">Login</h2>
            <form action="login.php" method = "post">
                <div class="input-box animation" style="-i:1; --j:22;">
            <input type="text" required name = "username">
                        <label id="username" name = "username">Username</label>
                        <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password" required name = "password">
                        <label id="password" name = "password">Password</label>
                        <i class='bx bxs-lock' ></i>
                </div>
              <button input type = "submit" value = "login" name = "login"class="btn animation" style="--i:3; --j:24;">
                Login
              </button>  
              <div class="logreg-link animation"  style="--i:4; --j:25;"><p>
                Don't have an account? <a href="registration.php" class="register-link"> Sign Up!</a></p>
              </div>                       
            </form>
                                                                                
        </div>
        <div class="info-text login">
        <h2 class="animation" style="--i:0; --j:20;">White Family!</h2>
 <p class="animation" style="--i:1; --j:21">We deal with Back End and Front End Website Development, Graphic Designs, Online Marketing and 
Online Cyber Services, e.t.c.    </div>

          
          