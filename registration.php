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
    <link rel="stylesheet" href="stinko.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
              <button input type = "submit" value = "login" name = "login" class="btn animation" style="--i:3; --j:24;">
                Login
              </button>  
              <div class="logreg-link animation"  style="--i:4; --j:25;"><p>
                Don't have an account? <a href="#" class="register-link"> Sign Up!</a></p>
              </div>                       
            </form>
                                                                                
        </div>
        <div class="info-text login">
          <h2 class="animation" style="--i:0; --j:20;">White Family!</h2>
          <p class="animation" style="--i:1; --j:21">We deal with Back End and Front End Website Development, Graphic Designs, Online Marketing and Online Cyber Services, e.t.c.    </div>

        <div class="form-box register container">

        <?php 
        if (isset($_POST["submit"])){
          $userName = $_POST["username"];
          $email = $_POST["email"];
          $password = $_POST["password"];
          $passwordRepeat = $_POST["repeat_password"];

          $passwordHash = password_hash($password, PASSWORD_DEFAULT);

          $errors = array();

          if (empty($userName) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
            array_push($errors, "All fields are required");
          }
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($errors, "Email is not valid");
          }
          if (strlen($password)<8){
          array_push($errors, "Password must be atleast 8 characters long");
          }
          if ($password!==$passwordRepeat){
          array_push($errors, "Password does not match");
          }
          require_once "database.php";
          $sql = "SELECT * FROM users WHERE email = '$email'";
          $result = mysqli_query($conn, $sql);
          $rowCount = mysqli_num_rows($result);
          if ($rowCount>0) {
            array_push ($errors, "email already registered!");
          }
          if (count($errors)>0){
          foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
          }
          }else{
         
          $sql = "INSERT INTO users (username, email, password) VALUES ( ?, ?, ? )";
          $stmt = mysqli_stmt_init($conn);
          $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
          if($prepareStmt) {
            mysqli_stmt_bind_param($stmt,"sss", $userName, $email, $passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'> You are registered Successfully!</div>";
             
              }else{
                   die("something went wrong!");
              }
          }
          }
          ?>

          <h2 class="animation" style="--i:17; --j:0;">Sign Up!</h2>
          <form action="registration.php" method="post">
              <div class="input-box animation form-group" style="--i:18; --j:1">
          <input type="text" name="username" required class="form-control">
                      <label>Username</label>
                      <i class='bx bxs-user'></i>
              </div>
              <div class="input-box animation form-group" style="--i:19; --j:2">
                 <input type="email" name="email" required class="form-control">
                    <label>Email</label>
                    <i class='bx bxs-envelop'></i>
            </div>
              <div class="input-box animation form-group" style="--i:20; --j:3">
                    <input type="password" name="password"required class="form-control">
                      <label>Password</label>
                      <i class='bx bxs-lock' ></i>
              </div>
              <div class="input-box animation form-group" style="--i:21; --j:4">
      <input type="text" name="repeat_password" required class="form-control">
        <label>Repeat Password</label>
        <i class='bx bxs-lock' ></i>
</div>
            <button input type = "submit" Value="Register" name= "submit" class="btn animation btn-primary form-group" style="--i:21; --j:4">
             Sign Up
            </button>  
            <div class="logreg-link animation" style="--i:22; --j:5"><p>Already have an account? <a href="#"class="login-link"> Login </a></p>
            </div>                       
          </form>
      </div>
      <div class="info-text register">
        <h2 class="animation" style="--i:17; --j:0;">White Family!</h2>
        <p class="animation" style="--i:18; --j:1">We deal with Back End and Front End Website
         Development, Graphic Designs, Online Marketing and Online Cyber 
         Services e.t.c. </p>
         </div>
       </div>


    <script src="script (2).js"></script>
  </section>
</body>
</html>