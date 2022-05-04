<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Portfolio Landing/Contact Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="./index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav id="navBar">
      <section><a href="index.html">Home</a></section>
      <section><a href="blog.html">Blog</a></section>
      <section><a href="page.html">Page</a></section>
    </nav>
    <header>
        <h1>
          Wind Spirit
        </h1>
        <h3>
          Graphic Designer: Leanna Britt
        </h3>
    </header>
    <p></p>
    <main>

      <section class="mainarea">
        <div>
          <h3>Post Title</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
          <input type="button" value="Read More">
        </div>
      </section>

      <footer>
          <h4>Contact Information</h4>
          <ul id="contact">
            <li>Email: Lbritt94@gmail.com</li>
            <li>Phone: (850) 206-4137</li>
            <li>Instagram: leanna._.britt</li>
          </ul>
          <h5 class="popupTrigger">Click here to contact now</h5>
          <div id="popupContainer">
            <div id="popupBackground"></div>
            <div id="popup">
              <div>
                <h3>Contact Leanna Now</h3>
                <div>
                  <label for="yourMessage" id="yourMeassage">Your message here:</label>
                  <br>
                  <textarea id="yourMessage" rows="5"></textarea>
                </div>
                <div id="buttonContainer">
                  <input type="button" class="closePopup" value="Close">
                  <input type="reset" value="Click to Reset">
                  <input type="submit" value="Submit">
                </div>
              </div>
            </div>
          </div>
      </footer>
    </main>
    <script type="text/javascript">
      $('.popupTrigger').click(
        function(){
          $('#popupContainer').addClass('popupOpen');
        }
      );

      $('.closePopup').click(
        function(){
          $('#popupContainer').removeClass('popupOpen');
        }
      );
    </script>
  </body>
</html>
