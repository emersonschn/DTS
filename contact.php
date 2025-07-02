    <?php
    $name = "Contact"; 
    include_once "quick/header.php";
    ?>
    
  
    <link rel="stylesheet" href="ContactForm/style.css" />
    <img src="images/field.jpeg" class="field" alt=""/>
    <div class="container">
      
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            test
          </p>

          <div class="info">
            <div class="information">
              <img src="ContactForm/img/location.png" class="icon" alt="" />
              <p>80 East 13th Avenue, Columbus OH 43210</p>
            </div>
            <div class="information">
              <img src="ContactForm/img/email.png" class="icon" alt="" />
              <p><a href="mailto:info@dtsalpha.com"> info@dtsalpha.com </a> </p>
            </div>
            <div class="information">
              <img src="ContactForm/img/phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
           
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="https://formsubmit.co/schnipke.90@buckeyemail.osu.edu" method="POST">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Name</label>
              <span>Name</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="ContactForm/app.js"></script>
  
    <?php    
  include_once "quick/footer.php";
  ?>

