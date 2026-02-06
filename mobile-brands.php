<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>All Mobile Brands | YourMobileBuyer</title>
<meta name="description" content="Explore all mobile brands we buy. Get the best price for your old, used, broken, or dead mobile phones. Free pickup & instant payment.">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
 <link rel="stylesheet" href="css/style.css">
<style>
.brand-link {
  text-decoration: none;
}

.brand-card {
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  text-align: center;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.brand-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.brand-card {
  background: #fff;
           /* box chota */
  border-radius: 12px;
  text-align: center;

  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.brand-card img {
  max-height: 70px;           /* image height bada */
  max-width: 100%;
  object-fit: contain;
  height: 80px;
}

.brand-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* HERO */
.hero{
  background: linear-gradient(135deg,#04437d,#04437d);
  color:#fff;
  padding:60px 20px 40px;
  text-align:center;
  border-bottom-left-radius:30px;
  border-bottom-right-radius:30px;
}
.hero h1{font-size:28px;font-weight:700;margin-bottom:10px;}
.hero p{font-size:16px;margin-bottom:20px;}

/* BRAND CARDS */
.brand-card{
  background:#fff;
  border-radius:20px;

  text-align:center;
  box-shadow:0 12px 30px rgba(0,0,0,0.08);
  transition:.3s;
}
.brand-card:hover{transform:translateY(-5px);}
.brand-card img{max-width:80px;margin-bottom:10px;}
.brand-card h5{font-weight:600;font-size:16px;}

/* CTA */
.cta-box{
  background:#04437d;
  color:#fff;
  padding:40px 20px;
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
}
.why-card{
  background:#fff;
  padding:25px 20px;
  border-radius:14px;
  text-align:center;
  height:100%;
  box-shadow:0 4px 15px rgba(0,0,0,0.06);
}

/* icon size control */
.img-why-c{
  width:60px;
  height:60px;
  object-fit:contain;
  margin-bottom:12px;
  display:block;
  margin-left:auto;
  margin-right:auto;
}

/* text style */
.why-card small{
  color:#4ea43e;
  font-weight:600;
  display:block;
  margin-bottom:4px;
}

.why-card h6{
  font-weight:700;
  margin-bottom:8px;
}

.why-card p{
  font-size:14px;
  color:#666;
  margin-bottom:0;
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
        <h1>All Mobile Brands We Buy</h1>
         <p>Choose your mobile brand and get the best price for your old, used, broken, or dead phones. Free pickup & instant payment!</p>
        </div>
      </div>

      <!-- RIGHT BLANK -->
   <div class="col-md-6 text-center text-md-end">
  <img src="images/img-bg1.png" alt="" class="img-fluid">
</div>


    </div>
  </div>
</section>


<!-- BRAND LIST -->
<section class="py-5">
<div class="container-fluid px-3 px-md-5">
<div class="row g-3">

  <!-- Apple -->
  <div class="col-6 col-md-3">
    <a href="sell-apple-phone.html" class="brand-link">
      <div class="brand-card">
        <img src="images/apple.svg" alt="Sell Old Apple iPhone">
      </div>
    </a>
  </div>

  <!-- Samsung -->
  <div class="col-6 col-md-3">
    <a href="sell-samsung-phone.html" class="brand-link">
      <div class="brand-card">
        <img src="images/samsung.svg" alt="Sell Old Samsung Phone">
      </div>
    </a>
  </div>

  <!-- OnePlus -->
  <div class="col-6 col-md-3">
    <a href="sell-oneplus-phone.html" class="brand-link">
      <div class="brand-card">
        <img src="images/oneplus.svg" alt="Sell Old OnePlus Phone">
      </div>
    </a>
  </div>

  <!-- Vivo -->
  <div class="col-6 col-md-3">
    <a href="sell-vivo-phone.html" class="brand-link">
      <div class="brand-card">
        <img src="images/vivo.svg" alt="Sell Old Vivo Phone">
      </div>
    </a>
  </div>

  <!-- Oppo -->
  <div class="col-6 col-md-3">
    <a href="sell-oppo-phone.html" class="brand-link">
      <div class="brand-card">
        <img src="images/oppo.svg" alt="Sell Old Oppo Phone">
      </div>
    </a>
  </div>

  <!-- Xiaomi -->
  <div class="col-6 col-md-3">
    <a href="sell-xiaomi-phone.html" class="brand-link">
      <div class="brand-card">
        <img src="images/xiaomi.svg" alt="Sell Old Xiaomi Phone">
      </div>
    </a>
  </div>

  <!-- Realme -->
  <div class="col-6 col-md-3">
    <a href="sell-realme-phone.html" class="brand-link">
      <div class="brand-card">
        <img src="images/google.svg" alt="Sell Old Realme Phone">
      </div>
    </a>
  </div>

  <!-- Motorola / Pixel -->
  <div class="col-6 col-md-3">
    <a href="sell-motorola-phone.html" class="brand-link">
      <div class="brand-card">
        <img src="images/motorola.svg" alt="Sell Old Motorola Phone">
      </div>
    </a>
  </div>

</div>

</div>
</section>
<section class="why-sell-section py-5">
  <div class="container text-center">

    <!-- TOP TEXT -->
    <h2 class="main-heading">
      "We make selling your used phone online fast, simple, and rewarding"
    </h2>
    <p class="sub-text">
      Experience a hassle-free way to sell your used mobile online and get the best value for it.
      Enjoy the simplicity and convenience!
    </p>

    <!-- SECTION TITLE -->
    <div class="mt-5 mb-4">
      <small class="text-uppercase text-muted">Why sell your used mobile phone to us?</small>
      <h3 class="fw-bold mt-2">
        Experience the best value, service, and convenience
      </h3>
      <p class="text-muted">
        We offer the best price for your old phone, complete transparency, and a smooth selling experience.
      </p>
    </div>

    <!-- CARDS -->
    <div class="row g-4 justify-content-center">

      <div class="col-md-4 col-sm-6">
        <div class="why-card">
          <img src="images/quality.png" alt="" class=" img-why-c">
          <small>Unmatched Value</small>
          <h6>Get at least 10% more</h6>
          <p>At ReUz, you get at least 10% more for your phone than other buyers. We offer honest and competitive prices.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="why-card">
          <img src="images/resolved.png" alt="" class=" img-why-c">
           <small>Seamless Process</small>
          <h6>Simple & Convenient</h6>
          <p>Our process is designed for your ease; quick, simple, and hassle-free. Share your phone details, book an appointment, and we handle the rest.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="why-card">
          <img src="images/management-service.png" alt="" class=" img-why-c">
           <small>Personalized Service</small>
          <h6>Unique solutions</h6>
          <p>ReUz understands that each customer is unique. Our team gives personalized support to ensure a smooth selling experience that fits your needs.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="why-card">
          <img src="images/instant-payment.png" alt="" class=" img-why-c">
           <small>Fast Payment</small>
          <h6>Get paid instantly</h6>
          <p>Once we review your phone and you accept the offer, we make sure you get paid swiftly and securely.</p>
        </div>
      </div>

          <div class="col-md-4 col-sm-6">
        <div class="why-card">
          <img src="images/trust.png" alt="" class=" img-why-c">
           <small>Trusted by Customers</small>
          <h6>Join our happy sellers</h6>
          <p>Thousands of happy customers trust ReUz for our clear and dependable service. Your trust is our top priority.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="sellfaq-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold">Mobile Brands FAQ</h2>
      <p class="text-muted">Sell phones from all top brands easily</p>
    </div>

    <div class="accordion sellfaq-accordion" id="sellfaqMain">

      <!-- 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#sellfaq1">
            Which mobile brands can I sell here?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq1" class="accordion-collapse collapse show" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            You can sell Apple, Samsung, OnePlus, Xiaomi, Vivo, Oppo, Realme and many more brands.
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq2">
            Do you buy old brand phones?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq2" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, we accept both old and new brand mobile phones.
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq3">
            Can I sell broken brand phones?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq3" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, broken, damaged and dead phones of all brands are accepted.
          </div>
        </div>
      </div>

      <!-- 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq4">
            How is brand phone price calculated?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq4" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Price depends on brand value, model, storage and condition.
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq5">
            Do I need original bill or box?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq5" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Not mandatory, but having bill and box may increase resale value.
          </div>
        </div>
      </div>

      <!-- 6 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq6">
            Is doorstep pickup available for all brands?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq6" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Yes, free doorstep pickup is available for all mobile brands.
          </div>
        </div>
      </div>

      <!-- 7 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq7">
            How will I get payment?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq7" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Payment is made instantly via UPI, bank transfer or cash.
          </div>
        </div>
      </div>

      <!-- 8 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sellfaq8">
            How long does selling process take?
            <span class="faq-icon ms-auto"></span>
          </button>
        </h2>
        <div id="sellfaq8" class="accordion-collapse collapse" data-bs-parent="#sellfaqMain">
          <div class="accordion-body">
            Usually the process completes within 24–48 hours.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-box">
<h2 class="fw-bold mb-3">Sell Your Mobile From Any Brand</h2>
<a class="btn btn-light btn-lg" href="contact-us.php">Check Price Now</a>
</section>
  <?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
