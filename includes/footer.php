<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['send_enquiry'])){

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$message = $_POST['message'];
$page = $_POST['page_url'];

$adminEmail = "shahbuddin312203@gmail.com";
$appPassword = "wgwbtiwbterfvick";

try{

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $adminEmail;
$mail->Password = $appPassword;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom($adminEmail,'Website Enquiry');
$mail->addAddress($adminEmail);

$mail->isHTML(true);
$mail->Subject = "New Enquiry";

$mail->Body = "
<h3>New Enquiry Received</h3>
<b>Name:</b> $name <br>
<b>Phone:</b> $phone <br>
<b>Email:</b> $email <br>
<b>City:</b> $city <br>
<b>Message:</b> $message <br>
<b>Page:</b> $page
";

$mail->send();

echo "<script>
alert('Enquiry Submitted Successfully');
window.location.href = window.location.href;
</script>";

}catch(Exception $e){
echo $mail->ErrorInfo;
}

}
?>



<footer class="site-footer">
  <div class="container-fluid px-3 px-md-5">
    <div class="row gy-4">

      <!-- BRAND -->
      <div class="col-lg-3 col-md-6">
        <div class="footer-brand">
          <h3 class="brand-logo">
            <img src="images/logo.png" alt="Sell Old Phone" class="img-fluid">
          </h3>
          <p class="brand-text">
            Trusted platform to sell your old mobile phone in
            Delhi, Noida & Ghaziabad with instant payment.
          </p>

          <div class="footer-social">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
      </div>

      <!-- OUR SERVICE (SINGLE ONLY) -->
      <div class="col-lg-2 col-md-6">
        <h5 class="footer-title">Our Service</h5>
        <ul class="footer-links">
          <li><a href="#">Sell Old Mobile Phone</a></li>
          <li><a href="#">Used Phone Buyback</a></li>
          <li><a href="#">Damaged Phone Sell</a></li>
          <li><a href="#">Non-Working Phone Sell</a></li>
        </ul>
      </div>

      <!-- SERVICE AREA -->
      <div class="col-lg-2 col-md-6">
        <h5 class="footer-title">Service Area</h5>
        <ul class="footer-links">
          <li><a href="#">Delhi</a></li>
          <li><a href="#">Noida</a></li>
          <li><a href="#">Ghaziabad</a></li>
          <li><a href="#">Delhi NCR</a></li>
        </ul>
      </div>

      <!-- WHAT WE ACCEPT -->
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-title">We Accept</h5>
        <ul class="footer-links">
          <li>Old Smartphones</li>
          <li>Broken Phones</li>
          <li>Screen Damaged Phones</li>
          <li>Battery Issue Phones</li>
        </ul>
      </div>

      <!-- SUPPORT -->
      <div class="col-lg-2 col-md-6">
        <h5 class="footer-title">Help & Support</h5>
        <ul class="footer-links">
          <li><a href="#">How It Works</a></li>
          <li><a href="#">Price Calculation</a></li>
          <li><a href="#">Contact Support</a></li>
          <li><a href="#">Terms & Conditions</a></li>
        </ul>
      </div>

    </div>

    <!-- BOTTOM -->
    <div class="footer-bottom">
      <p>© 2026 Yourmobilebuyer. All Rights Reserved.</p>
      <div class="bottom-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Use</a>
      </div>
    </div>
  </div>
</footer>


<div class="ymb-popup-overlay" id="locationPopup">
  <div class="ymb-popup">

    <div class="popup-header">
      <h5>Select Your City</h5>
      <span class="close-btn" onclick="closeLocationPopup()">✕</span>
    </div>

    <input type="text" class="location-search" placeholder="Search your city or pincode">

    <h6 class="mt-3">Popular Cities</h6>

    <div class="city-grid">
      <div class="city-item">Delhi</div>
      <div class="city-item">Delhi NCR</div>
      <div class="city-item">Noida</div>
    </div>

    <a href="#" class="view-all">View All Cities</a>

  </div>
</div>


<div class="ymb-popup-overlay" id="enquiryPopup">
  <div class="ymb-popup">

    <div class="popup-header">
      <h5>Enquiry Now</h5>
      <span class="close-btn" onclick="closeEnquiryPopup()">✕</span>
    </div>

    <form method="POST" class="enquiry-form">

      <input type="text" name="name" placeholder="Your Name" required>

      <input type="tel" name="phone" placeholder="Mobile Number" required>

      <input type="email" name="email" placeholder="Email Address">

      <input type="text" name="city" placeholder="City">

      <textarea name="message" placeholder="Your Message"></textarea>

      <input type="hidden" name="page_url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">

      <button type="submit" name="send_enquiry" class="submit-btn">
        Submit Enquiry
      </button>

    </form>

  </div>
</div>
