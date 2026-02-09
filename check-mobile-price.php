<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$showPrice = false;

/* FORM SUBMIT */
if(isset($_POST['submit_form'])){

$name   = $_POST['name'];
$email  = $_POST['email'];
$phone  = $_POST['phone'];
$brand  = $_POST['brand'];
$model  = $_POST['model'];

$conditions = "";
if(isset($_POST['condition'])){
    foreach($_POST['condition'] as $c){
        $conditions .= $c . ", ";
    }
}

$adminEmail = "shahbuddin312203@gmail.com";
$appPassword = "wgwbtiwbterfvick";

try{

// ================= ADMIN MAIL =================
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $adminEmail;
$mail->Password = $appPassword;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom($adminEmail,'YourMobileBuyer');
$mail->addAddress($adminEmail);

$mail->isHTML(true);
$mail->Subject = "New Mobile Lead";

$mail->Body = "
<h3>New Lead</h3>
<b>Name:</b> $name <br>
<b>Phone:</b> $phone <br>
<b>Email:</b> $email <br>
<b>Brand:</b> $brand <br>
<b>Model:</b> $model <br>
<b>Conditions:</b> $conditions
";

$mail->send();


// ================= USER MAIL =================
$mail2 = new PHPMailer(true);
$mail2->isSMTP();
$mail2->Host = 'smtp.gmail.com';
$mail2->SMTPAuth = true;
$mail2->Username = $adminEmail;
$mail2->Password = $appPassword;
$mail2->SMTPSecure = 'tls';
$mail2->Port = 587;

$mail2->setFrom($adminEmail,'YourMobileBuyer');
$mail2->addAddress($email);

$mail2->isHTML(true);
$mail2->Subject = "Request Received";

$mail2->Body = "
Hi $name <br><br>
Thanks for submitting your phone details.<br>
Our team will contact you soon.
";

$mail2->send();


// ✅ SHOW PRICE ONLY ONCE
$_SESSION['show_price'] = 1;

// redirect so refresh par gayab ho
header("Location: ".$_SERVER['PHP_SELF']);
exit;

}catch(Exception $e){
echo $mail->ErrorInfo;
}

}


