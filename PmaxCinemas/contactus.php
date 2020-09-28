<?php include 'header.php'; ?>

<section class="contactus bg-light">
  <div class="container">
    <div class="row">
      <div class="contact-info col-5 text-center">
        <div class="container">
          <h2>Get In Touch</h2>
          <p>Here is the contact details. For any kind of information get in touchwith us on these details</p>
        </div>
        <div class="phone">
          <div class="row">
            <div class="col-3">
              <span class="fa-stack" style="vertical-align: top;">
                <i class="fal fa-circle fa-stack-2x"></i>
                <i class="fal fa-phone-alt fa-stack-1x"></i>
              </span>
            </div>
            <div class="col-3 mt-auto mb-auto">
              <span>+91 987654321</span>
            </div>
          </div>
        </div>
        <div class="Email">
          <div class="row">
            <div class="col-3">
              <span class="fa-stack" style="vertical-align: top;">
                <i class="fal fa-circle fa-stack-2x"></i>
                <i class="fal fa-paper-plane fa-stack-1x"></i>
              </span>
            </div>
            <div class="col-3 mt-auto mb-auto">
              <span>info@pmax.com</span>
            </div>
          </div>
        </div>
        <div class="Address">
          <div class="row">
            <div class="col-3">
              <span class="fa-stack" style="vertical-align: top;">
                <i class="fal fa-circle fa-stack-2x"></i>
                <i class="fal fa-map-marker-alt fa-stack-1x"></i>
              </span>
            </div>
            <div class="col-3 mt-auto mb-auto">
              <span>HSR Layout <br>Bangalore,<br> 560078 </span>
            </div>
          </div>

        </div>
      </div>
      <div class="contact-query col-6 text-center">
        <form class="" action="index.html" method="post">
          <div class="form-group contact-us-form">
            <input type="text" name="name" value="" placeholder="Enter Name" required>
          </div>
          <div class="form-group contact-us-form">
            <input type="text" name="email" value="" placeholder="Enter Email ID" required>
          </div>
          <div class="form-group contact-us-form">
            <input type="text" name="mobile" value="" placeholder="Enter Mobile No" required>
          </div>
          <div class="form-group contact-us-form">
            <textarea name="msg" rows="3" cols="40" required placeholder="Enter Message"></textarea>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>
