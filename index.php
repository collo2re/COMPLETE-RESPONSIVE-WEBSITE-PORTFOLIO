<?php
session_start();
if (!isset ($_SESSION["user"])){
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my Website & Portfolio</title>

    <!--box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"  -->
<!-- integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
<!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
</head>
<body>
    <header class="header">
    <a href="#portfolio" class="logo">Portfolio</a>

    <i class='bx bx-menu' id="menu-icon"></i>

    <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
        <a href="logout.php">Logout!</a>
    </nav>
</header>

<!--home section design-->
<section class="home" id="home">
<div class="home-content">
<h3>Hello, Its Me</h3>
<h1>King Kollo</h1>
<h3>And I am a <span>Frontend and a Backend Website Developer</span></h3>
<p>“Measuring programming progress by lines of code is like measuring aircraft building progress by weight.” “I choose a lazy person to do a hard job. Because a lazy person will find an easy way to do it.” “If you ever talk to a great programmer, you'll find they know their tools like an artist knows their paintbrushes.”</p>
<div class="social-media">
<a href="https://web.facebook.com/pages/creation/?ref_type=comet_home"><i class='bx bxl-facebook'></i></a>
<a href="https://twitter.com/shanacol"><i class='bx bxl-twitter'></i></a>
<a href="#"><i class='bx bxl-instagram-alt'></i></a>
<a href="#"><i class='bx bxl-linkedin'></i></a>
<a href="#"><i class='bx bxl-tiktok'></i></a>
<a href="#"><i class='bx bxl-whatsapp'></i></a>
</div>
<br>
<a href="/collins' updated cv.pdf" download class="btn">Download Cv</a>
</div>
<div class="home-image">
    <img src="Capture.PNG" alt="home image">
</div>  
</section>
<!--about section design-->

<section class="about" id="about">
    <div class="about-img">
<img src="about.jpeg" alt="">
    </div>
    <div>
        <img src="love (2).jpeg" height="400px" width="500px">
    </div>
<div class="about-content">
    <h2 class="heading">About <span>Me</span></h2>
    <h3>Frontend Developer!</h3>
    <p>Hi, I’m King Kollo and I’m a dreamer, a doer, and a believer in magic.
        I’m not perfect, but I’m perfectly me and I’m on a mission to live my best life. As a programmer, My ultimate goal is to use my skills and expertise to make a positive impact in the world. I believe that success is not just about achieving your own goals, but about helping others to achieve theirs as well.</p>
    <a href="#"class="btn">Read More</a>
</div>
</section>
<!--service section design-->
<section class="service" id="services">
    <h2 class="heading">Our <span>Services</span></h2>

   <div class="service-container">
    <div class="service-box">
    <i class='bx bx-code-alt'></i>
   <h3>Web Development</h3>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo voluptas eius in deleniti, distinctio quae corrupti odit quam debitis. Officia?</p>
   <a href="#" class="btn">Read More</a>
</div>

    <div class="service-box">
    <i class='bx bxs-paint'></i>
   <h3>Graphic Design</h3>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo voluptas eius in deleniti, distinctio quae corrupti odit quam debitis. Officia?</p>
   <a href="/Designed Eulogy.pdf" class="btn">Read More</a>
</div>

<div class="service-box">
    <i class='bx bx-bar-chart-alt'></i>
    <h3>Digital Marketing</h3>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo voluptas eius in deleniti, distinctio quae corrupti odit quam debitis. Officia?</p>
   <a href="#" class="btn">Read More</a>
</div>
</div>
</section>

<!--portfolio section design-->
<section class="portfolio" id="portfolio">
    <h2 class="heading">Latest <span>Project</span></h2>
<div class="portfolio-container">
    <div class="portfolio-box">
        <img src="comps.jpg" alt="portfolio image">
        <div class="portfolio-layer">
            <h4>Web Design</h4>
            <p>This Project is designed for you to contact me and tell me about yourself</p>
            <a href="index (2).php"><i class='bx bx-link-external'></i></a>
        </div>
    </div>

    <div class="portfolio-box">
        <img src="comp.jpg" alt="portfolio image">
        <div class="portfolio-layer">
            <h4>Web Design</h4>
            <p>This project is all about creating an online website for viewing and downloading video and images!</p>
            <a href="index (3).php"><i class='bx bx-link-external'></i></a>
        </div>
    </div>

    <div class="portfolio-box">
        <img src="webb.jpg" alt="portfolio image">
        <div class="portfolio-layer">
            <h4>Web Design</h4>
            <p>This project is all about creating a responsive Tacos Hotel Menue website<</p>
            <a href="index (4).php"><i class='bx bx-link-external'></i></a>
        </div>
    </div>
    <div class="portfolio-box">
        <img src="ethan.jpeg" alt="portfolio image" width="300
        " height="250">
        <div class="portfolio-layer">
            <h4>Web Design</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, alias?</p>
            <a href="#"><i class='bx bx-link-external'></i></a>
        </div>
    </div>

    <div class="portfolio-box">
        <img src="love.jpeg" alt="portfolio image" width="300
        " height="250">
        <div class="portfolio-layer">
            <h4>Web Design</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, alias?</p>
            <a href="#"><i class='bx bx-link-external'></i></a>
        </div>
    </div>

    <div class="portfolio-box">
        <img src="keybod.jpg" alt="portfolio image" width="300
        " height="250">
        <img src="/" alt="">
        <div class="portfolio-layer">
            <h4>Web Design</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, alias?</p>
            <a href="#"><i class='bx bx-link-external'></i></a>
        </div>
    </div>

</div>
</section>
<!--contact section design-->
<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Us!</span></h2>
    <form id = "contact-form" method = "post" role = "form">
        <div class="input-box">
            <input id="form_fullName" name = "fullname" type="text" placeholder="Full Name">
            <input id="Form_email" name="email" type="Email" placeholder="Email Address">
        </div>
        <div class="input-box">
            <input id="form_mobileNumber" name="phone" type="number" placeholder="Mobile Number">
            <input id="form_emailSubject" name="email_Subject"type="text" placeholder="Email Subject">
        </div>
        <textarea name="message" id="form_message" cols="30" rows="10" placeholder="Your Message"></textarea>
        <input type="submit" name="submit" value="Send Message" class="btn">
    </form>
    <?php
    if (isset($_POST['submit'])){
        include_once 'function.php';
        $obj=new complete_responsive_website_portfolio ();
        $res=$obj->contact_me($_POST);
        if($res==true){
            echo "<script>alert('Query Successfully Submitted. Thank You')</script>";
        }else{
            echo "<script>alert('Something Went Wrong!')</script>";
        }
    }
    ?>
</section>
<!--footer design-->
<footer class="footer">
    <div class="footer-text">
        <p>Copyright &copy; 2023 by KingKollo | All Rights Reserved</p>
    </div>
    <div class="footer-iconTop">
        <a href="#home"><i class='bx bxs-up-arrow-alt'></i></a>
    </div>
</footer>


<!--custom js-->
    <script scr="js/script.js"></script>

</body>
</html>