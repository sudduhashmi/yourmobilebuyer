<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sell Used Mobile Phone | YourMobileBuyer</title>
<meta name="description" content="Sell your used mobile phone online for instant price. Free pickup, secure data wipe & instant payment. Get the best price for used phones.">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
 <link rel="stylesheet" href="css/style.css">
<style>
/* ===== BODY ===== */

/* ===== HERO ===== */
.hero{
    background: linear-gradient(135deg, #04437d, #04437d);
    color: #fff;
    padding: 60px 20px 55px;
    text-align: center;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
}
.hero h1{font-size:28px;font-weight:700;margin-bottom:10px;}
.hero p{font-size:16px;margin-bottom:20px;}
.hero ul{list-style:none;padding:0;}
.hero ul li{
display: inline-block;
    background: rgb(7 99 161);
    padding: 8px 15px;
    margin: 5px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
}

/* ===== HERO FORM BOX ===== */
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
.condition-btn.active{background:#04437d;color:#fff;border-color:#04437d;}
.hero-box .condition-row{display:flex;gap:10px;margin-bottom:15px;}
#priceBox{font-weight:700;font-size:22px;color:#04437d;margin-top:15px;}

/* ===== WHY US / STEPS ===== */
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

/* ===== BRAND PILL ===== */
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
.brand-pill:hover{transform:scale(1.05);border-color:#04437d;}

/* ===== TESTIMONIAL ===== */
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
.testimonial-card h6{margin-top:10px;font-weight:600;color:#04437d;}

/* ===== CTA ===== */
.cta-box{
    background: #04437d;
    color: #fff;
    padding: 50px 20px;
    border-radius: 0px;
    text-align: center;
    margin: 0px 0;
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
}
.cta-box .btn{border-radius:20px;font-weight:600;padding:12px 25px;}

/* ===== MEDIA ===== */
@media(max-width:767px){
  .hero h1{font-size:24px;}
  .hero p{font-size:14px;}
  .hero-box{padding:20px;margin-top:-30px;}
  .condition-btn{width:100%;}
  .step-box{margin:10px 0;}
}
</style>
</head>
<body>
 <?php include 'includes/header.php'; ?>
<!-- HERO -->
<section class="hero">
<h1>Sell Your Used Mobile Phone Online</h1>
<p>Get the best price for your used mobile phones. Free pickup & instant payment!</p>
<ul>
<li>Free Pickup</li>
<li>Instant Payment</li>
<li>Data Safe & Secure</li>
</ul>
</section>

<!-- HERO FORM -->
<div class="container-fluid px-3 px-md-5">
<div class="hero-box">
<h5 class="fw-semibold mb-3 text-center">Select Your Mobile to Sell</h5>

<select id="brand" class="form-select mb-3">
<option value="">Select Brand</option>
<option value="Apple">Apple</option>
<option value="Samsung">Samsung</option>
<option value="Redmi">Redmi</option>
<option value="Vivo">Vivo</option>
<option value="Oppo">Oppo</option>
</select>

<select id="model" class="form-select mb-3">
<option>Select Model</option>
<option value="Model 1">Model 1</option>
<option value="Model 2">Model 2</option>
<option value="Model 3">Model 3</option>
</select>

<!-- CONDITION QUESTIONS -->
<div>
<div class="condition-row">
<button class="btn btn-outline-success condition-btn" data-value="yes">Switching ON: Yes</button>
<button class="btn btn-outline-danger condition-btn" data-value="no">Switching ON: No</button>
</div>

<div class="condition-row">
<button class="btn btn-outline-success condition-btn" data-value="no">Screen Broken: No</button>
<button class="btn btn-outline-danger condition-btn" data-value="yes">Screen Broken: Yes</button>
</div>

<div class="condition-row">
<button class="btn btn-outline-success condition-btn" data-value="yes">Touch Working: Yes</button>
<button class="btn btn-outline-danger condition-btn" data-value="no">Touch Working: No</button>
</div>

<button class="btn btn-primary w-100 mt-3" onclick="calculatePrice()">Get Final Price</button>
<h3 class="text-center mt-4" id="priceBox">Your Price: ₹0</h3>
</div>

</div>
</div>

<!-- WHY US -->
<section class="py-5 ">
  <div class="container-fluid px-3 px-md-5 text-center">
    <h2 class="fw-bold mb-5">Why Sell Your Used Mobile With Us?</h2>
    <div class="row g-4">

      <!-- Best Price -->
      <div class="col-6 col-md-3">
        <div class="step-box p-4 border rounded shadow h-100 d-flex flex-column justify-content-start align-items-center">
          <!-- Icon Image -->
          <img src="images/best-price.png" alt="Best Price" class="mb-3" style="width:60px;">
          <h5 class="fw-bold mb-2">Best Price</h5>
          <p class="mb-0 small">Get the highest value for your used mobile instantly.</p>
        </div>
      </div>

      <!-- Free Pickup -->
      <div class="col-6 col-md-3">
        <div class="step-box p-4 border rounded shadow h-100 d-flex flex-column justify-content-start align-items-center">
          <img src="images/free.png" alt="Free Pickup" class="mb-3" style="width:60px;">
          <h5 class="fw-bold mb-2">Free Pickup</h5>
          <p class="mb-0 small">We pick up your device from your doorstep at no cost.</p>
        </div>
      </div>

      <!-- Instant Payment -->
      <div class="col-6 col-md-3">
        <div class="step-box p-4 border rounded shadow h-100 d-flex flex-column justify-content-start align-items-center">
          <img src="images/instant-payment.png" alt="Instant Payment" class="mb-3" style="width:60px;">
          <h5 class="fw-bold mb-2">Instant Payment</h5>
          <p class="mb-0 small">Receive payment immediately after device inspection.</p>
        </div>
      </div>

      <!-- Data Safety -->
      <div class="col-6 col-md-3">
        <div class="step-box p-4 border rounded shadow h-100 d-flex flex-column justify-content-start align-items-center">
          <img src="images/safety.png" alt="Data Safety" class="mb-3" style="width:60px;">
          <h5 class="fw-bold mb-2">Data Safety</h5>
          <p class="mb-0 small">Your data is securely wiped, keeping your privacy safe.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="py-5 ">
  <div class="container-fluid px-3 px-md-5 text-center">
    <h2 class="fw-bold mb-5">How It Works</h2>
    <div class="row g-4">

      <!-- Step 1 -->
      <div class="col-6 col-md-3">
        <div class="step-box p-4 border rounded shadow h-100 d-flex flex-column justify-content-start align-items-center">
          <img src="images/brand.png" alt="Select Brand & Model" class="mb-3" style="width:60px;">
          <h5 class="fw-bold mb-2">Select Brand & Model</h5>
          <p class="mb-0 small">Choose your mobile brand and model to get started.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-6 col-md-3">
        <div class="step-box p-4 border rounded shadow h-100 d-flex flex-column justify-content-start align-items-center">
          <img src="images/question-and-answer.png" alt="Answer Questions" class="mb-3" style="width:60px;">
          <h5 class="fw-bold mb-2">Answer Questions</h5>
          <p class="mb-0 small">Fill a few simple questions about your device’s condition.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-6 col-md-3">
        <div class="step-box p-4 border rounded shadow h-100 d-flex flex-column justify-content-start align-items-center">
          <img src="images/message.png" alt="Get Price" class="mb-3" style="width:60px;">
          <h5 class="fw-bold mb-2">Get Price</h5>
          <p class="mb-0 small">Receive an instant quote for your used mobile.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-6 col-md-3">
        <div class="step-box p-4 border rounded shadow h-100 d-flex flex-column justify-content-start align-items-center">
          <img src="images/buy-backlink.png" alt="Free Pickup & Get Paid" class="mb-3" style="width:60px;">
          <h5 class="fw-bold mb-2">Free Pickup & Get Paid</h5>
          <p class="mb-0 small">We pick up your device and you receive payment instantly.</p>
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
<p>"I sold my old iPhone in minutes. Instant payment & pickup was free. Highly recommend!"</p>
<h6>- Rahul Sharma</h6>
</div>
</div>
<div class="col-md-4">
<div class="testimonial-card">
<p>"Easy and fast process. Got the best price for my Samsung phone."</p>
<h6>- Priya Verma</h6>
</div>
</div>
<div class="col-md-4">
<div class="testimonial-card">
<p>"Safe, secure and quick. Data wipe ensured my privacy. Loved it!"</p>
<h6>- Ankit Singh</h6>
</div>
</div>
</div>
</div>
</section>

<section class="sellfaq-section py-5 bg-light">
  <div class="container">
     <div class="text-center mb-4">
      <h2 class="fw-bold">Frequently Asked Questions</h2>
    </div>
    <div class="accordion sellfaq-accordion" id="sellfaqMain">

      <!-- 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#sellfaq1">
            How can I sell my used mobile?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq1" class="accordion-collapse collapse show" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Fill the sell form, get price quote, schedule pickup and receive payment instantly.
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq2">
            What details are required?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq2" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Brand, model, storage, condition and location are required.
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq3">
            Will I get instant price?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq3" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            You will get an estimated price instantly. Final price is confirmed after inspection.
          </div>
        </div>
      </div>

      <!-- 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq4">
            Can I sell a damaged phone?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq4" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, damaged phones are accepted. Price depends on condition.
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq5">
            How will I receive payment?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq5" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Payment is made instantly via UPI, bank transfer or cash.
          </div>
        </div>
      </div>

      <!-- 6 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq6">
            Do I need to reset my phone?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq6" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, please backup your data and factory reset before selling.
          </div>
        </div>
      </div>

      <!-- 7 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq7">
            Is doorstep pickup available?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq7" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, free doorstep pickup is available in most locations.
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
            The entire process usually completes within 24–48 hours.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-box">
<h2 class="fw-bold mb-3">Ready to Sell Your Used Mobile Phone?</h2>
<a class="btn btn-light btn-lg" href="contact-us.php">Check Price Now</a>
</section>

  <?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
let basePrice = 9000;
let finalPrice = basePrice;

$(".condition-btn").click(function(){
  $(this).siblings().removeClass("active");
  $(this).addClass("active");
});

function calculatePrice(){
finalPrice = basePrice;
$(".condition-btn.active").each(function(){
  let val = $(this).data("value");
  if(val=="no") finalPrice -= 2000;
});
if(finalPrice<1000) finalPrice=1000;
$("#priceBox").html("Your Price: ₹"+finalPrice);
}
</script>

</body>
</html>
