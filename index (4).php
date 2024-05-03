<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="King Kollo">
    <meta name="description" content="This page is test on HTML on how to create a website for The Little Taco Shop">
    <title>The Little Taco Shop</title>
    <link rel="icon" href="/html5icon.jpg" type="image/x-icon">
<link rel="stylesheet" href="main.css" type="text/css">
<!-- <link rel="stylesheet" href="css/style (2).css"> -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"  -->
<!-- integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
   <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
</head>
    <body>
        <header>
        <h1>Welcome to The Little Taco Shop</h1>
        <nav>
            <ul>
                <li>
                    <a href="#about">About <abbr title="The Little Taco Shop">LTS</abbr></a>
                </li>
                <li>
                    <a href="#menu">Our Menu</a>
                </li>
                <li>
                    <a href="hours.php">Store Hours</a>
                </li>
                <li>
                    <a href="contact.php">Contact Us</a>
                </li>
            </ul>
        </nav>
        <figure>
            <img src="/images.jpg" alt="taco shop food image" title="i want to create a taco shop website" width="300" height="267" loading="lazy">
            <figcaption>Tacos and a drink</figcaption>
        </figure>
    </header>
        <hr>
        <main>
            <article id="about">
        <h2>About <abbr title="littleTacoShop">LTS</abbr></h2>
        <p><abbr title="littleTacoShop">LTS</abbr>was founded in <time datetime="2002">2002</time>.Our shop was built from <strong>a love of tacos.</strong> We hope our shop add a unique and an interesting place to our little town.</p>
        <h3>Taco Trivia</h3>
        <aside>
            <details>
            <summary>When did Tacos first appeared in the US?</summary>
            <p>Jeffrey M. Pilcher, Taco historian and professor of history at the University of Minnesota, says the earliest mention of Tacos in the United States are in a newspaper from <time datetime="1905">1905</time>.</p>
            <p>(Source: <cite><a href="https://smithsonianmag.com/arts-culture/where-dd-the-taco-come-from-81228162/">Smithson Magazine)</a></cite></p>
        </details>
        </aside>
        </article>
        <hr>
    <article id="menu">
        <h2>Our Menu</h2>
       
        <table class ='table'>
            <caption>Our Tacos</caption>
            <thead>
                <tr>
                    <th>Tacos</th>
                    <th scope="col"><abbr title="Quantity">Qty</abbr></th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" rowspan="3">Crunchy</th>
                    <td>1</td>
                    <td>$1.50</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>$2.50</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>$3.25</td>
                </tr>
                <tr>
                    <th scope="row" rowspan="3">Soft</th>
                    <td>1</td>
                    <td>$2.00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>$3.50</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>$4.50</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Chips &amp; Salsa $2</td>
                </tr>
            </tfoot>
        </table>


            
            
        </article>
            <br>
            <p>
                <a href="#">Back to Top</a>
            </p>
           
    </main>
    <footer>
        <p>copyright &copy;The Little Taco Shop</p>
    </footer> 
</body> 
</html>