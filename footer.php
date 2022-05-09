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
<?php wp_footer(); ?>
</body>
</html>
