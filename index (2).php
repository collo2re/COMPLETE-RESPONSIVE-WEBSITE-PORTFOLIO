<!DOCTYPE html>
<html lang = "en"> 
  
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Collins Ochieng">
        <meta name="description" content="This page contains all the things I am learning how to create as I learn HTML">
        <title>My First Web Page</title>
        <link rel="icon" href="jsu.jpeg" type="image-/x-icon">
        <link rel="stylesheet" href="main.css" type="text/css">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"  -->
<!-- integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
   <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    </head>
    <body>
      <header>
      <h1> My Goals for the year</h1>

      <nav aria-label="primary nav">
         <ul>
          <li>
            <a href="#html"> Learning HTML</a>
          </li>
          <li>
            <a href="#vacation">Planning a Vacation</a>
          </li>
          <li>
            <a href="#contact">Contact Me</a>
          </li>
        </ul>
      </nav>
      </header>

      <hr>
      <main>
      <article id="html">
      <h2>I'm ready to learn HTML</h2>
      <p>This is my first web page</p>  
      <section>
        <h3>HTML5</h3>
          <img src="img/jsu.jpeg" alt="HTML5 Logo" title="I am learning HTML5" width="300" height="300">
      <figure>
        <figcaption>An Example of HTML5 code</figcaption>
          <p>
            <code>&lt;h1&gt;Hellow World&lt;/h1&gt;</code>
          </p>
        </figure>
      </section>
      <section>
      <h3>My Daily Schedule</h3>
      <p>Let me tell you how:</p>
        <ol>
         <li>...I learn about web dev.</li>
         <li>...I plan out my schedule.</li>
         <li>...I use resources from<abbr title="Mozilla Development Network">
          <a href="https://developer.mozilla.org/">MDN.</a></abbr></li>
        </ol> 
        <aside>
          <details>
            <summary>Gues the <mark>number of hours </mark>I code per day</summary>
            <p>I start at <time datetime="08:00">8 am</time> and I write code for <time datetime="PT3H">3 hours</time> every morning</p>
          </details>
        </aside>
        <br>
      <table style="width: 50%">
       <caption>My Daily Schedule</caption>
          <thead>
          <tr>
            <th>&nbsp;</th> 
            <th scope="col">Time</th>
            <th scope="col">Activity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           <th scope="row">Morning</th>
            <td>
              <time datetime="08:00">8am</time>-<time datetime="11:00">11am</time>
            </td>
            <td>Write Code</td>
          </tr>
          <tr>
            <th scope="row">Break</th>
            <td>
              <time datetime="11:00">11am</time>-<time datetime="12:00">12pm</time>
            </td>
            <td>Eat Lunch</td>
          </tr>
          <tr>
            <th scope="row">Afternoon</th>
            <td>
              <time datetime="12:00">12pm</time>-<time datetime="17:00">5pm</time>
            </td>
            <td>Study for Other Courses</td>
          </tr>
          <tr>
            <th scope="row">Evening</th>
            <td rowspan="2">All Other Times</td>
            <td>Free Time</td>
          </tr>
          <tr>
          <th scope="row">Night</th>
          <td>Sleep</td>
        </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3">And that's what I do everyday. 5 days a week. Just Eat, Sleep, Code ... and recharge!</td>
          </tr>
        </tfoot>
      </table>
      </section>
      </article>

      <hr>

     
       <article id="vacation">
      <h2>I Am Also Planning a Vacation</h2>
      <p>I've been working hard and <em>really need a gateaway</em></p>  
      <p>I live in <abbr title="Luanda">LA</abbr> and so I want to visit a beach</p>

      <section>
      <h3>Places I'd like to Visit</h3>
      <ul>
      <li><p>I've heard the good things about Nyali beach and Ukunda beach.</p></li>
      </ul>
      <figure>
      <img src="img/rodgers0172.jpg" alt="Nyali Beach" title="I want to visit Nyali Beach" width="400" height="300" loading="lazy">
      <figcaption>Ukunda Beach Amazing</figcaption>
       </figure>
       <ul>
      <li><p>I've heard good things about going here:</p>
          <address>
              Mombasa City <br>
              Coast County <br>
              Kenya 2023
      </address> 
    </li>
  </ul>
      <figure>
      <img src="img/kirsty72.jpg" alt="Nyali Beach" title="It's 5 oclock somewhere!" width="300" height="250" loading="lazy">
      <figcaption>
        A Nyali Beach image
      </figcaption>
      </figure>
     </section>
      <!--  TODO: Add more places-->
    <section>
      <h3>Places I want to Avoid</h3>
      <dl>
          <dt>North Pole</dt>
          <dd>I hear this is <strong>Cold</strong></dd>

          <dt>South Pole</dt>
          <dd>This is also cold</dd>

          <dt>Mountain Tops</dt>
          <dd>These are also cold</dd>
      </dl>
    </section> 
       </article>

       <hr>

       <article id="contact">
        <h2>Contact Me</h2>
        <p>I'd really like to hear from you!</p>
        <form action="http://httpbin.org/get" method="get">
          <fieldset>
            <legend>Personal Info</legend>
          <p>
          <label for="firstName">First Name:
            <input type="text" name="firstName" id="firstName" placeholder="Caleb" autocomplete="on" required autofocus>
          </label> 
        </p>
          <p>
          <label for="lastName">Last Name:
            <input type="text" name="lastName" id="lastName" placeholder="Otieno" autocomplete="on" required>
          </label>
        </p>
          <p>
          <label for="password">Password:
            <input type="password" name="password" id="password" placeholder="your secret" required>
          </label>
        </p>
          <p>
          <label for="phone">Phone:
            <input type="tel" name="phone" id="phone" placeholder="0701-488-299" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required>
          </label>
        </p>
          <p>
          <label for="year">Favorite Year:
            <input type="number" name="year" id="year" min="1950" max="2023" step="1" value="1970">
          </label>
        </p>
        <p>
          <label for="coffee"> Favorite coffee</label>
            <select name="coffee" id="coffee">
              <optgroup label="Coffees">
              <option value="regular coffee">Regular coffee</option>
              <option value="iced coffee">Iced Coffee</option>
            </optgroup>
            <optgroup label="Exprosso drinks">
              <option value="latte">Latte</option>
              <option value="cappuccino" selected>Cappuccino</option>
              <option value="cortado">Cortado</option>
              <option value="americano">Americano</option>
            </optgroup>
              <option value="others">others</option>
          </select>
        </p>
      </fieldset>
      <br>
      <fieldset>
        <legend>What is your favourite food?</legend>
        <p>
        <input type="radio" name="food" id="tacos" value="tacos">
        <label for="tacos">Tacos</label>
      </p>
        <p>
        <input type="radio" name="food" id="pizza" value="pizza">
        <label for="tacos">Pizza</label>
      </p>
        <p>
        <input type="radio" name="food" id="others" value="others">
        <label for="tacos">Others</label>
      </p>
      </fieldset>
      <br>
      <fieldset>Do you have pets?</fieldset>
      <p>
        <input type="checkbox" name="pets" id="dog" value="dog">
        <label for="dog">Dog</label>
      </p>
      <p>
        <input type="checkbox" name="pets" id="cat" value="cat">
        <label for="dog">Cat</label>
      </p>
      <p>
        <input type="checkbox" name="pets" id="goose" value="goose">
        <label for="dog">Goose</label>
      </p>
      <p>
        <input type="checkbox" name="pets" id="fish" value="fish">
        <label for="dog">Fish</label>
      </p>
      <br>
      <fieldset>
        <legend>Send me a Note</legend>
        <label for="message">Your Message:</label>
        <br>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message here"></textarea>
      </fieldset>
      <br>
      <button type="submit">Submit</button>
      <button type="reset">Reset</button>
      <button type="submit" formaction="https://httpbin.org/post" formmethod="post">Post</button>
        </form>

       </article>
  </main>
      <hr>
            <footer>
        <p>
      &lt;&lt;&lt; &copy; <a href="about.php">Collins Ochieng</a> &gt;&gt;&gt;
        </p>
        <p><a href="#">Back to Top</a></p>
    </footer>
    </body>
    </html>