/* SHOW PRICE AFTER REDIRECT */
if(isset($_SESSION['show_price'])){
    $showPrice = true;
    unset($_SESSION['show_price']); // refresh par remove
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Mobile Price | Sell Old Phone in Delhi & Gurgaon</title>
  <meta name="description"
    content="Check your old mobile phone price in Delhi & Gurgaon. Get instant quote and best resale value with free pickup and same day payment.">
  <meta name="keywords"
    content="check mobile price, sell old phone Delhi, mobile resale value, old phone buyer Gurgaon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <style>
    .cta-box p {
      color: #fff;
    }

    /* Brand / Model Selection */
    .selection-box {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }

    .selection-box select {
      flex: 1;
      padding: 12px 15px;
      font-size: 16px;
      border-radius: 10px;
      border: 1px solid #ccc;
    }

    /* Condition Questions */
    .condition-box {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .condition-card {
      background: #fff;
      padding: 13px;
      border-radius: 15px;
      text-align: center;
      cursor: pointer;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s, background 0.3s;
    }

    .condition-card:hover {
      transform: translateY(-3px);
      background: #04437d;
      color: #fff;
    }

    .condition-card.selected {
      background: #04437d;
      color: #fff;
    }

    .condition-card span {
      font-size: 16px;
      font-weight: 600;
    }

    /* Price Box */
    .price-box {
      background: #04437d;
      color: #fff;
      padding: 40px 20px;
      border-radius: 20px;
      text-align: center;
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 30px;
    }

    /* CTA */
    .cta-box {
      text-align: center;

    }

    .cta-box .btn {
      background: #ffffff;
      color: #000000;
      border: 1px solid #04437d;
      padding: 15px 40px;
      font-size: 18px;
      border-radius: 25px;
      font-weight: 600;
      transition: .3s;
    }

    .cta-box .btn:hover {
      background: #3e8534;
    }

    /* Extra Info Cards */
    .info-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
    }

    .info-card {
      background: #fff;
      padding: 25px 20px;
      border-radius: 20px;
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .info-card h5 {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 10px;
      color: #04437d;
      text-align: center !important;
    }

    .info-card p {
      font-size: 14px;
      color: #555;
      line-height: 1.5;
    }
  </style>
</head>

<body>
  <?php include 'includes/header.php'; ?>
  <section class="page-breadcrumb">
    <div class="container-fluid px-3 px-md-5">
      <div class="row align-items-center">

        <!-- LEFT CONTENT -->
        <div class="col-md-6">
          <div class="breadcrumb-content">
            <h1>Check Your Mobile Price Instantly</h1>

          </div>
        </div>

        <!-- RIGHT BLANK -->
        <div class="col-md-6 text-center text-md-end">
          <img src="images/IMG-BG.png" alt="" class="img-fluid">
        </div>


      </div>
    </div>
  </section>

<section class="py-5">
<div class="container-fluid px-3 px-md-5">
<?php if($showPrice){ ?>
<div style="background:#f5f5f5;padding:40px;text-align:center;margin:20px 0;border-radius:10px;">
   <h2>Congratulations 🎉</h2>
   <h1 style="font-size:50px;color:green;">₹ XXXXX</h1>
</div>
<?php } ?>



<h2>Check Your Mobile Price Instantly</h2>
<form method="post">

<div class="selection-box">

<select name="brand" class="form-control mb-3" required>
<option value="">Select Brand</option>
  <option>Apple</option>
  <option>Samsung</option>
  <option>OnePlus</option>
  <option>Xiaomi</option>
  <option>Redmi</option>
  <option>Realme</option>
  <option>Vivo</option>
  <option>Oppo</option>
  <option>iQOO</option>
  <option>Motorola</option>
  <option>Nothing</option>
  <option>Google</option>
  <option>Nokia</option>
  <option>Infinix</option>
  <option>Tecno</option>
  <option>Lava</option>
  <option>Micromax</option>
  <option>Asus</option>
  <option>Poco</option>
  <option>Honor</option>
  <option>Sony</option>
  <option>Huawei</option>
</select>





<input type="text" name="model" class="form-control mb-3" placeholder="Enter Model Number" required>

<input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>

<input type="text" name="phone" class="form-control mb-3" placeholder="Mobile Number" required>

<input type="email" name="email" class="form-control mb-3" placeholder="Email" required>

</div>

<!-- CONDITION BOX SAME -->
<div class="condition-box">

<label><input type="checkbox" name="condition[]" value="Screen Working"> Screen Working</label>
<label><input type="checkbox" name="condition[]" value="Touch Working"> Touch Working</label>
<label><input type="checkbox" name="condition[]" value="Screen Cracked"> Screen Cracked</label>
<label><input type="checkbox" name="condition[]" value="Display Lines / Dead Pixels"> Display Lines / Dead Pixels</label>
<label><input type="checkbox" name="condition[]" value="Display Replaced"> Display Replaced</label>
<label><input type="checkbox" name="condition[]" value="No Physical Damage"> No Physical Damage</label>
<label><input type="checkbox" name="condition[]" value="Minor Scratches"> Minor Scratches</label>
<label><input type="checkbox" name="condition[]" value="Heavy Dents"> Heavy Dents</label>
<label><input type="checkbox" name="condition[]" value="Back Panel Broken"> Back Panel Broken</label>
<label><input type="checkbox" name="condition[]" value="Phone Bent"> Phone Bent</label>
<label><input type="checkbox" name="condition[]" value="Battery Working"> Battery Working</label>
<label><input type="checkbox" name="condition[]" value="Battery Drains Fast"> Battery Drains Fast</label>
<label><input type="checkbox" name="condition[]" value="Charging Working"> Charging Working</label>
<label><input type="checkbox" name="condition[]" value="Charging Issue"> Charging Issue</label>
<label><input type="checkbox" name="condition[]" value="Power Button Working"> Power Button Working</label>
<label><input type="checkbox" name="condition[]" value="Volume Button Working"> Volume Button Working</label>
<label><input type="checkbox" name="condition[]" value="Fingerprint Working"> Fingerprint Working</label>
<label><input type="checkbox" name="condition[]" value="Face Unlock Working"> Face Unlock Working</label>
<label><input type="checkbox" name="condition[]" value="Front Camera Working"> Front Camera Working</label>
<label><input type="checkbox" name="condition[]" value="Rear Camera Working"> Rear Camera Working</label>
<label><input type="checkbox" name="condition[]" value="Camera Issue"> Camera Issue</label>
<label><input type="checkbox" name="condition[]" value="Speaker Working"> Speaker Working</label>
<label><input type="checkbox" name="condition[]" value="Mic Working"> Mic Working</label>
<label><input type="checkbox" name="condition[]" value="SIM Network Working"> SIM Network Working</label>
<label><input type="checkbox" name="condition[]" value="WiFi / Bluetooth Working"> WiFi / Bluetooth Working</label>
<label><input type="checkbox" name="condition[]" value="Phone Switches ON"> Phone Switches ON</label>
<label><input type="checkbox" name="condition[]" value="Phone Does Not Switch ON"> Phone Does Not Switch ON</label>
<label><input type="checkbox" name="condition[]" value="Google / iCloud Lock"> Google / iCloud Lock</label>
<label><input type="checkbox" name="condition[]" value="IMEI Valid"> IMEI Valid</label>
<label><input type="checkbox" name="condition[]" value="No Water Damage"> No Water Damage</label>
<label><input type="checkbox" name="condition[]" value="Water Damaged"> Water Damaged</label>
<label><input type="checkbox" name="condition[]" value="Motherboard Issue"> Motherboard Issue</label>

<label><input type="checkbox" name="condition[]" value="Phone Not Switching ON"> Phone Not Switching ON</label>

</div>

<button type="submit" name="submit_form" class="btn btn-primary w-100 mt-4">
Get Price
</button>

</form>



</div>
</section>



  <section class="sellfaq-section py-5 ">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="fw-bold">Check Mobile Price – FAQs</h2>
      </div>

      <div class="accordion sellfaq-accordion" id="pricefaqMain">

        <!-- 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#pricefaq1">
              How can I check my mobile price?
              <span class="faq-icon ms-auto"></span>
            </button>
          </h2>
          <div id="pricefaq1" class="accordion-collapse collapse show" data-bs-parent="#pricefaqMain">
            <div class="accordion-body">
              Select your mobile brand, model, storage and condition. Our system will instantly show the estimated price
              for your device.
            </div>
          </div>
        </div>

        <!-- 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#pricefaq2">
              Is the price shown final?
              <span class="faq-icon ms-auto"></span>
            </button>
          </h2>
          <div id="pricefaq2" class="accordion-collapse collapse" data-bs-parent="#pricefaqMain">
            <div class="accordion-body">
              The price shown is an estimated value. Final price is confirmed after a quick physical inspection during
              pickup.
            </div>
          </div>
        </div>

        <!-- 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#pricefaq3">
              Does checking price cost anything?
              <span class="faq-icon ms-auto"></span>
            </button>
          </h2>
          <div id="pricefaq3" class="accordion-collapse collapse" data-bs-parent="#pricefaqMain">
            <div class="accordion-body">
              No, checking your phone price is completely free. You can check the value anytime without any charges.
            </div>
          </div>
        </div>

        <!-- 4 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#pricefaq4">
              What affects my phone's price?
              <span class="faq-icon ms-auto"></span>
            </button>
          </h2>
          <div id="pricefaq4" class="accordion-collapse collapse" data-bs-parent="#pricefaqMain">
            <div class="accordion-body">
              Price depends on brand, model, storage, physical condition, working status and current market demand.
            </div>
          </div>
        </div>

        <!-- 5 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#pricefaq5">
              Can I check price for a damaged phone?
              <span class="faq-icon ms-auto"></span>
            </button>
          </h2>
          <div id="pricefaq5" class="accordion-collapse collapse" data-bs-parent="#pricefaqMain">
            <div class="accordion-body">
              Yes, you can check the price for broken, dead or damaged phones. Just select the correct condition while
              checking price.
            </div>
          </div>
        </div>

        <!-- 6 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#pricefaq6">
              What should I do after checking the price?
              <span class="faq-icon ms-auto"></span>
            </button>
          </h2>
          <div id="pricefaq6" class="accordion-collapse collapse" data-bs-parent="#pricefaqMain">
            <div class="accordion-body">
              If you're happy with the price, you can proceed to book a free pickup, confirm details and get paid
              instantly at doorstep.
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA -->
  <div class="cta-box text-center   rounded shadow ">
    <h3 class="mb-2">Upgrade Your Device Today!</h3>
    <p class="mb-3">Don’t let your old phone gather dust. Get the best value instantly and enjoy a hassle-free selling
      experience.</p>
    <a href="contact-us.php" class="btn btn-primary btn-lg">Sell Your Phone Now</a>
  </div>

  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- JS -->

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