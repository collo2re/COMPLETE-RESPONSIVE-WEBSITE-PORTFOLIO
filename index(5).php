<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div>

    </div>
    <div class="box">
        <span class="borderLine">
        <form>
            <h1>WHITE FAMILY<br> Co.ltd</h1>
            <h2>Sign In</h2>
            <div class="inputBox">
                <i class="fas fa-user"></i>
                <input type="email" placeholder="Type your username" id="username">
           
            </div>
            <div class="inputBox">
                <i class="fas fa-lock" id="Password"></i>
                <input type="password" id="password" placeholder="Type your password">
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="#">Signup</a>
            </div>
            <button class="login-btn" onclick="func()">
                Login
            </button>
            <!-- <input type="submit" value="Login"> -->
        </form>
    </span>
    </div>
    <script>
    function func(){
        var email = document.getElementById("username").value;
        var pass = document.getElementById('password').value;
        if (email == 'ochiengc026@gmail.com' &&  pass == '0701488299'){
            alert("Successful !")
            window.location.assign("index.html")
        }
        else{
            alert("Wrong entry invalid")
        }
    }
    </script>
</body>
</html>