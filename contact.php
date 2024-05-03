<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="King Kollo">
    <meta name="description" content="Contact information for The Little Taco Shop">
    <title>Contact Us - LTS</title>
    <link rel="icon" href="/html5icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="main.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"  -->
<!-- integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
   <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
</head>
    <body>
        <header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li>
                    <a href="index (4).php">Home</a>
                </li>
                <li>
                    <a href="/#about">About <abbr title="The Little Taco Shop">LTS</abbr></a>
                </li>
                <li>
                    <a href="/#menu">Our Menu</a>
                </li>
                <li>
                    <a href="hours.php">Contact Us</a>
                </li>
            </ul>
        </nav>
        <figure>
            <img src="/Homemade-tasty-tacos-Stock-Photo-09.jpg" alt="tacos and a adrink" title="so tasty and appealing tacos" width="400" height="267" loading="lazy">
            <figcaption>Tacos and a drink</figcaption>
        </figure>
    </header>
        <hr>
        <main>
            <section>
            <h2>Our Contact form</h2>
            <form action="https://httpbin.org/get" method="get">
            <fieldset>
                <legend>Send Us a Message</legend>
            <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="your name" required>
            </p>
            <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="your email" required>
            </p>
            <p>Your message: <br>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="your message"></textarea>
        </p>
            <br>
        </fieldset>
        <br>
           <button type="reset">Reset</button>
           <button type="submit" formaction="http://httpbin.org/post" formmethod="post">post</button>
           <button type="submit">Send</button>
        </form>
         </section>
         <section>
           <h2>Our Location</h2>
           <address>
            555 Taco Temptation Lane, Suit T <br>
            Kansas City, MO 55555-5555 <br>
            <br>
            Phone: <a href="tel:+254701488299">0701488299</a>
            </address>
        <br>
        <a href="#">Back to Top</a>
    </section>
        </main>
        <hr>
        <footer>
            <p>copyright &copy;The Little Taco Shop</p>
        </footer>  
    </body>
</html>