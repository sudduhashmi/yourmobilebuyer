<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submit_form'])){

$name   = $_POST['name'];
$email  = $_POST['email'];
$phone  = $_POST['phone'];
$brand  = $_POST['brand'];
$model  = $_POST['model'];
$city   = $_POST['city'];
$state  = $_POST['state'];
$issue  = $_POST['issue'];

$adminEmail = "shahbuddin312203@gmail.com";
$appPassword = "wgwbtiwbterfvick"; // gmail app password

// ================= ADMIN MAIL =================
$mail = new PHPMailer(true);

try {
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = $adminEmail;
$mail->Password   = $appPassword;
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;

$mail->setFrom($adminEmail,'YourMobileBuyer');
$mail->addAddress($adminEmail); // admin ko mail

$mail->isHTML(true);
$mail->Subject = 'New Mobile Sell Lead';

$mail->Body = "
<h2>New Lead Received</h2>
<b>Name:</b> $name <br>
<b>Phone:</b> $phone <br>
<b>Email:</b> $email <br>
<b>Brand:</b> $brand <br>
<b>Model:</b> $model <br>
<b>City:</b> $city <br>
<b>State:</b> $state <br>
<b>Problem:</b> $issue
";

$mail->send();


// ================= USER MAIL =================
$mail2 = new PHPMailer(true);

$mail2->isSMTP();
$mail2->Host       = 'smtp.gmail.com';
$mail2->SMTPAuth   = true;
$mail2->Username   = $adminEmail;
$mail2->Password   = $appPassword;
$mail2->SMTPSecure = 'tls';
$mail2->Port       = 587;

$mail2->setFrom($adminEmail,'YourMobileBuyer');
$mail2->addAddress($email); // user ko mail

$mail2->isHTML(true);
$mail2->Subject = 'YourMobileBuyer Confirmation';

$mail2->Body = "
Hi <b>$name</b>,<br><br>
Thanks for submitting your mobile details.<br>
Our team will contact you shortly.<br><br>
<b>YourMobileBuyer Team</b>
";

$mail2->send();

echo "<script>
alert('Form Submitted Successfully');
window.location.href='sell-dead-mobile.php';
</script>";

} catch (Exception $e) {
echo "Mail Error: {$mail->ErrorInfo}";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sell Dead Mobile Phone in Delhi & Gurgaon | Dead Phone Buyer | YourMobileBuyer</title>
<meta name="description" content="Sell dead mobile phone in Delhi & Gurgaon. We buy dead, not working and motherboard issue phones with free pickup and instant cash payment.">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<style>

/* HERO */
.hero{
 background: linear-gradient(135deg, #0a5991, #04437d);
  color:#fff;
  padding:60px 20px 50px;
  text-align:center;
  border-bottom-left-radius:30px;
  border-bottom-right-radius:30px;
}
.hero h1{font-size:28px;font-weight:700;margin-bottom:10px;}
.hero p {
    font-size: 16px;
    margin-bottom: 20px;
    font-weight: 600;
        color: #fff;
}
.hero ul{list-style:none;padding:0;}
.hero ul li{
display: inline-block;
    background: rgb(18 99 153);
    padding: 8px 15px;
    margin: 5px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
    border: 1px solid #04437d;
}

/* HERO FORM BOX */
.hero-box{
  background:#fff;
  color:#000;
  padding:25px;
  border-radius:20px;
  box-shadow:0 12px 30px rgba(0,0,0,0.1);
  margin-top:-40px;
}
.hero-box select, .hero-box button{
  border-radius:12px;
}

.condition-btn{
  border-radius:12px;
  padding:10px 18px;
  margin:5px;
  flex:1;
  font-weight:500;
  transition:.3s;
}
.condition-btn.active{background:#000;color:#fff;border-color:#000;}
.hero-box .condition-row{display:flex;gap:10px;margin-bottom:15px;}
#priceBox{font-weight:700;font-size:22px;color:#000;margin-top:15px;}

/* WHY US / STEPS */
.step-box{
  background:#fff;
  border-radius:18px;
  padding:25px 15px;
  margin:10px 0;
  box-shadow:0 8px 25px rgba(0,0,0,0.08);
  transition:.3s;
  font-weight:500;
}
.step-box:hover{transform:translateY(-5px);}

/* BRAND PILL */
.brand-pill{
  border:1px solid #ddd;
  border-radius:30px;
  padding:10px 20px;
  margin:5px;
  display:inline-block;
  background:#fff;
  font-size:14px;
  box-shadow:0 4px 12px rgba(0,0,0,0.08);
  transition:.3s;
}
.brand-pill:hover{transform:scale(1.05);border-color:#000;}

/* TESTIMONIAL */
.testimonial-card{
  background:#fff;
  border-radius:20px;
  padding:20px;
  margin:10px 0;
  box-shadow:0 8px 20px rgba(0,0,0,0.08);
  text-align:left;
  transition:.3s;
}
.testimonial-card:hover{transform:translateY(-5px);}
.testimonial-card p{font-size:14px;color:#555;}
.testimonial-card h6{margin-top:10px;font-weight:600;color:#000;}

/* CTA */
.cta-box{
  background: #04437d;
  color:#fff;
  padding:50px 20px;
  border-radius:0px;
  text-align:center;
  margin:0px 0;
  box-shadow:0 12px 35px rgba(0,0,0,0.15);
}
.cta-box .btn{border-radius:20px;font-weight:600;padding:12px 25px;}

/* MEDIA */
@media(max-width:767px){
  .hero h1{font-size:24px;}
  .hero p{font-size:14px;}
  .hero-box{padding:20px;margin-top:-30px;}
  .condition-btn{width:100%;}
  .step-box{margin:10px 0;}
}
.why-sell-section{
  background:#fff;
}

.step-box{
  background:#ffffff;
  border:1px solid #e6e6e6;
  border-radius:14px;
  padding:30px 18px;
  transition:0.3s ease;
}

.step-box i{
  font-size:30px;
  color:#085589;
  margin-bottom:12px;
}

.step-box h6{
  font-weight:600;
  font-size:15px;
  margin-bottom:6px;
}

.step-box p{
  font-size:13px;
  color:#666;
  margin:0;
  line-height:1.6;
}

.step-box:hover{
  transform:translateY(-4px);
  box-shadow:0 12px 28px rgba(0,0,0,0.08);
}
.step-box{
  background:#ffffff;
  border:1px solid #e6e6e6;
  border-radius:14px;
  padding:32px 18px 26px;
  position:relative;
  transition:0.3s ease;
}

.step-number{
  position:absolute;
  top:-12px;
  left:50%;
  transform:translateX(-50%);
  background:#085589;
  color:#fff;
  width:28px;
  height:28px;
  border-radius:50%;
  font-size:14px;
  font-weight:600;
  display:flex;
  align-items:center;
  justify-content:center;
}

.step-box i{
  font-size:30px;
  color:#085589;
  margin-bottom:12px;
}

.step-box h6{
  font-weight:600;
  font-size:15px;
  margin-bottom:6px;
}

.step-box p{
  font-size:13px;
  color:#666;
  margin:0;
  line-height:1.6;
}

.step-box:hover{
  transform:translateY(-4px);
  box-shadow:0 12px 28px rgba(0,0,0,0.08);
}

</style>
</head>
<body>
 <?php include 'includes/header.php'; ?>
<!-- HERO -->
<section class="hero">
<h1>Sell Your Dead Mobile Phone</h1>
<p>Even if your phone doesn’t switch on or is completely dead, we buy it at the best price. Free pickup & instant payment!</p>
<ul>
<li>Free Pickup</li>
<li>Instant Payment</li>
<li>Safe Data Wipe</li>
</ul>
</section>

<!-- HERO FORM -->
<!-- HERO FORM -->
<div class="container-fluid px-3 px-md-5">
<div class="hero-box">

<h5 class="fw-semibold mb-3 text-center">Select Your Mobile to Sell</h5>


<form method="post" action="" class="container mt-4">

<div class="row">

<!-- NAME -->
<div class="col-md-6 mb-3">
<label class="form-label">Full Name *</label>
<input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
</div>

<!-- PHONE -->
<div class="col-md-6 mb-3">
<label class="form-label">Mobile Number *</label>
<input type="tel" name="phone" class="form-control" placeholder="10 digit mobile number"
pattern="[0-9]{10}" required>
</div>

<!-- EMAIL -->
<div class="col-md-6 mb-3">
<label class="form-label">Email Address *</label>
<input type="email" name="email" class="form-control" placeholder="Enter your email" required>
</div>

<!-- WHATSAPP -->
<div class="col-md-6 mb-3">
<label class="form-label">WhatsApp Number</label>
<input type="tel" name="whatsapp" class="form-control" placeholder="WhatsApp number">
</div>

<!-- BRAND -->
<div class="col-md-6 mb-3">
<label class="form-label">Mobile Brand *</label>
<select name="brand" class="form-select" required>
<option value="">Select Brand</option>
<option>Apple</option>
<option>Samsung</option>
<option>OnePlus</option>
<option>Vivo</option>
<option>Oppo</option>
<option>Realme</option>
<option>Redmi</option>
</select>
</div>

<!-- MODEL -->
<div class="col-md-6 mb-3">
<label class="form-label">Model Name *</label>
<input type="text" name="model" class="form-control" placeholder="Example: iPhone 11" required>
</div>

<!-- STORAGE -->
<div class="col-md-6 mb-3">
<label class="form-label">Storage</label>
<select name="storage" class="form-select">
<option>64GB</option>
<option>128GB</option>
<option>256GB</option>
<option>512GB</option>
</select>
</div>

<!-- CONDITION -->
<div class="col-md-6 mb-3">
<label class="form-label">Mobile Condition *</label>
<select name="condition" class="form-select" required>
<option value="">Select Condition</option>
<option>Good</option>
<option>Screen Broken</option>
<option>Dead</option>
<option>Not Switching On</option>
</select>
</div>

<!-- CITY -->
<div class="col-md-6 mb-3">
<label class="form-label">City *</label>
<input type="text" name="city" class="form-control" placeholder="Delhi / Gurgaon" required>
</div>

<!-- STATE -->
<div class="col-md-6 mb-3">
<label class="form-label">State *</label>
<input type="text" name="state" class="form-control" placeholder="State name" required>
</div>

<!-- ADDRESS -->
<div class="col-12 mb-3">
<label class="form-label">Pickup Address *</label>
<textarea name="address" class="form-control" rows="3" placeholder="Enter full address" required></textarea>
</div>

<!-- ISSUE -->
<div class="col-12 mb-3">
<label class="form-label">Mobile Problem Details</label>
<textarea name="issue" class="form-control" rows="3" placeholder="Describe mobile problem"></textarea>
</div>

<!-- SUBMIT -->
<div class="col-12 text-center">
<button type="submit" name="submit_form" class="btn btn-primary px-5 py-2">
Submit Details
</button>
</div>

</div>
</form>

</div>
</div>

<!-- WHY US -->
<section class="py-5 why-sell-section">
  <div class="container-fluid px-3 px-md-5 text-center">

    <h2 class="fw-bold mb-4">Why Sell Broken Mobile With Us?</h2>

    <div class="row g-3 justify-content-center">

      <div class="col-6 col-md-3">
        <div class="step-box h-100">
          <i class="fa-solid fa-indian-rupee-sign"></i>
          <h6>Best Price</h6>
          <p>Get the maximum value for your broken or old mobile with no hidden charges.</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="step-box h-100">
          <i class="fa-solid fa-truck-fast"></i>
          <h6>Free Pickup</h6>
          <p>Doorstep pickup at your convenience, completely free of cost.</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="step-box h-100">
          <i class="fa-solid fa-bolt"></i>
          <h6>Instant Payment</h6>
          <p>Get paid instantly via UPI or direct bank transfer after pickup.</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="step-box h-100">
          <i class="fa-solid fa-shield-halved"></i>
          <h6>100% Data Safety</h6>
          <p>Your personal data is completely wiped before resale.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- HOW IT WORKS -->
<section class="py-5  text-center">
  <div class="container-fluid px-3 px-md-5">

    <h2 class="fw-bold mb-4">How It Works</h2>

    <div class="row g-3 justify-content-center">

      <div class="col-6 col-md-3">
        <div class="step-box h-100">
          <div class="step-number">1</div>
          <i class="fa-solid fa-mobile-screen"></i>
          <h6>Select Brand & Model</h6>
          <p>Choose your mobile brand and model from our wide list.</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="step-box h-100">
          <div class="step-number">2</div>
          <i class="fa-solid fa-circle-question"></i>
          <h6>Answer Questions</h6>
          <p>Answer a few questions about your phone condition.</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="step-box h-100">
          <div class="step-number">3</div>
          <i class="fa-solid fa-tag"></i>
          <h6>Get Best Price</h6>
          <p>Instantly get the best possible resale price.</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="step-box h-100">
          <div class="step-number">4</div>
          <i class="fa-solid fa-truck-fast"></i>
          <h6>Free Pickup & Payment</h6>
          <p>Free doorstep pickup and instant payment.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- TOP BRANDS -->
<section class="py-5 text-center">
<div class="container-fluid px-3 px-md-5">
<h2 class="fw-bold mb-3">Mobile Brands We Buy</h2>
<span class="brand-pill">Apple</span>
<span class="brand-pill">Samsung</span>
<span class="brand-pill">Xiaomi</span>
<span class="brand-pill">Vivo</span>
<span class="brand-pill">Oppo</span>
<span class="brand-pill">OnePlus</span>
<span class="brand-pill">Realme</span>
</div>
</section>

<!-- TESTIMONIALS -->
<section class="py-5 ">
<div class="container-fluid px-3 px-md-5">
<h2 class="fw-bold mb-4 text-center">What Our Customers Say</h2>
<div class="row g-3">
<div class="col-md-4">
<div class="testimonial-card">
<p>"I sold my dead phone and still got a fair price. Fast and easy!"</p>
<h6>- Rahul Mehta</h6>
</div>
</div>
<div class="col-md-4">
<div class="testimonial-card">
<p>"Dead Samsung phone sold in minutes. Free pickup and instant payment."</p>
<h6>- Priya Sharma</h6>
</div>
</div>
<div class="col-md-4">
<div class="testimonial-card">
<p>"Even a completely dead phone got a decent price. Highly recommended!"</p>
<h6>- Ankit Kumar</h6>
</div>
</div>
</div>
</div>
</section>

<section class="sellfaq-section py-5 ">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold">Dead Mobile FAQ</h2>
      <p class="text-muted">Sell your dead or non-working phone easily</p>
    </div>

    <div class="accordion sellfaq-accordion" id="sellfaqMain">

      <!-- 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#sellfaq1">
            Can I sell a phone that does not turn on?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq1" class="accordion-collapse collapse show" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, you can sell completely dead phones that do not switch on.
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq2">
            How is the price of a dead phone decided?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq2" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Price depends on model, condition and working parts value.
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq3">
            Do you accept water damaged dead phones?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq3" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, we accept water damaged and completely dead phones.
          </div>
        </div>
      </div>

      <!-- 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq4">
            Will I get instant payment?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq4" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, payment is made instantly after device verification.
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq5">
            Is doorstep pickup available?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq5" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, we provide free doorstep pickup service.
          </div>
        </div>
      </div>

      <!-- 6 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq6">
            Should I remove SIM and memory card?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq6" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, remove SIM and memory card before handing over the phone.
          </div>
        </div>
      </div>

      <!-- 7 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq7">
            Can I sell without box or charger?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq7" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, box and charger are not required to sell a dead phone.
          </div>
        </div>
      </div>

      <!-- 8 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq8">
            How long does the process take?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq8" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Usually the entire process completes within 24–48 hours.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-box">
<h2 class="fw-bold mb-3">Ready to Sell Your Dead Mobile Phone?</h2>
<a class="btn btn-light btn-lg" href="contact-us.php">Check Price Now</a>
</section>

  <?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
let basePrice = 2000; // Dead phone base
let finalPrice = basePrice;

$(".condition-btn").click(function(){
  $(this).siblings().removeClass("active");
  $(this).addClass("active");
});

function calculatePrice(){
finalPrice = basePrice;
$(".condition-btn.active").each(function(){
  let val = $(this).data("value");
  if(val=="no") finalPrice -= 500;
  if(val=="yes" && $(this).text().includes("Physical Damage")) finalPrice -= 1000;
  if(val=="yes" && $(this).text().includes("Water Damage")) finalPrice -= 1000;
});
if(finalPrice<200) finalPrice=200;
$("#priceBox").html("Your Price: ₹"+finalPrice);
}
</script>
<script>
let currentSlide = 0;
const slides = document.querySelector('.ymb-slides');
const totalSlides = document.querySelectorAll('.ymb-slide').length;
const dots = document.querySelectorAll('.ymb-dot');

function updateSlider() {
  slides.style.transform = `translateX(-${currentSlide * 100}%)`;
  dots.forEach(d => d.classList.remove('active'));
  dots[currentSlide].classList.add('active');
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  updateSlider();
}

function prevSlide() {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  updateSlider();
}

function goSlide(index) {
  currentSlide = index;
  updateSlider();
}

/* AUTO SLIDE */
setInterval(nextSlide, 4000);
</script>
<script>
function ymbSlide(dir) {
  const track = document.getElementById("ymbTrack");
  track.scrollLeft += dir * 260;
}
</script>

<script>
  // Tabs
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));

      btn.classList.add('active');
      document.getElementById(btn.dataset.tab).classList.add('active');
    });
  });

  // Accordion
  document.querySelectorAll('.faq-question').forEach(q => {
    q.addEventListener('click', () => {
      const answer = q.nextElementSibling;
      const icon = q.querySelector('.icon');

      if (answer.classList.contains('show')) {
        answer.classList.remove('show');
        icon.textContent = '+';
      } else {
        document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('show'));
        document.querySelectorAll('.icon').forEach(i => i.textContent = '+');

        answer.classList.add('show');
        icon.textContent = '−';
      }
    });
  });
