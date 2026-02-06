<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sell Old Mobile Phone Online | YourMobileBuyer</title>
<meta name="description" content="Sell your old mobile phone online at best price. Free pickup, instant payment & secure data wipe. Sell used or broken mobile phones easily.">
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
    background: radial-gradient(circle at center, #036baa 0%, #025d9e 70%);
  color:#fff;
  padding:60px 20px 40px;
  text-align:center;
  border-bottom-left-radius:30px;
  border-bottom-right-radius:30px;
}

.hero h1{
  font-size:28px;
  font-weight:700;
  margin-bottom:10px;
}

.hero p{
  font-size:16px;
  margin-bottom:20px;
}

.hero ul{
  list-style:none;
  padding:0;
}

.hero ul li{
  display:inline-block;
  background:rgba(255,255,255,0.2);
  padding:8px 15px;
  margin:5px;
  border-radius:20px;
  font-size:14px;
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

.condition-btn.active{
  background:#04437d;
  color:#fff;
  border-color:#04437d;
}

.hero-box .condition-row{
  display:flex;
  gap:10px;
  margin-bottom:15px;
}

#priceBox{
  font-weight:700;
  font-size:22px;
  color:#04437d;
  margin-top:15px;
}

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

.step-box:hover{
  transform:translateY(-5px);
}

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

.brand-pill:hover{
  transform:scale(1.05);
  border-color:#04437d;
}

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

.cta-box .btn{
  border-radius:20px;
  font-weight:600;
  padding:12px 25px;
}

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
    <section class="page-breadcrumb">
  <div class="container-fluid px-3 px-md-5">
    <div class="row align-items-center">
      
      <!-- LEFT CONTENT -->
      <div class="col-md-6">
        <div class="breadcrumb-content">
        <h1>Sell Your Old Mobile Phone Online</h1>
         <p>Get the best price for your used, broken or dead mobile phones. Free pickup & instant payment!</p>
        </div>
      </div>

      <!-- RIGHT BLANK -->
   <div class="col-md-6 text-center text-md-end">
  <img src="images/IMG-BG.png" alt="" class="img-fluid">
</div>


    </div>
  </div>
</section>
<section class="hero">

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
<section class="py-5">
<div class="container-fluid px-3 px-md-5 text-center">
<h2 class="fw-bold mb-4">Why Sell Old Mobile With Us?</h2>
<div class="">
  <div class="row g-3 text-center">
    <div class="col-6 col-md-3">
      <div class="step-box p-3 border rounded">
        <span class="fs-3">💰</span>
        <p class="mb-0 mt-2">Best Price</p>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="step-box p-3 border rounded">
        <span class="fs-3">🚚</span>
        <p class="mb-0 mt-2">Free Pickup</p>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="step-box p-3 border rounded">
        <span class="fs-3">⚡</span>
        <p class="mb-0 mt-2">Instant Payment</p>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="step-box p-3 border rounded">
        <span class="fs-3">🔒</span>
        <p class="mb-0 mt-2">Data Safety</p>
      </div>
    </div>
  </div>
</div>

</div>
</section>

<!-- HOW IT WORKS -->
<section class="py-5 bg-light text-center">
  <div class="container-fluid px-3 px-md-5">
    <h2 class="fw-bold mb-4">How It Works</h2>
    <div class="row g-3">
      
      <div class="col-6 col-md-3">
        <div class="step-box p-3 border rounded h-100 d-flex flex-column justify-content-center align-items-center">
          <span class="fs-3 mb-2">1️⃣</span>
          <p class="mb-0">Select Brand & Model</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="step-box p-3 border rounded h-100 d-flex flex-column justify-content-center align-items-center">
          <span class="fs-3 mb-2">2️⃣</span>
          <p class="mb-0">Answer Questions</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="step-box p-3 border rounded h-100 d-flex flex-column justify-content-center align-items-center">
          <span class="fs-3 mb-2">3️⃣</span>
          <p class="mb-0">Get Price</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="step-box p-3 border rounded h-100 d-flex flex-column justify-content-center align-items-center">
          <span class="fs-3 mb-2">4️⃣</span>
          <p class="mb-0">Free Pickup & Get Paid</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- BRANDS -->
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

<section class="sellfaq-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold">Frequently Asked Questions</h2>
      <p class="text-muted">Sell your old mobile easily in just a few steps</p>
    </div>

    <div class="accordion sellfaq-accordion" id="sellfaqMain">

      <!-- 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#sellfaq1">
            How do I sell my old mobile phone?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq1" class="accordion-collapse collapse show" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Select your mobile model, check price, fill your details and schedule a free doorstep pickup.
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq2">
            How is the price of my phone decided?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq2" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Price depends on brand, model, storage, condition and current market value.
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq3">
            Can I sell a phone with a broken screen?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq3" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, you can sell broken or damaged phones. Price will be adjusted based on condition.
          </div>
        </div>
      </div>

      <!-- 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq4">
            When will I get payment?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq4" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            You will receive payment instantly after the phone is picked up and verified.
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq5">
            Is pickup service free?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq5" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, we provide free doorstep pickup from your home or office.
          </div>
        </div>
      </div>

      <!-- 6 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq6">
            Should I remove my data before selling?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq6" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, please backup your data and factory reset the device before handing it over.
          </div>
        </div>
      </div>

      <!-- 7 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq7">
            Do I need the original box or charger?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq7" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Not mandatory, but having box and charger may increase your phone value.
          </div>
        </div>
      </div>

      <!-- 8 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq8">
            How long does the whole process take?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq8" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Usually the process completes within 24–48 hours from booking pickup.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-box">
<h2 class="fw-bold mb-3">Ready to Sell Your Old Mobile Phone?</h2>
<a href="contact-us.php" class="btn btn-light btn-lg" >Check Price Now</a>
</section>

  <?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
let basePrice = 10000;
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