</script>

<script>
  const track = document.getElementById("trendTrack");
  const nextBtn = document.querySelector(".trend-right");
  const prevBtn = document.querySelector(".trend-left");

  let index = 0;

  function step() {
    return track.children[0].offsetWidth + 24;
  }

  function visible() {
    if (window.innerWidth < 520) return 1;
    if (window.innerWidth < 900) return 2;
    return 3;
  }

  nextBtn.onclick = () => {
    const max = track.children.length - visible();
    if (index < max) {
      index++;
      track.style.transform = `translateX(-${index * step()}px)`;
    }
  };

  prevBtn.onclick = () => {
    if (index > 0) {
      index--;
      track.style.transform = `translateX(-${index * step()}px)`;
    }
  };

  window.addEventListener("resize", () => {
    index = 0;
    track.style.transform = "translateX(0)";
  });
</script>

<script>
  function sliderControl(prev, next, slider) {
    prev.onclick = () => slider.scrollLeft -= 300;
    next.onclick = () => slider.scrollLeft += 300;
  }

  sliderControl(
    document.querySelector(".rn-prev"),
    document.querySelector(".rn-next"),
    document.getElementById("rnSlider")
  );

  sliderControl(
    document.querySelector(".rr-prev"),
    document.querySelector(".rr-next"),
    document.getElementById("rrSlider")
  );
</script>
<script>
function openLocationPopup() {
  document.getElementById('locationPopup').style.display = 'flex';
}

function closeLocationPopup() {
  document.getElementById('locationPopup').style.display = 'none';
}

function openEnquiryPopup() {
  document.getElementById('enquiryPopup').style.display = 'flex';
}

function closeEnquiryPopup() {
  document.getElementById('enquiryPopup').style.display = 'none';
}
</script>
<script>
  var swiper = new Swiper('.swiper-testimonial', {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,

  navigation: {
    nextEl: '.swiper-button-next-test',
    prevEl: '.swiper-button-prev-test',
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 }
  }
});

</script>
</body>
</html>
